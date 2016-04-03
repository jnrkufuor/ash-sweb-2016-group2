<?php
include("users.php");
$obj=new users();
if(isset($_REQUEST['id']))
{
	if($obj->deleteUser($_REQUEST['id']))
	{
		header("Location:home.php?success=true");
	}
	else 
	{
		header("Location:home.php?success=true");
	}
}

?>