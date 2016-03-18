<?php
include_once("../userFiles.php");

class testUserFiles extends PHPUnit_Framework_TestCase{

function testDeleteFile (){
	$userFiles = new userFiles();
	$this->assertEquals(true,$userFiles->deleteFile(15,1));
	return $userFiles;
}
function testGetUserFiles(){
	$userFiles = new userFiles();
	$this->assertEquals(true,$userFiles->getUserFiles(1));
 	return $userFiles;
 }
}	
?>

