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
		<div id="navMenu" align="center">
                    <ul id="menu" >
                    <li><a href="">DASHBOARD</a></li>
                    <li><a href="">UPLOAD DOCUMENTS</a></li>
                   <li><a href="">SIGN OUT</a></li>
                  </ul>  
                    </div>
		<div id="mainDiv">
		
		<form action="review_subjects.php?id={$row['submissionID']}" method="GET">
		<div style="margin-bottom: 30px; margin-top: 25px">
		<b style="font-size: 25px">Principal Investigator:</b><textarea style="margin-right:120px; width:10%; height:3%" name="investigator"  readonly> <?php echo $row['FIRSTNAME'] ?> </textarea> 
		<b style="font-size: 25px">Co - Investigator:</b> <textarea name="coinvestigator" style="width:10%; height:3%" readonly> <?php echo $row['CO_RESEARCHER'] ?></textarea></div>
			<div ><b style="font-size: 25px;">Title of Project:</b> <textarea name="exemption" style="width:97%; height:4%" readonly> <?php echo $row['title'] ?></textarea>  </div>
			
			<h2>Exemption Request</h2>
			<div><p>If you are requesting an exemption from Human Subject Review Commitee (HSRC) review, explain the basis for the requested exemption.</p></div>
			<div><textarea name="exemption" style="width:97%; height:40%" readonly> <?php echo $row['exemption'] ?></textarea></div>
		<?php echo "<div id='progressMargin'><b>Progress:</b> &nbsp;<progress value='20' max='100' ></progress> &nbsp; &nbsp; &nbsp; &nbsp; <a style='float:right;' href='review_subjects.php?id=$id'> Next</a></div> "; ?>
		</form>
		</div>
	</body>
</html> 