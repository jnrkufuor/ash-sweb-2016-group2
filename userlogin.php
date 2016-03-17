
<?php
include('users.php');

$obj = new users();

if(!$obj->getUser())
{
	echo 'Error getting Users';
}

?>