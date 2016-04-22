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
		<div style="height:780px" class="mainDiv">
		
			
			<h2 id="headings">Confidentiality</h2>
			<div><p>A. To what extent is the information confidential and to what extent are provisions made so that subjects are not identified?</p></div>
			<div><textarea name="confidentialityExtent" style="width:97%; height: 8%" readonly>large extent</textarea></div>
			<div><p>B. What are the procedures for handling and storing data so that confidentiality of the subjects and privacy are protected? Particular attention should be given if research data will include photographs, video and audio recordings, computer files, organizational records, medical records, financial records with individual or corporate information. </p></div>
			<div><textarea name="dataStorage" style="width:97%; height: 8%" readonly>my data storage techniques</textarea></div>
			<div><p>C. How will the results of the research be disseminated?</p></div>
			<div><textarea name="resultDissemination" style="width:97%; height: 8%" readonly>my result dissemination</textarea></div>
			<div><p> How will the subjects be informed of the results?</p></div>
			<div><textarea name="subjectInfo" style="width:97%; height: 8%" readonly>my subject information</textarea></div>
			<div><p> How will confidentiality of subjects or organizations be protected in the dissemination?</p></div>
			<div><textarea name="confidentialityProtection" style="width:97%; height: 8%" readonly>my protection</textarea></div>
			<br/>
			<div>Progress:</b> &nbsp;<progress value='80' max='100'></progress> <a style='float:right;' href='review_benefits.php?id=$id'>Next</a>  &nbsp; &nbsp; &nbsp; <a style='float:right; margin-right: 40px' href='review_risk.php?id=$id'>Back</a> &nbsp; </div>
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