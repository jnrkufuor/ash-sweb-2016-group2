<html>
	<head>
	<title> Submission </title>
	<link rel="stylesheet" type="text/css" href="applicationStyle.css">
	</head>
	<body>
	<div id="header"> 
		<img style="float:left" src="logo.jpg"> IRB Application Form
		</div>
		<div align="center">
                    <ul id="menu" >
                    <li><a href="">DASHBOARD</a></li>
                    <li><a href="">UPLOAD DOCUMENTS</a></li>
                    <li><a href="">SIGN OUT</a></li>
                  </ul>  
                    </div>
		<?php
		$exemption ="";
		$title ="";
		if(isset($_REQUEST['exemption'])){
			$exemption = $_REQUEST['exemption'];
			$title = $_REQUEST['title'];
		}
		?>
		<div style="height:950px" id="mainDiv">
		<form action="risk.php?" method="GET">
			<h2 id="headings">Numbers, Types and Recruitment of Subjects</h2>
			<div><input type="hidden" name="exemption" value="<?php echo $exemption ?>"/></div>
			<div><input type="hidden" name="title" value="<?php echo $title ?>"/></div>
			<div><p>A. Identify the numbers and characteristics of subjects (eg. age ranges, sex, ethnic background, health status, disabilities , etc.) It is recommended to provide the breakdown based on your sampling strategy.</p></div>
			<div><textarea name="subjectCharacteristics" style="width:97%; height: 8%" required></textarea></div>
			<div><p>B. Special cases. If applicable, explain the rationale for the use of special cases or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particulary vulnerable</p></div>
			<div><textarea name="specialClasses" style="width:97%; height: 8%"></textarea></div>
			<div><p>C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withraw at any time without any negative consequences?</p></div>
			<div><textarea name="recruitment" style="width:97%; height: 8%" required></textarea></div>
			<div><p>D. To what extent and how are participants to be informed of research procedures before their participation?</p></div>
			<div><textarea name="partcipnatInfo" style="width:97%; height: 8%" required></textarea></div>
			<div><p>E. How will you classify your research method? (experiment, observation, modelling etc.). Specify all methods you anticipate to use.</p></div>
			<div><textarea name="researchMethod" style="width:97%; height: 8%" required></textarea></div>
			<div><p>F. Specify the data sources you will use for your reserach. (eg. questionnaire, audio recording human resource files, experiment data, etc.)</p></div>
			<div><textarea name="dataSources" style="width:97%; height: 8%" required></textarea></div>
			<br/>
			<div>Progress:</b> &nbsp;<progress value="40" max="100"></progress> <input style="float:right;" type="submit" value="Next" >  &nbsp; &nbsp; &nbsp; <a style="float:right; margin-right: 40px" href="exemptionRequest.php">Back</a> &nbsp; </div> 
		</form>
		</div>
	</body>
</html>