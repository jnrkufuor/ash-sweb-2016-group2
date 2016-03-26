<?php
include_once("../users.php");

class testAdb extends PHPUnit_Framework_TestCase
{
    public function testAddUser()
    {
		// generate test username sername
		
        $obj=new users();
		
        $this->assertEquals(true, 
		$obj->addUser(
			"27301017","firstname","lastname","usertype","department",1,"phone@",12,"as"));
		
		//count the number of fields
		$this->assertCount(9,$obj->fetch());
    }
	
	

	

	
}