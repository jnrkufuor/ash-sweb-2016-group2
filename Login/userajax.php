<?php
if (isset($_REQUEST["cmd"]))
{
	$cmd=$_REQUEST["cmd"];
	switch ($cmd){
		case 1: 
		deleteUsers();
		break;
		case 2:
		deleteLec();
		break;
		default:
		echo "";
		
	}
}
	
	function deleteUsers()
	{
		include("users.php");
		$obj=new users();
		if (isset($_REQUEST['id'])){
		if(!$obj->deleteUser($_REQUEST['id']))
		{
		    echo '{"result":0,"message":"user not deleted"}';
			return;
		}

			echo '{"result":1,"message":"user deleted"}';
			return ;
		}
	
	}
    function deleteLec()
	{
		include("users.php");
		$obj=new users();
		if (isset($_REQUEST['id'])){
		if(!$obj->deleteLec($_REQUEST['id']))
		{
		    echo '{"result":0,"message":"Reviewer not deleted"}';
			return;
		}

			echo '{"result":1,"message":"Reviewer deleted"}';
			return ;
		}
	
	}


?>
