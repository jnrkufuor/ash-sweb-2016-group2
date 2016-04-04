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
                    <li><a href="">DASHBOARD</a></li>
                    <li><a href="">UPLOAD DOCUMENTS</a></li>
                    <li><a href="">SIGN OUT</a></li>
                  </ul>  
                    </div>
		<div style="height:950px" id="mainDiv">
		
		<form action="risk.php?" method="GET">
			<h2 id="headings">Numbers, Types and Recruitment of Subjects</h2>
			<div><p>A. Identify the numbers and characteristics of subjects (eg. age ranges, sex, ethnic background, health status, disabilities , etc.) It is recommended to provide the breakdown based on your sampling strategy.</p></div>
			<div><textarea name="subjectCharacteristics" cols="140" rows="5"  style="width:97%; height: 8%" readonly> <?php echo $row['subjectCharacteristics'] ?></textarea></div>
			<div><p>B. Special cases. If applicable, explain the rationale for the use of special cases or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particulary vulnerable</p></div>
			<div><textarea name="specialClasses" cols="140" rows="5"  style="width:97%; height: 8%" readonly> <?php echo $row['specialClasses'] ?></textarea></div>
			<div><p>C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withraw at any time without any negative consequences?</p></div>
			<div><textarea name="recruitment" cols="140" rows="5" style="width:97%; height: 8%" readonly> <?php echo $row['recruitment'] ?></textarea></div>
			<div><p>D. To what extent and how are participants to be informed of research procedures before their participation?</p></div>
			<div><textarea name="partcipnatInfo" cols="140" rows="5"  style="width:97%; height: 8%" readonly> <?php echo $row['partcipnatInfo'] ?></textarea></div>
			<div><p>E. How will you classify your research method? (experiment, observation, modelling etc.). Specify all methods you anticipate to use.</p></div>
			<div><textarea name="researchMethod" cols="140" rows="5" style="width:97%; height: 8%" readonly> <?php echo $row['researchMethod'] ?></textarea></div>
			<div><p>F. Specify the data sources you will use for your reserach. (eg. questionnaire, audio recording human resource files, experiment data, etc.)</p></div>
			<div><textarea name="dataSources" cols="140" rows="5" style="width:97%; height: 8%" readonly> <?php echo $row['dataSources'] ?></textarea></div>
			<br/>
			<?php echo "<div>Progress:</b> &nbsp;<progress value='40' max='100'></progress> <a style='float:right;' href='review_risk.php?id=$id'>Next</a>  &nbsp; &nbsp; &nbsp; <a style='float:right; margin-right: 40px' href='review_exemption.php?id=$id'>Back</a> &nbsp; </div> "; ?> 
		</form>
		</div>
	</body>
</html>