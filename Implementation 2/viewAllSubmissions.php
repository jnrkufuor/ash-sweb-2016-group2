<html>
	<head>
		<link href="../UI template/index.css" rel="stylesheet" type="text/css">
		<title>Submission List</title>
		<script type="text/javascript">
		function view(id){
		window.open("review_exemption.php?id="+id, "_self");
	}
		</script>
	</head>
	<body>
	<div class="main">
	<header><a href="../UI template/index.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="../UI template/reviewerIndex.html" style ="text-decoration:none"><div class="dashboard"><h3>Dashboard</h3></div></a>
		<a href="viewAllSubmissions.php" style ="text-decoration:none"><div class="submissions"><h3>Submissions</h3></div></a>

	</div>

	<div class="menu">
		<span>View Submissions</span>
	</div>
	<div>
	
			<div class="display">

<?php

	//Creating object of users class
	include_once ("submission.php");
	$obj = new submission();
		
		
	//Call the object's getUsers method and check for error
	
		$r = $obj -> getSubmissions();
	
	
	 
	if(!$r){
		echo "error";
	}
	else{		
    // show the result
	echo "<table class ='revtab'><tr id='hd'>
				   <td>SUBMISSION ID</td>
	               <td>SUBMISSION DATE</td>
	               <td>TITLE OF PROJECT</td>
	               <td> INVESTIGATOR'S FIRSTNAME</td>
	        	   <td> INVESTIGATOR'S LASTNAME</td>
	        	   <td> CO_INVESTIGATOR </td>
	               </tr>";

	$count = 0;
	while ($row = $obj ->fetch()){

		// display users in table
		if($count%2==0){
        echo"<tr id='r1' onclick='view({$row['submissionID']})'>
        	<td>{$row['submissionID']}</td>
            <td>{$row['submissionDate']}</td>
        	<td>{$row['title']}</td>
        	<td>{$row['FIRSTNAME']}</td>
        	<td>{$row['LASTNAME']}</td>
        	<td>{$row['CO_RESEARCHER']}</td>
        	</tr>";

	        }
	        else{
	       echo " <tr id='r2' onclick='view({$row['submissionID']})'>
	       	<td>{$row['submissionID']}</td>
	        <td>{$row['submissionDate']}</td>
        	<td>{$row['title']}</td>
        	<td>{$row['FIRSTNAME']}</td>
        	<td>{$row['LASTNAME']}</td>
        	<td>{$row['CO_RESEARCHER']}</td>
        	</tr>";

        }

        $count++;

}

echo "</table>";
	}

	
	
?>
</div>
<br><br><br><br><br><br><br><br>
			
	</div>
	<br>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	</div>
</body>
</html>