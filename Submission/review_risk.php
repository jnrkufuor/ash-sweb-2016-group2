<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<header><a href="../UI template/irbinterface.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu">
		<span>Application Form (Demo for incomplete/failed input)</span>
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

		<form style="margin-left:22%" action="risk.php?" method="GET">
		<div style="height:480px" class="mainDiv">
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
			<?php echo "<div>Progress:</b> &nbsp;<progress value='60' max='100'></progress> <a style='float:right;' href='review_confidentiality.php?id=$id'>Next</a>  &nbsp; &nbsp; &nbsp; <a style='float:right; margin-right: 40px' href='review_subjects.php?id=$id'>Back</a> &nbsp; </div> "; ?> 
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