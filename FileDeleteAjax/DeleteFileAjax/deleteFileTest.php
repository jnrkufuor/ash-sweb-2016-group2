<?php
include_once("../usersajax.php");

class deleteFileTest extends PHPUnit_Framework_TestCase{

function testDeleteFile (){
	$URL="usersajax.php?cmd=1&usercode=27302017&fileID=23";
	$this->assertTrue('{"result":1,"message":"File deleted"}',$URL);
}

}	
?>

