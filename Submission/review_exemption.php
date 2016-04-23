<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
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
	<br><br>
	<?php
		include_once("submission.php");
		$obj = new submission();
							   
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}


		$r = $obj -> getSubmissionByCode($id);
								
		if(!$r){
			echo "Error getting the user to edit";
			exit();
		}
		else{
		$row = $obj ->fetch();
		}
	?>
	
		
		
		<form style="margin-left:30%" action="review_subjects.php?id={$row['submissionID']}" method="GET">
		<div class="mainDiv" style="height: 710px">
		<div style="margin-bottom: 30px; margin-top: 25px">
		<div style="margin-bottom: 3%;"><b style="font-size: 25px">Principal Investigator:</b><textarea style="  width:25%; height:3%" name="investigator"  readonly> <?php echo $row['FIRSTNAME'] ?> </textarea> </div>
		<div style="margin-bottom: 3%;"><b style="font-size: 25px">Co - Investigator:</b> <textarea name="coinvestigator" style="width:25%; height:3%" readonly> <?php echo $row['CO_RESEARCHER'] ?></textarea></div>
			<div ><b style="font-size: 25px;">Title of Project:</b> <textarea name="exemption" style="width:97%; height:4%" readonly> <?php echo $row['title'] ?></textarea>  </div>
			
			<h2>Exemption Request</h2>
			<div><p>If you are requesting an exemption from Human Subject Review Commitee (HSRC) review, explain the basis for the requested exemption.</p></div>
			<div><textarea name="exemption" style="width:97%; height:40%" readonly> <?php echo $row['exemption'] ?></textarea></div>
		<?php echo "<div style='margin-top: 40px'><b>Progress:</b> &nbsp;<progress value='20' max='100' ></progress> &nbsp; &nbsp; &nbsp; &nbsp; <a style='float:right;' href='review_subjects.php?id=$id'> Next</a></div> "; ?>
		
		</div>
		</form>
	</div><br><br>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	<script>
function myFunction() {
    alert("You have not completed the form");
}
</script>
</body>
</html>