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

<form style="margin-left:32%" action="risk.php?" method="GET">
		<div style="height:350px" class="mainDiv">
			<h2 id="headings">Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way?</p></div>
			<div><textarea name="participantConpensation" style="width:97%; height: 10%" readonly><?php echo $row['participantConpensation'] ?></textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? </p></div>
			<div><textarea name="participantBenefits" style="width:97%; height: 10%" required><?php echo $row['participantBenefits'] ?></textarea></div>
			<br/>
			<br/>
			<?php echo "<div>Progress:</b> &nbsp;<progress value='100' max='100'></progress> <a style='float:right; margin-right: 40px' href='review_confidentiality.php?id=$id'>Back</a> &nbsp; </div> "; ?> 
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