
<?php
	//check command
	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}
	/*get command*/
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			pun();
			//fileUpload();		//if cmd=1 the call delete
			break;
		default:
			echo "wrong cmd";	//change to json message
			break;
	}
	
	function pun(){
		echo '{"result":0,"message":"File add failed! "}';
	}
	
	
	
?>
