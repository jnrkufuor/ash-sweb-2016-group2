<html>
	<head>
	<title> Submission </title>
	</head>
	<body>
		<?php
		$exemption ="";
		$title ="";
		$subjectCharacteristics ="";
		$specialClasses ="";
		$recruitment ="";
		$partcipnatInfo ="";
		$researchMethod ="";
		$dataSources ="";

		if(isset($_REQUEST['exemption'])){
			$exemption = $_REQUEST['exemption'];
			$title = $_REQUEST['title'];
			$subjectCharacteristics = $_REQUEST['subjectCharacteristics'];
			$specialClasses = $_REQUEST['specialClasses'];
			$recruitment = $_REQUEST['recruitment'];
			$partcipnatInfo = $_REQUEST['partcipnatInfo'];
			$researchMethod = $_REQUEST['researchMethod'];
			$dataSources = $_REQUEST['dataSources'];
		}
		?>

		<form action="confidentiality.php" method="GET">
			<div><input type="hidden" name="exemption" value="<?php echo $exemption ?>"/></div>
			<div><input type="hidden" name="title" value="<?php echo $title ?>"/></div>
			<div><input type="hidden" name="subjectCharacteristics" value="<?php echo $subjectCharacteristics ?>"/></div>
			<div><input type="hidden" name="specialClasses" value="<?php echo $specialClasses ?>"/></div>
			<div><input type="hidden" name="recruitment" value="<?php echo $recruitment ?>"/></div>
			<div><input type="hidden" name="partcipnatInfo" value="<?php echo $partcipnatInfo ?>"/></div>
			<div><input type="hidden" name="researchMethod" value="<?php echo $researchMethod ?>"/></div>
			<div><input type="hidden" name="dataSources" value="<?php echo $dataSources ?>"/></div>
			<h2>Risks Involved In The Research</h2>
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
			<div><textarea name="procedureDetails" cols="100" rows="10"></textarea></div>
			<br/>
			<div>Progress:<progress value="60" max="100"></progress> &nbsp; &nbsp; &nbsp; &nbsp; <a href="subjects.php">Back</a> &nbsp;<input type="submit" value="Next" ></div>
		</form>
	</body>
</html>