<?php

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
		header("Location: risk.php?id=$id");
	}
?>