<html>
	<!-- This script allows a user to input data about their submission with regards to the benefits section -->
	<head>
	<title> Submission </title>
	</head>
	<body>
		<?php
		// creating variables for inputs from previously filled sections in previous pages
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
		$confidentialityExtent ="";
		$dataStorage ="";
		$resultDissemination ="";
		$subjectInfo ="";
		$confidentialityProtection ="";

		//checking if previously filled inputs are available in the url
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
			$confidentialityExtent = $_REQUEST['confidentialityExtent'];
			$dataStorage = $_REQUEST['dataStorage'];
			$resultDissemination = $_REQUEST['resultDissemination'];
			$subjectInfo = $_REQUEST['subjectInfo'];
			$confidentialityProtection = $_REQUEST['confidentialityProtection'];
		}
		
		?>

		<!-- Adding previously filled inputs to form as hidden fields -->
		<form action="addSubmission.php?" method="GET">
			<div><input type="hidden" name="exemption" value="<?php echo $exemption ?>"/></div>
			<div><input type="hidden" name="title" value="<?php echo $title ?>"/></div>
			<div><input type="hidden" name="subjectCharacteristics" value="<?php echo $subjectCharacteristics ?>"/></div>
			<div><input type="hidden" name="specialClasses" value="<?php echo $specialClasses ?>"/></div>
			<div><input type="hidden" name="recruitment" value="<?php echo $recruitment ?>"/></div>
			<div><input type="hidden" name="partcipnatInfo" value="<?php echo $partcipnatInfo ?>"/></div>
			<div><input type="hidden" name="researchMethod" value="<?php echo $researchMethod ?>"/></div>
			<div><input type="hidden" name="dataSources" value="<?php echo $dataSources ?>"/></div>
			<div><input type="hidden" name="procedureRisks" value="<?php echo $procedureRisks  ?>"/></div>
			<div><input type="hidden" name="procedureDetails" value="<?php echo $procedureDetails ?>"/></div>
			<div><input type="hidden" name="confidentialityExtent" value="<?php echo $confidentialityExtent ?>"/></div>
			<div><input type="hidden" name="dataStorage" value="<?php echo $dataStorage ?>"/></div>
			<div><input type="hidden" name="resultDissemination" value="<?php echo $resultDissemination ?>"/></div>
			<div><input type="hidden" name="subjectInfo" value="<?php echo $subjectInfo ?>"/></div>
			<div><input type="hidden" name="confidentialityProtection" value="<?php echo $confidentialityProtection ?>"/></div>
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

			<!-- Allows user to enter inputs with regards to benefits section of the submission -->
			<h2>Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way?</p></div>
			<div><textarea name="participantConpensation" cols="100" rows="5"></textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? </p></div>
			<div><textarea name="participantBenefits" cols="100" rows="5"></textarea></div>
			<br/>
			<div>Progress:<progress value="100" max="100"></progress> &nbsp; &nbsp; &nbsp;<a href="confidentiality.php">Back</a> &nbsp;  <input type="submit" value="Submit"></div> 
		</form>
	</body>
</html>