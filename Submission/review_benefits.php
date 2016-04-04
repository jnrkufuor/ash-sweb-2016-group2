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

		<div style="height:400px" id="mainDiv">
		<form action="addSubmission.php?" method="GET">
			<h2 id="headings">Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way?</p></div>
			<div><textarea name="participantConpensation" style="width:97%; height: 10%" readonly><?php echo $row['participantConpensation'] ?></textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? </p></div>
			<div><textarea name="participantBenefits" style="width:97%; height: 10%" required><?php echo $row['participantBenefits'] ?></textarea></div>
			<br/>
			<br/>
			<?php echo "<div>Progress:</b> &nbsp;<progress value='100' max='100'></progress> <a style='float:right; margin-right: 40px' href='review_confidentiality.php?id=$id'>Back</a> &nbsp; </div> "; ?> 
		</form>
		</div>
	</body>
</html>