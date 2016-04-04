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
		

		<div style="height:800px" id="mainDiv">
		<form action="benefits.php?" method="GET">
		
			
			<h2 id="headings">Confidentiality</h2>
			<div><p>A. To what extent is the information confidential and to what extent are provisions made so that subjects are not identified?</p></div>
			<div><textarea name="confidentialityExtent" style="width:97%; height: 8%" readonly><?php echo $row['confidentialityExtent'] ?></textarea></div>
			<div><p>B. What are the procedures for handling and storing data so that confidentiality of the subjects and privacy are protected? Particular attention should be given if research data will include photographs, video and audio recordings, computer files, organizational records, medical records, financial records with individual or corporate information. </p></div>
			<div><textarea name="dataStorage" style="width:97%; height: 8%" readonly><?php echo $row['dataStorage'] ?></textarea></div>
			<div><p>C. How will the results of the research be disseminated?</p></div>
			<div><textarea name="resultDissemination" style="width:97%; height: 8%" readonly><?php echo $row['resultDissemination'] ?></textarea></div>
			<div><p> How will the subjects be informed of the results?</p></div>
			<div><textarea name="subjectInfo" style="width:97%; height: 8%" readonly><?php echo $row['subjectInfo'] ?></textarea></div>
			<div><p> How will confidentiality of subjects or organizations be protected in the dissemination?</p></div>
			<div><textarea name="confidentialityProtection" style="width:97%; height: 8%" readonly><?php echo $row['confidentialityProtection'] ?></textarea></div>
			<br/>
			<?php echo "<div>Progress:</b> &nbsp;<progress value='80' max='100'></progress> <a style='float:right;' href='review_benefits.php?id=$id'>Next</a>  &nbsp; &nbsp; &nbsp; <a style='float:right; margin-right: 40px' href='review_risk.php?id=$id'>Back</a> &nbsp; </div> "; ?> 
		</form>
		</div>
	</body>
</html>