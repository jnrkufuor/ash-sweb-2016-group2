<?php
	//check command
	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}
	/*get command*/
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			saveRequest();		//if cmd=1 the call delete
			break;
		case 2:
			updateRequest();
			break;
		case 3:
			updateSubject();
			break;
		case 4:
			updateRisk();
			break;
		case 5:
			updateConfidentiality();
			break;
		case 6:
			updateBenefits();
			break;
	}

	function saveRequest(){
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
		echo '{"result":0,"message":"Error, details not saved"}';
	}
	else{
		echo '{"result":0,"message":"saved"}';
	}
	}

	function updateRequest(){
		include_once ("submission.php");
		$obj = new submission();

		if(!$_REQUEST['sid']){
		$r = $obj-> getSubmissionId();
			if(!$r){
			echo "result is false";
			}
			else{
			//fetch
			$result=$obj ->fetch();
		
			$id = $result['submissionID'];

			}
		}
		else{
			$id=$_REQUEST['sid'];
		}

		$exemption=$_REQUEST['exemption'];
	$title=$_REQUEST['title'];

	$r = $obj -> updateExemption($id, $title, $exemption);
	if($r == false){
		echo '{"result":0,"message":"Error, details not saved"}';
	}
	else{
		echo '{"result":0,"message":"saved"}';
	}
	}

	function updateSubject(){
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
		echo '{"result":0,"message":"Error, details not saved"}';
	}
	else{
		echo '{"result":0,"message":"saved"}';
	}
	}

	function updateRisk(){
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
		echo '{"result":0,"message":"Error, details not saved"}';
	}
	else{
		echo '{"result":0,"message":"saved"}';
	}
	}

	function updateConfidentiality(){
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
		echo '{"result":0,"message":"Error, details not saved"}';
	}
	else{
		echo '{"result":0,"message":"saved"}';
	}
	}

	function updateBenefits(){
		include_once ("submission.php");
	$obj = new submission();


	if(!isset($_REQUEST['participantConpensation'])){
			exit();
	}

	$id = $_REQUEST['id'];
	$participantConpensation=$_REQUEST['participantConpensation'];
	$participantBenefits=$_REQUEST['participantBenefits'];

	$r = $obj -> updateBenefits($id,$participantBenefits, $participantConpensation);

	if($r == false){
		echo '{"result":0,"message":"Error, details not saved"}';
	}
	else{
		echo '{"result":0,"message":"saved"}';
	}
	}


?>