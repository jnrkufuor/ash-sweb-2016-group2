<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<header><a href="irbinterface.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="review.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu">
		<span>Application Form (Demo for incomplete/failed input)</span>
	</div>
	<br><br>
		<?php
		$id ="";

		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}
		?>
		<form style="margin-left:22%"action="../UI template/index.html" method="GET">
		<div style="height:300px" class="mainDiv">
			<div><input type="hidden" name="id" value="<?php echo $id ?>"/></div>
			<h2 id="headings">Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way?</p></div>
			<div><textarea name="participantConpensation" style="width:97%; height: 8%" required></textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? </p></div>
			<div><textarea name="participantBenefits" style="width:97%; height: 8%" required></textarea></div>
			<br/>
			<br/>
			<div>Progress:<progress value="100" max="100"></progress> &nbsp; &nbsp; <input style="float:right; margin-left: 20px" type="submit" name="submit" value="Submit" onclick="myFunction()"><input style="float:right;" type="submit" name="save" value="Save As Draft" onclick="myFunction()"> <a style="float:right; margin-right: 40px"href="confidentiality.php">Back</a> &nbsp;  </div> 
		</div><br><br>
		</form>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	<script>
function myFunction() {
    alert("You have completed the form");
}
</script>
</body>
</html>