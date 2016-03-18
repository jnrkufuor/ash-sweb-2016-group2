<?php
include_once("adb.php");

class userFiles extends adb{

function userFiles(){
	
}

function deleteFile ($fileID,$usercode){
	$strQuery="delete from supporting_documents where file_id=$fileID and researcher_id=$usercode";
	return $this->query($strQuery);
}

function getUserFiles($usercode){
 $strQuery="select filename, file_id from supporting_documents where researcher_id=$usercode";
 	return $this->query($strQuery);
 }
}	
?>

