<html>
	<head>
	<title> Submission </title>
	<link rel="stylesheet" type="text/css" href="applicationStyle.css">
	</head>
	<body>
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
	<div id="header"> 
		<img style="float:left" src="logo.jpg"> IRB Submisssion - <?php echo $row['title'] ?>
		</div>
		<div align="center">
                    <ul id="menu" >
                    <li><a href="About.html">DASHBOARD</a></li>
                    <li><a href="Our team.html">UPLOAD DOCUMENTS</a></li>
                    <li><a href="Contact Us.html">SIGN OUT</a></li>
                  </ul>  
                    </div>

		<div style="height:580px" id="mainDiv">
		<form action="confidentiality.php" method="GET">
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
		</form>
		</div>
	</body>
</html>