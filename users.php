<?php

include('adb.php');
class users extends adb 
{ 

	function addUser($usercode,$firstname,$lastname,$department,$type,$email,$phone,$fax,$password)
	{
		return $this->query("Insert into irb_user set USER_ID ='$usercode', FIRSTNAME='$firstname', LASTNAME='lastname', USERTYPE='$type',DEPARTMENT='$department', EMAIL='$email',PHONE='$phone',FAX='$fax', PASSWORD ='$password'");
	}

	function getUser()
	{
        return $this->query("select USER_ID, FIRSTNAME, LASTNAME, USERTYPE, DEPARTMENT, EMAIL, PHONE, FAX, PASSWORD from irb_user");
	}

}


?>