<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<header><a href="../UI template/index.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="reviewerIndex.html" style ="text-decoration:none"><div class="dashboard"><h3>Dashboard</h3></div></a>
		<a href="viewAllSubmissions.php" style ="text-decoration:none"><div class="submissions"><h3>Submissions</h3></div></a>

	</div>

	<div class="menu">
		<span>View Submissions</span>
	</div>
	<br><br>
		<?php
		$id ="";

		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}
		?>
		<form style="margin-left:40%"action="updateRisk.php?" method="GET">
		<div style="height:709px" class="mainDiv">
			<div><input type="hidden" name="id" value="<?php echo $id?>"/></div>
			<h2 id="headings">Risks Involved In The Research</h2>
			<div><p>Identify potential risks for subjects to be involved in this project/research. What procedures will be in place to minimize any risks to the subjects?</p></div>
			<div><b>Does the research involve any of the following procedures?</b></div>
			<div><input type="checkbox" value="deception" name="procedureRisks[]">Deception of the participant?</div>
			<div><input type="checkbox" value="punishment" name="procedureRisks[]">Punishment of the participant?</div>
			<div><input type="checkbox" value="unacceptableMaterial" name="procedureRisks[]">Materials commonly regarded as socially unacceptable such as pornography, inflammatory text, ethnic portrayals?</div>
			<div><input type="checkbox" value="privacyInvasion" name="procedureRisks[]">Any other procedure that might be considered an invasion of privacy?</div>
			<div><input type="checkbox" value="participantDisclosure" name="procedureRisks[]">Disclosure of the names of individual participants?</div>
			<div><input type="checkbox" value="physicalInvasion" name="procedureRisks[]">Any other physically invasive procedure?</div>
			<br/>
			<div><p>If the answer to any of the above is "Yes", please explain this procedure in detail and describe procedures for protecting against or minimizing any potential risk.</p></div>
			<div><textarea name="procedureDetails" style="width:97%; height: 8%"></textarea></div>
			<br/>
			<br/>
			<div>Progress:<progress value="60" max="100"></progress> &nbsp; &nbsp; &nbsp; &nbsp; <input style="float:right;" type="submit" value="Next"> <a style="float:right; margin-right:40px;" href="subjects.php?id=<?php echo $id ?>">Back</a> &nbsp;</div>
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