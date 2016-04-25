<?php
include_once("../usersajax.php");

class test extends PHPUnit_Framework_TestCase{

	function test (){
		$URL="usersajax.php?cmd=1&usercode=27302017&fileID=24";
		$this->assertTrue('{"result":1,"message":"File deleted"}',$URL);
	}

}	
?>

