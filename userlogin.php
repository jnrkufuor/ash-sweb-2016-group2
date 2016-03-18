
<?php

include('users.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $obj = new users();

    if (!$obj->getUser()) {
        echo 'Error getting Users';
    }

    while ($row = $obj->fetch()) {
        if($id == row['USER_ID'] && ){
            
        }
        }
    }

?>