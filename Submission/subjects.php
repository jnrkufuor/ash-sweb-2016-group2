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
			
		<form style="margin-left:22%"action="risk.php" method="GET">
		<div style="height:1000px" class="mainDiv">
			<div><input type="hidden" name="id" value=""/></div>
			<h2>Numbers, Types and Recruitment of Subjects</h2>
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
			<div style="margin-top: 20px"> Progress:</b> &nbsp;<progress value="40" max="100"></progress> <input style="float:right;" type="submit" value="Next" >  &nbsp; &nbsp; &nbsp; <a style="float:right; margin-right: 40px" href="exemptionRequest.php">Back</a> &nbsp; </div> 
		</div>
		</form><br><br>
		</div>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
</body>
</html>