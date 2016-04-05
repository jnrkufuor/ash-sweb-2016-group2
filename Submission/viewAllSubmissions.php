<html>
	<head>
		<title>Submission List</title>
	</head>
	<body>

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
	echo "<table border=2 ><tr>
				   <td>SUBMISSION ID</td>
	               <td>SUBMISSION DATE</td>
	               <td>TITLE OF PROJECT</td>
	               <td> INVESTIGATOR'S FIRSTNAME</td>
	        	   <td> INVESTIGATOR'S LASTNAME</td>
	        	   <td> CO_INVESTIGATOR </td>
	        	   <td> OPTIONS </td>
	               </tr>";

	$count = 0;
	while ($row = $obj ->fetch()){
		echo "<tr>";

		// display users in table
		if($count%2==0){
        echo"<td bgcolor='yellow'>{$row['submissionID']}</td>
            <td bgcolor='yellow'>{$row['submissionDate']}</td>
        	<td bgcolor='yellow'>{$row['title']}</td>
        	<td bgcolor='yellow'>{$row['FIRSTNAME']}</td>
        	<td bgcolor='yellow'>{$row['LASTNAME']}</td>
        	<td bgcolor='yellow'>{$row['CO_RESEARCHER']}</td>
        	<td bgcolor='yellow'><a href='review_exemption.php?id={$row['submissionID']}'>View Submission</a>";
	        }
	        else{
	       echo "<td>{$row['submissionID']}</td>
	        <td>{$row['submissionDate']}</td>
        	<td>{$row['title']}</td>
        	<td>{$row['FIRSTNAME']}</td>
        	<td>{$row['LASTNAME']}</td>
        	<td>{$row['CO_RESEARCHER']}</td>
        	<td><a href='review_exemption.php?id={$row['submissionID']}'>View Submission</a>
        	</tr>";

        }

        $count++;

}

echo "</table>";
	}

	
	
?>
</body>
</html>	