
<?php

include('users.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $obj = new users();

    if (!$obj->validate($id,$password)) {
        echo 'Error getting Users';
        header("Location:login.php");
    }

    while ($row = $obj->fetch()) {

        if (!$row) {
            header("Location:userlogin.php");
        } else {
            header("Location:dashboard.php");
        }
    }
}
?>