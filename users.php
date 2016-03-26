<?php

include('adb.php');

class users extends adb {

    /**
     * Inserts User into the database
     * @param int $usercode sql string to execute
     * @param  string $firstname Description
     * @param string $lastname Description
     * @param string $department Description
     * @param string $type Description
     * @param string $email Description
     * @param int $phone Description
     * @param int $fax Description
     * @param string $password Description
     * @return boolean True if successful
     */
    function addUser($usercode, $firstname, $lastname, $co , $email, $phone, $fax, $password) {
        return $this->query("Insert into irb_user set USER_ID ='$usercode', FIRSTNAME='$firstname', LASTNAME='$lastname',CO_RESEARCHER='$co', EMAIL='$email',PHONE='$phone',FAX='$fax', PASSWORD = MD5('$password')");
    }

  

    /**
     * Returns Set of Users
     * @return boolean True if successful
     */
    function getUser() {
        return $this->query("select USER_ID , FIRSTNAME, LASTNAME, CO_RESEARCHER, EMAIL,PHONE,FAX, PASSWORD from irb_user");
    }

    /**
     * Validates User 
     * @param int $id User Id to check against
     * @param string $password password to check against
     * @return boolean True if successful
     */
    function validateUser($id, $password) {
        return $this->query("select type from irb_user where USER_ID='$id' and PASSWORD='$password'");
    }
	function validateReviewer($id, $password){
		return $this->query("select type from review where RID='$id' and PASSWORD='$password'");
	}

}

?>