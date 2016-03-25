<?php
/**
* Author: @David Haq Inusah
* File retrieval and deletion helper class
*/
include_once("adb.php");

class userFiles extends adb{

/**
* Class Constructor 
*/
function userFiles(){
	
}
/**
*Function to delete a file given the file ID and the possessing user's ID
*@param $fileID: The file to be deleted
*@param $usercode: The owner of the file to be deleted
*@return true if file is deleted else false
*/
function deleteFile ($fileID,$usercode){
	$strQuery="delete from supporting_documents where file_id=$fileID and researcher_id=$usercode";
	return $this->query($strQuery);
}

/**
*Function to retrieve files given the possessing user's ID
*@param $usercode: The owner of the file to be retrieved
*@return true if files are available for retrieval else false
*/
function getUserFiles($usercode){
 $strQuery="select filename, file_id from supporting_documents where researcher_id=$usercode";
 	return $this->query($strQuery);
 }
}	
?>

