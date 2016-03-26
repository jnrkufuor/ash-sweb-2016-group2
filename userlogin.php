
<?php

include('users.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $obj = new users();

    if (!$obj->validateUser($id,$password)) {
		if ($obj->validateReviewer($id,$password)){
        window.alert("Error Validating");
        header("Location:login.php");
		}
    }
	

    while ($row = $obj->fetch()) {

        if (!$row) {
            header("Location:login.php?error=$err");
        } else {
            header("Location:dashboard.php?rid=$id & type={$row['type']}");
        }
    }
}
?>