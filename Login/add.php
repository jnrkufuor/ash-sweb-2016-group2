<?php
  if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $firstname = $_REQUEST['firstname'];
            $password = $_REQUEST['pword'];
            $lastname = $_REQUEST['lastname'];
            $fax = $_REQUEST['fax'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
			$co = $_REQUEST['co_researcher'];
            include_once("users.php");
            $obj = new users();
            $r = $obj->addUser($id, $firstname, $lastname, $co, $email, $phone, $fax, $password);
            if ($r == false) {
              echo '<script> window.alert("Please Sign Up Again")</script>';
			  echo '<script>window.location.href = "../New UI/IRB_home.php";</script>';
            }
            else{
                echo "<script type='text/javascript'> alert('You Have Been Added'); </script>";
                 echo '<script>window.location.href = "../New UI/IRB_home.php";</script>';
            }
        }
?>