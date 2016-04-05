<?php

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
		header("Location: benefits.php?id=$id");
	}
?>