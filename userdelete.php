<?php
include("users.php");
$obj=new users();
if(isset($_REQUEST['id']))
{
	if($obj->deleteUser($_REQUEST['id']))
	{
		header("Location:adminhome.php?success=true");
	}
	else 
	{
		header("Location:adminhome.php?success=false");
	}
}
if(isset($_REQUEST['rid']))
{
	if($obj->deleteLec($_REQUEST['rid']))
	{
		header("Location:adminhome.php?success=true");
	}
	else 
	{
		header("Location:adminhome.php?success=false");
	}
}

?>