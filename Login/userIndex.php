<!DOCTYPE html>
<html>
<head>
	<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<header><a href="irbinterface.html"><img src="images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="irbinterface.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="review.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="mainmenu">
		<span>Dashboard</span>
	</div>
	<div class="content">
		<span>Welcome David, here is your status in all IRB applications<span><br><br><!-- <br><br> -->
			<div class="display">
				<?php
if(isset($_REQUEST['success']))
{
  if ($_REQUEST['success']=='false')
    echo '<script> window.alert("Successful")</script>';
}

include("users.php");

if(isset($_REQUEST['purpose']) &&$_REQUEST['purpose']=="user"){

$obj = new users();
if(!$obj->getUser())
{
  echo "Error getting Users";
}
echo" <table border='1' style='align=center;'>
    <tr>
    <th>User ID </th>
    <th>Firstname </th>
    <th>Lastname </th>
    <th>Co-Researcher </th>
    <th>Email </th>
    <th>Phone </th>
    <th>Fax </th>
    </tr>";
while($row=$obj->fetch())
{
  echo" <tr>
  <td>{$row['USER_ID']}</td>
  <td>{$row['FIRSTNAME']}</td>
  <td>{$row['LASTNAME']}</td>
  <td>{$row['CO_RESEARCHER']}</td>
  <td>{$row['EMAIL']}</td>
  <td>{$row['PHONE']}</td>
   <td>{$row['FAX']}</td>
    <td><a href='userdelete.php?id={$row['USER_ID']}'>Delete User</a><td>
  </tr>"; 
}
echo "</table>";
}



else if(isset($_REQUEST['purpose'])&&$_REQUEST['purpose']=="lec"){
$lec= new users();
if(!$lec->getLec())
{
  echo "Error getting Lecturers";
}
echo" <table border='1' style='align=center;'>
    <tr>
    <th>Lecturer ID </th>
  
    </tr>";
while($tbl=$lec->fetch())
{
  echo" <tr>
  <td>{$tbl['RID']}</td>
  <td>{$tbl['TYPE']}</td>
    <td><a href='userdelete.php?rid={$tbl['RID']}'>Delete Lecturer</a><td>
  </tr>";
}
echo "</table>";
}
else
{
	echo "<h1>Welcome to the Admin Page</h1>";
}
?> 
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<a href="form.html"><button>Create New IRB Application</button></a>
	</div>
	<br>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	</div>
</body>
</html>