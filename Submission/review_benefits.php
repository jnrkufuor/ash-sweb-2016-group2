<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<header><a href="../Login/reviewerIndex.php"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="../Submission/viewSubmissions.php" style ="text-decoration:none"><div id="appcen"><h3>Submissions</h3></div></a>
		<a href="deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu">
		<span>Application Review</span>
	</div>
	<br><br>

<form style="margin-left:28%" action="risk.php?" method="GET">
		<div style="height:350px" class="mainDiv">
			<h2 id="headings">Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way?</p></div>
			<div><textarea name="participantConpensation" style="width:97%; height: 10%" readonly>my compensation</textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? </p></div>
			<div><textarea name="participantBenefits" style="width:97%; height: 10%" required>my benefits</textarea></div>
			<br/>
			<br/>
			<div>Progress:</b> &nbsp;<progress value='100' max='100'></progress> <a style='float:right; margin-right: 40px' href='review_confidentiality.php?id=$id'>Back</a> &nbsp; </div>
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