<?php

	/**
	*This script retrieves submission input and inserts it into the submission table in the database
	*/

	include_once ("submission.php");
	$obj = new submission();

	if(!isset($_REQUEST['exemption'])){
		exit();	
	}

   	/**
	retrieving input data from url
	*/
	$exemption = $_REQUEST['exemption'];
	$title = $_REQUEST['title'];
	$subjectCharacteristics = $_REQUEST['subjectCharacteristics'];
	$specialClasses = $_REQUEST['specialClasses'];
	$recruitment = $_REQUEST['recruitment'];
	$partcipnatInfo = $_REQUEST['partcipnatInfo'];
	$researchMethod = $_REQUEST['researchMethod'];
	$dataSources = $_REQUEST['dataSources'];
	$procedureDetails = $_REQUEST['procedureDetails'];
	$confidentialityExtent = $_REQUEST['confidentialityExtent'];
	$dataStorage = $_REQUEST['dataStorage'];
	$resultDissemination = $_REQUEST['resultDissemination'];
	$subjectInfo = $_REQUEST['subjectInfo'];
	$confidentialityProtection = $_REQUEST['confidentialityProtection'];
	$participantConpensation = $_REQUEST['participantConpensation'];
	$participantBenefits = $_REQUEST['participantBenefits'];

	if(isset($_REQUEST['procedureRisks'])){
		$procedureRisks= $_REQUEST['procedureRisks'];
		if($procedureRisks != ""){
		$procedureRisks = implode(",", $procedureRisks); //converting risk array to string
	}
	}

	
	//insert query to insert into submission table using makesubmission method
	$r = $obj -> makeSubmission($title, $exemption, $subjectCharacteristics, $specialClasses, $recruitment,
							$partcipnatInfo, $researchMethod, $dataSources, $procedureRisks, $procedureDetails, $confidentialityExtent, $dataStorage, $resultDissemination, $subjectInfo, 
							$confidentialityProtection, $participantConpensation, $participantBenefits);


	//display result of query 
	if($r == false){
		echo "error";
	}
	else{
		echo "Submission successful";

	}
?>