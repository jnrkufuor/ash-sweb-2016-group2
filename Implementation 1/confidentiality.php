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
		$procedureRisks="";
		$procedureDetails ="";

		if(isset($_REQUEST['exemption'])){
			$exemption = $_REQUEST['exemption'];
			$title = $_REQUEST['title'];
			$subjectCharacteristics = $_REQUEST['subjectCharacteristics'];
			$specialClasses = $_REQUEST['specialClasses'];
			$recruitment = $_REQUEST['recruitment'];
			$partcipnatInfo = $_REQUEST['partcipnatInfo'];
			$researchMethod = $_REQUEST['researchMethod'];
			$dataSources = $_REQUEST['dataSources'];
			$procedureDetails = $_REQUEST['procedureDetails'];
		}
		
		?>

		<form action="benefits.php?" method="GET">
			<div><input type="hidden" name="exemption" value="<?php echo $exemption ?>"/></div>
			<div><input type="hidden" name="title" value="<?php echo $title ?>"/></div>
			<div><input type="hidden" name="subjectCharacteristics" value="<?php echo $subjectCharacteristics ?>"/></div>
			<div><input type="hidden" name="specialClasses" value="<?php echo $specialClasses ?>"/></div>
			<div><input type="hidden" name="recruitment" value="<?php echo $recruitment ?>"/></div>
			<div><input type="hidden" name="partcipnatInfo" value="<?php echo $partcipnatInfo ?>"/></div>
			<div><input type="hidden" name="researchMethod" value="<?php echo $researchMethod ?>"/></div>
			<div><input type="hidden" name="dataSources" value="<?php echo $dataSources ?>"/></div>
			<?php
			if(isset($_REQUEST['procedureRisks'])){
			$procedureRisks= $_REQUEST['procedureRisks'];
			
			$count = 0;
			foreach($procedureRisks as $value){
			echo "<input type='hidden' name='procedureRisks[]' value='$procedureRisks[$count]'/></div>";
			$count++;
			}
		}
			?>
			<div><input type="hidden" name="procedureDetails" value="<?php echo $procedureDetails ?>"/></div>
			<h2>Confidentiality</h2>
			<div><p>A. To what extent is the information confidential and to what extent are provisions made so that subjects are not identified?</p></div>
			<div><textarea name="confidentialityExtent" cols="100" rows="5" required></textarea></div>
			<div><p>B. What are the procedures for handling and storing data so that confidentiality of the subjects and privacy are protected? Particular attention should be given if research data will include photographs, video and audio recordings, computer files, organizational records, medical records, financial records with individual or corporate information. </p></div>
			<div><textarea name="dataStorage" cols="100" rows="5" required></textarea></div>
			<div><p>C. How will the results of the research be disseminated?</p></div>
			<div><textarea name="resultDissemination" cols="100" rows="5" required></textarea></div>
			<div><p> How will the subjects be informed of the results?</p></div>
			<div><textarea name="subjectInfo" cols="100" rows="5" required></textarea></div>
			<div><p> How will confidentiality of subjects or organizations be protected in the dissemination?</p></div>
			<div><textarea name="confidentialityProtection" cols="100" rows="5" required></textarea></div>
			<br/>
			<div>Progress:<progress value="80" max="100"></progress> &nbsp; &nbsp; &nbsp;<a href="risk.php">Back</a> &nbsp;  <input type="submit" value="Next" >  </div> 
		</form>
	</body>
</html>