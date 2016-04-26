<?php
	/**
	*@author Anna Addei
	*This is script implements functions used in updating fields of the database for the IRB application form
	*/

	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}

	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			newSubmission();	
			break;
		case 2:
			subjects();	
			break;
		case 3:
			risk();	
			break;
		case 4:
			confidentiality();
			break;
		case 5:
			benefits();
			break;
		case 6:
			title();
			break;

	}

	/**
	* This function creates a new submission entry
	*/
	function newSubmission(){
	include_once ("submission.php");
	$obj = new submission();

	if(!isset($_REQUEST['title'])){
		exit();	
	}

	    $exemption ="";
		$title ="";
		$subjectCharacteristics ="";
		$specialClasses ="";
		$recruitment ="";
		$partcipnatInfo ="";
		$researchMethod ="";
		$dataSources ="";
		$procedureRisks="";
		$procedureDetails ="";
		$confidentialityExtent ="";
		$dataStorage ="";
		$resultDissemination ="";
		$subjectInfo ="";
		$confidentialityProtection ="";
		$participantConpensation = "";
		$participantBenefits = "";

	if(isset($_REQUEST['exemption'])){
		$exemption = $_REQUEST['exemption'];	
	}
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];	
	}
	if(isset($_REQUEST['title'])){
		$title = $_REQUEST['title'];	
	}

	$r = $obj -> makeSubmission($id, $title, $exemption, $subjectCharacteristics, $specialClasses, $recruitment,
							$partcipnatInfo, $researchMethod, $dataSources, $procedureRisks, $procedureDetails, $confidentialityExtent, $dataStorage, $resultDissemination, $subjectInfo, 
							$confidentialityProtection, $participantConpensation, $participantBenefits);
	if($r == false){
		echo "error";
	}
	else{
		header("Location: new_subjects.php");
	}
}

	/**
	*This function to update fields relating to research subjects in the submission table
	*/
	 function subjects(){
 	include_once ("submission.php");
	$obj = new submission();

	if(!isset($_REQUEST['subjectCharacteristics'])){
			exit();
	}
	$id = $_REQUEST['id'];
	$subjectCharacteristics=$_REQUEST['subjectCharacteristics'];
	$specialClasses=$_REQUEST['specialClasses'];
	$recruitment=$_REQUEST['recruitment'];
	$partcipnatInfo=$_REQUEST['partcipnatInfo'];
	$researchMethod=$_REQUEST['researchMethod'];
	$dataSources=$_REQUEST['dataSources'];

	$r = $obj -> updateSubjects($id,$subjectCharacteristics, $specialClasses, $recruitment,
							$partcipnatInfo, $researchMethod, $dataSources);
	if($r == false){
		echo "error";
	}
	else{
		header("Location: new_risk.php?id=$id");
	}
 }

	/**
	*This function to update fields relating to risks for participants of the research
	*/
 function risk(){
 	include_once ("submission.php");
	$obj = new submission();

   
	$procedureRisks= "";

	if(isset($_REQUEST['procedureRisks'])){
		$procedureRisks= $_REQUEST['procedureRisks'];
	}

	$id = $_REQUEST['id'];
	$procedureDetails = $_REQUEST['procedureDetails'];

	$r = $obj -> updateRisk($id,$procedureRisks,$procedureDetails);
	if($r == false){
		echo "error";
	}
	else{
		header("Location: new_confidentiality.php?id=$id");
	}
 }


 	/**
	*This function to update fields realting to the protection of participant confidentiality
	*/
	 function confidentiality(){
 	include_once ("submission.php");
	$obj = new submission();

	if(!isset($_REQUEST['confidentialityExtent'])){
			exit();
	}
	$id = $_REQUEST['id'];
	$confidentialityExtent=$_REQUEST['confidentialityExtent'];
	$dataStorage=$_REQUEST['dataStorage'];
	$resultDissemination=$_REQUEST['resultDissemination'];
	$subjectInfo=$_REQUEST['subjectInfo'];
	$confidentialityProtection=$_REQUEST['confidentialityProtection'];

	$r = $obj -> updateConfidentiality($id,$dataStorage, $confidentialityExtent, $resultDissemination,
							$subjectInfo, $confidentialityProtection);
	if($r == false){
		echo "error";
	}
	else{
		header("Location: new_benefits.php?id=$id");
	}
 }


	/**
	*This function to update fields in submission table relating to benefits research participants gain
	*/
 	function benefits(){
	include_once ("submission.php");
	$obj = new submission();


	if(!isset($_REQUEST['participantConpensation'])){
			exit();
	}

	$id = $_REQUEST['id'];
	$participantConpensation=$_REQUEST['participantConpensation'];
	$participantBenefits=$_REQUEST['participantBenefits'];


	$r = $obj -> submit($id,$participantBenefits, $participantConpensation);
	
	if($r == false){
		echo "error";
	}
	else{
		header("Location: IRB_Dashboard.php");
	}
}

	/**
	*This function to updates the title and exemption fields of the submission table
	*/
	function title(){
		include_once ("submission.php");
	$obj = new submission();

	if(!isset($_REQUEST['sid'])){
			exit();
	}
	$sid = $_REQUEST['sid'];
	
	$exemption=$_REQUEST['exemption'];
	$title=$_REQUEST['title'];

	$r = $obj -> updateExemption($sid, $title, $exemption);
	if($r == false){
		echo "error";
	}
	else{
		header("Location: new_subjects.php?id=$sid");
	}
	}
?>