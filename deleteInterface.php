<html>
<head>
</head>
<body>
	<?php 
	include_once("UserFiles.php");
	include_once("deletepage.php");
	$obj = new UserFiles();
	if(!isset($_REQUEST['usercode'])){
		echo "You are not authorized to view this page";
	}
	else if((isset($_REQUEST['usercode'])) and (!isset($_REQUEST['status']))) {
		$usercode = $_REQUEST['usercode'];
		if ($obj->getUserFiles($usercode)){
			// echo "yattah!";
			$row=$obj->fetch();
			if($row>0){
				echo "<table border='1px'>
				<tr>
				<th width='50px'>FileID</th>
				<th width='200px'>File Name</th>
				</tr>";
				$count=0;
				$num=1;
			while ($row){
				if ($count==0){
				echo"<tr bgcolor='grey'>
				<td >$num</td>
				<td>{$row['filename']}</td>
				<td width='100px'><a href='deletepage.php?usercode={$usercode}&fileID={$row['file_id']}'>Delete</a></td>
				</tr>";
				$count=1;
				}
				else if($count==1){
				echo"<tr>
				<td >$num</td>
				<td>{$row['filename']}</td>
				<td width='100px'><a href='deletepage.php?usercode=$usercode&fileID={$row['file_id']}'>Delete</a></td>
				</tr>";
				$count=0;
				}
				$row=$obj->fetch();
				$num++;
			}
			echo "</table>";
		}
	}
	} 
	else if((isset($_REQUEST['usercode'])) and (isset($_REQUEST['status']))) {
		$usercode= $_REQUEST['usercode'];
		echo $_REQUEST['status'];
		if ($obj->getUserFiles($usercode)){
			// echo "yattah!";
			$row=$obj->fetch();
			if($row>0){
				echo "<table border='1px'>
				<tr>
				<th width='50px'>FileID</th>
				<th width='200px'>File Name</th>
				</tr>";
				$count=0;
				$num=1;
			while ($row){
				if ($count==0){
				echo"<tr bgcolor='grey'>
				<td >$num</td>
				<td>{$row['filename']}</td>
				<td width='100px'><a href='deletepage.php?usercode={$usercode}&fileID={$row['file_id']}'>Delete</a></td>
				</tr>";
				$count=1;
				}
				else if($count==1){
				echo"<tr>
				<td >$num</td>
				<td>{$row['filename']}</td>
				<td width='100px'><a href='deletepage.php?usercode=$usercode&fileID={$row['file_id']}'>Delete</a></td>
				</tr>";
				$count=0;
				}
				$row=$obj->fetch();
				$num++;
			}
			echo "</table>";
		}
	}
	}
	else if(isset($_REQUEST['status'])){
		echo $_REQUEST['status'];
	}
	else {
		echo "No Files for this page";
		exit();
	}
?>

</body>
</html>