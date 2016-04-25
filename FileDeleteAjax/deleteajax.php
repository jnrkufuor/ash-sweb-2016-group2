<html>
<head>
	<link href="index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">
	var currentObj=null;
	function deleteFileComplete(xhr,status){
		if(status!="success"){
			confirm("Unable to delete file");
			return;
		}
		// alert("yattah!");
		var obj=$.parseJSON(xhr.responseText);
		if (obj.result==0){
			alert(obj.message);
		}
		else {
			var row = currentObj.parentNode.parentNode;
			row.parentNode.removeChild(row);
			alert(obj.message);
		}
	}

	function deleteFile(obj,usercode,fileID){
		var r = confirm("Are you sure you want to delete this file?");
		if (r==false){
			// alert("yattah");
		}
		else{
			var ajaxURL="usersajax.php?cmd=1&usercode="+usercode+"&fileID="+fileID;
			$.ajax(ajaxURL,
				{async:true,
					complete: deleteFileComplete}
					);
			currentObj=obj;
		}
	}
	</script>
</head>
<body>
	<header><a href="#" title=""><img src="images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="../Lab - usersajax_delete/deleteajax.php" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review2.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<div class="menu"><span>Uploaded Files</span></div>
	<!-- <h3>Uploaded Files</h3> -->
	<div style="margin-left:25%" class="content" style="color:black" style="background-color:black">
		<?php
		include_once("userFiles.php");
		$obj = new userFiles();
		if(!isset($_REQUEST['usercode'])){
			echo "<span>No usercode provided</span>";
			exit();
		}
		$usercode = $_REQUEST['usercode'];
		if (!($obj->getUserFiles($usercode))) {
			echo "<span>Unable to access files</span>";
			exit();
		}
		$row=$obj->fetch();
		if($row>0){
			echo "<table class='deltab'>
			<tr id='hd'>
			<td></td>
			<td>File Name</td>";
			$count=0;
			$num=1;
			while ($row){
				if ($count==0){
					echo"<tr id='r1'>
					<td >$num</td>
					<td>{$row['FileName']}</td>
					<td style='width:2%'' class='action'><button onclick='deleteFile(this,$usercode,{$row['FileID']})'><img class='bin' src='images/delete.png'></button></td>
					</tr>";
					$count=1;
				}
				else if($count==1){
					echo"<tr id='r2'>
					<td >$num</td>
					<td>{$row['FileName']}</td>
					<td style='width:2%'' class='action'><button onclick='deleteFile(this,$usercode,{$row['FileID']})'><img class='bin' src='images/delete.png'></button></td>
					</tr>";
				}
				$row=$obj->fetch();
				$num++;
			}
			echo "</table>";
		}
		else {
			echo "<span>Sorry. No files to display</span>";
		}
		?>
	</div>
</body>
</html>