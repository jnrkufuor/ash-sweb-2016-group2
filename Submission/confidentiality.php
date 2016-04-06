<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<header><a href="../UI template/index.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1" style="position: absolute; top:30%">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="../UI template/deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu">
		<span>Application Form</span>
	</div>
		<?php
		$id ="";

		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}
		?>

		<form style="margin-left:28%"action="benefits.php?" method="GET">
		<div style="height:800px; padding-top: 5px;" class="mainDiv">
			<div><input type="hidden" name="id" value="<?php echo $id ?>"/></div>
			<h2 id="headings">Confidentiality</h2>
			<div><p>A. To what extent is the information confidential and to what extent are provisions made so that subjects are not identified?</p></div>
			<div><textarea name="confidentialityExtent" style="width:97%; height: 8%" required></textarea></div>
			<div><p>B. What are the procedures for handling and storing data so that confidentiality of the subjects and privacy are protected? Particular attention should be given if research data will include photographs, video and audio recordings, computer files, organizational records, medical records, financial records with individual or corporate information. </p></div>
			<div><textarea name="dataStorage" style="width:97%; height: 8%" required></textarea></div>
			<div><p>C. How will the results of the research be disseminated?</p></div>
			<div><textarea name="resultDissemination" style="width:97%; height: 8%" required></textarea></div>
			<div><p> How will the subjects be informed of the results?</p></div>
			<div><textarea name="subjectInfo" style="width:97%; height: 8%" required></textarea></div>
			<div><p> How will confidentiality of subjects or organizations be protected in the dissemination?</p></div>
			<div><textarea name="confidentialityProtection" style="width:97%; height: 8%" required></textarea></div>
			<br/>
			<div style="margin-top: 20px">Progress:<progress value="80" max="100"></progress> &nbsp; &nbsp; &nbsp;<input style="float:right;" type="submit" value="Next" > <a style="float:right; margin-right: 40px" href="risk.php">Back</a> &nbsp;    </div> 
		
		</div>
		</form>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	<script>
function myFunction() {
    alert("You have not completed the form");
}
</script>
</body>
</html>