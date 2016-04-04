<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<header><a href="irbinterface.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="irbinterface.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="review.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu">
		<span>Application Form (Demo for incomplete/failed input)</span>
	</div>
	<br><br>
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
		$confidentialityExtent ="";
		$dataStorage ="";
		$resultDissemination ="";
		$subjectInfo ="";
		$confidentialityProtection ="";


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
		<form style="margin-left:22%"action="addSubmission.php?" method="GET">
		<div style="height:300px" class="mainDiv">
			<div><input type="hidden" name="exemption" value="<?php echo $exemption ?>"/></div>
			<div><input type="hidden" name="title" value="<?php echo $title ?>"/></div>
			<div><input type="hidden" name="subjectCharacteristics" value="<?php echo $subjectCharacteristics ?>"/></div>
			<div><input type="hidden" name="specialClasses" value="<?php echo $specialClasses ?>"/></div>
			<div><input type="hidden" name="recruitment" value="<?php echo $recruitment ?>"/></div>
			<div><input type="hidden" name="partcipnatInfo" value="<?php echo $partcipnatInfo ?>"/></div>
			<div><input type="hidden" name="researchMethod" value="<?php echo $researchMethod ?>"/></div>
			<div><input type="hidden" name="dataSources" value="<?php echo $dataSources ?>"/></div>
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
			<h2 id="headings">Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way?</p></div>
			<div><textarea name="participantConpensation" style="width:97%; height: 8%" required></textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? </p></div>
			<div><textarea name="participantBenefits" style="width:97%; height: 8%" required></textarea></div>
			<br/>
			<br/>
			<div>Progress:<progress value="100" max="100"></progress> &nbsp; &nbsp; &nbsp;<input style="float:right;" type="submit" value="Submit"> <a style="float:right; margin-right: 40px"href="confidentiality.php">Back</a> &nbsp;  </div> 
		</div><br><br>
		</form>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	<script>
function myFunction() {
    alert("You have not completed the form");
}
</script>
</body>
</html>