<?php

	include_once ("submission.php");
	$obj = new submission();

   
	$procedureRisks= "";

	if(isset($_REQUEST['procedureRisks'])){
		$procedureRisks= $_REQUEST['procedureRisks'];
		if($procedureRisks != ""){
		$procedureRisks = implode(",", $procedureRisks);
	}
	}

	$id = $_REQUEST['id'];

	$r = $obj -> updateRisk($id,$procedureRisks);
	if($r == false){
		echo "error";
	}
	else{
		header("Location: confidentiality.php?id=$id");
	}
?>