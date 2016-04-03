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
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">About Us</a></li>
  <li><a href="anna/exemptionRequest.php">Apply</a></li>
  <li><a href="#about">Upload File</a></li>
</ul>
</div>

<div>
<?php
if(isset($_REQUEST['success']))
{
  if ($_REQUEST['success']=='false')
    echo '<script> window.alert("User Could Not Be Deleted")</script>';
}

include("users.php");
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
   <td><a href='usersadd.php?edit=true&id={$row['USER_ID']}&fn= {$row['FIRSTNAME']} &ln= {$row['LASTNAME']} &cr={$row['CO_RESEARCHER']}&email={$row['EMAIL']} &phone={$row['PHONE']} &fax={$row['FAX']}'> Edit User</a><td>
    <td><a href='userdelete.php?id={$row['USER_ID']}'>Delete User</a><td>
  </tr>";
  
}
echo "</table>";
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