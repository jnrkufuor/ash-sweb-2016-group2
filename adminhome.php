<!DOCTYPE html>

<html>

<head>
<title> IRB Web </title>
<link rel="stylesheet" href="css/main.css"/>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50;
	
}
</style>
</head>

<body>

<header class="header">
	<h1 style="position:relative"> Institutional Review Board</h1> 
</header>

<div>
<ul>
  <li><a class="active" href="adminhome.php">Home</a></li>
  <li><a href="adminhome.php?purpose=user">View Users</a></li>
  <li><a href="Submission/viewAllSubmissions.php">View Submissions</a></li>
  <li><a href="adminhome.php?purpose=lec">View Lecturers</a></li>
</ul>
</div>

<div style="margin: 0 auto; width=10px;" >
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

<br> <br> <br> <br> <br> <br>
<br> <br> <br> <br> <br> <br>
<br> <br> <br>
<br> <br> <br>
<br> <br> <br>
</div>

<footer class="footer">
	<p style="text-align:center"> <Strong> Ashesi University College. All rights reserved.
	 <br>1 University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330  </strong> <p>
</footer>
</body>

</html>