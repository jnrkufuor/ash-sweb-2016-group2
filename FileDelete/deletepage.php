<?php
include_once("userFiles.php");
$obj = new userFiles();
if((isset($_REQUEST['usercode'])) and (isset($_REQUEST['fileID']))){
	$usercode = $_REQUEST['usercode'];
	$fileID = $_REQUEST['fileID'];
	if($obj->deleteFile($fileID,$usercode)){
		echo $status="File Deleted";
	}
	header('Location: deleteInterface.php?usercode='.$usercode.'&status='.$status);
}
else if(!((isset($_REQUEST['usercode'])) and (isset($_REQUEST['fileID'])))){
	//  $status="No proprietary user or selected file to delete";
	// $usercode;
	//  header('Location: deleteInterface.php?usercode=1');
	return;
}
// header('Location: deleteInterface.php?usercode=$usercode&status='.$status)
?>