<?php

	include_once ("submission.php");
	$obj = new submission();

	if(!isset($_REQUEST['sid'])){
			exit();
	}
	$sid = $_REQUEST['sid'];
	
	$exemption=$_REQUEST['exemption'];
	$title=$_REQUEST['title'];

	$r = $obj -> updateExemption($sid, $title);
	if($r == false){
		echo "error";
	}
	else{
		header("Location: subjects.php?id=$id");
	}
?>