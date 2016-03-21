<html>
	<head>
	<title> Submission </title>
	</head>
	<body>
		<?php
		$exemption ="";
		$title ="";
		if(isset($_REQUEST['exemption'])){
			$exemption = $_REQUEST['exemption'];
			$title = $_REQUEST['title'];
		}
		?>
		<form action="risk.php?" method="GET">
			<h2>Numbers, Types and Recruitment of Subjects</h2>
			<div><input type="hidden" name="exemption" value="<?php echo $exemption ?>"/></div>
			<div><input type="hidden" name="title" value="<?php echo $title ?>"/></div>
			<div><p>A. Identify the numbers and characteristics of subjects (eg. age ranges, sex, ethnic background, health status, disabilities , etc.) It is recommended to provide the breakdown based on your sampling strategy.</p></div>
			<div><textarea name="subjectCharacteristics" cols="100" rows="5"></textarea></div>
			<div><p>B. Special cases. If applicable, explain the rationale for the use of special cases or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particulary vulnerable</p></div>
			<div><textarea name="specialClasses" cols="100" rows="5"></textarea></div>
			<div><p>C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withraw at any time without any negative consequences?</p></div>
			<div><textarea name="recruitment" cols="100" rows="5"></textarea></div>
			<div><p>D. To what extent and how are participants to be informed of research procedures before their participation?</p></div>
			<div><textarea name="partcipnatInfo" cols="100" rows="5"></textarea></div>
			<div><p>E. How will you classify your research method? (experiment, observation, modelling etc.). Specify all methods you anticipate to use.</p></div>
			<div><textarea name="researchMethod" cols="100" rows="5"></textarea></div>
			<div><p>F. Specify the data sources you will use for your reserach. (eg. questionnaire, audio recording human resource files, experiment data, etc.)</p></div>
			<div><textarea name="dataSources" cols="100" rows="5"></textarea></div>
			<br/>
			<div>Progress:<progress value="40" max="100"></progress> &nbsp; &nbsp; &nbsp;<a href="exemptionRequest.php">Back</a> &nbsp;  <input type="submit" value="Next" >  </div> 
		</form>
	</body>
</html>