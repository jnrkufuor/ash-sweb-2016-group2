<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<header><a href="../UI template/index.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="../UI template/deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review2.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu">
		<span>Application Form</span>
	</div>
	<br><br>
		<?php
		include_once("submission.php");
		$obj = new submission();

		if(!isset($_REQUEST['id'])){
			$r = $obj-> getSubmissionId();
			if(!$r){
			echo "result is false";
			}
			else{
			//fetch
			$result=$obj ->fetch();
		
			$id = $result['submissionID'];

			}
		}
		else{
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
			
		<form style="margin-left:30%"action="updateSubjects.php?" method="GET">
		<div style="height:1190px" class="mainDiv">
			<div><input type="hidden" name="id" value="<?php echo $id ?>"/></div>
			<h2>Numbers, Types and Recruitment of Subjects</h2>
			<div><p>A. Identify the numbers and characteristics of subjects (eg. age ranges, sex, ethnic background, health status, disabilities , etc.) It is recommended to provide the breakdown based on your sampling strategy.</p></div>
			<div><textarea name="subjectCharacteristics" style="width:97%; height: 8%" required><?php echo $row['subjectCharacteristics'] ?> </textarea></div>
			<div><p>B. Special cases. If applicable, explain the rationale for the use of special cases or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particulary vulnerable</p></div>
			<div><textarea name="specialClasses" style="width:97%; height: 8%"><?php echo $row['specialClasses'] ?></textarea></div>
			<div><p>C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withraw at any time without any negative consequences?</p></div>
			<div><textarea name="recruitment" style="width:97%; height: 8%" required><?php echo $row['recruitment'] ?></textarea></div>
			<div><p>D. To what extent and how are participants to be informed of research procedures before their participation?</p></div>
			<div><textarea name="partcipnatInfo" style="width:97%; height: 8%" required><?php echo $row['partcipnatInfo'] ?></textarea></div>
			<div><p>E. How will you classify your research method? (experiment, observation, modelling etc.). Specify all methods you anticipate to use.</p></div>
			<div><textarea name="researchMethod" style="width:97%; height: 8%" required><?php echo $row['researchMethod'] ?></textarea></div>
			<div><p>F. Specify the data sources you will use for your reserach. (eg. questionnaire, audio recording human resource files, experiment data, etc.)</p></div>
			<div><textarea name="dataSources" style="width:97%; height: 8%" required><?php echo $row['dataSources'] ?></textarea></div>
			<br/>
			<div style="margin-top: 20px"> Progress:</b> &nbsp;<progress value="40" max="100"></progress> <input style="float:right;" type="submit" value="Next" >  &nbsp; &nbsp; &nbsp; <a style="float:right; margin-right: 40px" href="exemptionRequest2.php?id=<?php echo $id ?>">Back</a> &nbsp; </div> 
		</div>
		</form><br><br>
		</div>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
</body>
</html>