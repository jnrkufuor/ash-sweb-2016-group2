<?php

	include_once ("submission.php");
	$obj = new submission();


	if(!isset($_REQUEST['participantConpensation'])){
			exit();
	}

	$id = $_REQUEST['id'];
	$participantConpensation=$_REQUEST['participantConpensation'];
	$participantBenefits=$_REQUEST['participantBenefits'];

	if(isset($_REQUEST['save'])){
	$r = $obj -> updateBenefits($id,$participantBenefits, $participantConpensation);
}
	else{
	$r = $obj -> submit($id,$participantBenefits, $participantConpensation);
	}
	if($r == false){
		echo "error";
	}
	else{
		header("Location: ../UI template/index.html");
	}
?>