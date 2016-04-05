<?php

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
		header("Location: subjects.php");
	}
?>