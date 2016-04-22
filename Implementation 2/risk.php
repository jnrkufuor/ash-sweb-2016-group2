<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">

		function back(id){
			window.open("subjects.php?id="+id,"_self");
		}

		function next(id){
			var procedureRisks = "";
			if(document.getElementById('deception').checked){
				procedureRisks = procedureRisks + "deception,";
			}
			if(document.getElementById('punishment').checked){
			procedureRisks = procedureRisks + "punishment,";
			}
			if(document.getElementById('unacceptableMaterial').checked){
			procedureRisks = procedureRisks + "unacceptableMaterial,";
			}
			if(document.getElementById('privacyInvasion').checked){
			procedureRisks = procedureRisks + "privacyInvasion,";
			}
			if(document.getElementById('participantDisclosure').checked){
			procedureRisks = procedureRisks + "participantDisclosure,";
			}
			if(document.getElementById('physicalInvasion').checked){
			procedureRisks = procedureRisks + "physicalInvasion,";
			}
		
			window.open("update.php?cmd=3&id="+id +"&procedureRisks="+ procedureRisks +"&procedureDetails=" + $("#procedureDetails").val() ,"_self");
		}

		function save(id){
			var procedureRisks = "";

			if(document.getElementById('deception').checked){
				procedureRisks = procedureRisks + "deception,";
			}
			if(document.getElementById('punishment').checked){
			procedureRisks = procedureRisks + "punishment,";
			}
			if(document.getElementById('unacceptableMaterial').checked){
			procedureRisks = procedureRisks + "unacceptableMaterial,";
			}
			if(document.getElementById('privacyInvasion').checked){
			procedureRisks = procedureRisks + "privacyInvasion,";
			}
			if(document.getElementById('participantDisclosure').checked){
			procedureRisks = procedureRisks + "participantDisclosure,";
			}
			if(document.getElementById('physicalInvasion').checked){
			procedureRisks = procedureRisks + "physicalInvasion,";
			}

			var theUrl="submission_ajax.php?cmd=4 & id="+id +"&procedureRisks="+procedureRisks +"&procedureDetails=" + $("#procedureDetails").val();
				$.ajax(theUrl,
					{async:true,complete:saveComplete}
					);

		}

		function saveComplete(xhr,status){
				if(status!="success"){
					divStatus.innerHTML="error sending request";
					return;
				}
				divStatus.innerHTML= "Saved at " + new Date().getHours()+ ":" + new Date().getMinutes() + " GMT" ;
				alert("Saved at " + new Date().getHours()+ ":" + new Date().getMinutes() + " GMT");
			}

	</script>
</head>
<body>
	<div class="main">
	<header><a href="../UI template/index.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Portal</h1></header>
	<div class="side1">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="../UI template/deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review2.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>

	<div class="menu">
		<span>View Submissions</span>
	</div>
	<br><br>
		<?php
		include_once("submission.php");
		$obj = new submission();

		$id ="";

		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}

		$r = $obj -> getSubmissionByCode($id);
									
		if(!$r){
			echo "Error getting the submission";
			exit();
		}
		else{
			$row = $obj ->fetch();
		}

		$procedureRisks = explode(',', $row['procedureRisks']); 

		$deception = "";
		$punishment = "";
		$unacceptableMaterial = "";
		$participantDisclosure = "";
		$physicalInvasion = "";

		foreach ($procedureRisks as $value) {
			if($value == "deception"){
				$deception = "checked";
			}
			else if($value == "punishment"){
				$punishment = "checked";
			}
			else if($value == "unacceptableMaterial"){
				$unacceptableMaterial = "checked";
			}
			else if($value == "privacyInvasion"){
				$privacyInvasion = "checked";
			}
			else if($value == "participantDisclosure"){
				$participantDisclosure = "checked";
			}
			else if($value == "physicalInvasion"){
				$physicalInvasion = "checked";
			}

		}

		?>
		<form style="margin-left:28%"action="updateRisk.php?" method="GET">
		<div style="height:559px" class="mainDiv">
			<div><input type="hidden" name="id" value="<?php echo $id?>"/></div>
			<div class="status" id="divStatus"></div>
			<h2 id="headings">Risks Involved In The Research</h2>
			<div><p>Identify potential risks for subjects to be involved in this project/research. What procedures will be in place to minimize any risks to the subjects?</p></div>
			<div><b>Does the research involve any of the following procedures?</b></div>
			<div><input type="checkbox" id="deception" value="deception" name="procedureRisks" <?php echo $deception ?> >Deception of the participant?</div>
			<div><input type="checkbox" id="punishment" value="punishment" name="procedureRisks" <?php echo $punishment ?> >Punishment of the participant?</div>
			<div><input type="checkbox" id="unacceptableMaterial" value="unacceptableMaterial" name="procedureRisks" <?php echo $unacceptableMaterial ?> >Materials commonly regarded as socially unacceptable such as pornography, inflammatory text, ethnic portrayals?</div>
			<div><input type="checkbox" id="privacyInvasion" value="privacyInvasion" name="procedureRisks" <?php echo $privacyInvasion ?> >Any other procedure that might be considered an invasion of privacy?</div>
			<div><input type="checkbox" id="participantDisclosure" value="participantDisclosure" name="procedureRisks" <?php  echo$participantDisclosure ?> >Disclosure of the names of individual participants?</div>
			<div><input type="checkbox" id="physicalInvasion" value="physicalInvasion" name="procedureRisks" <?php echo $physicalInvasion ?> >Any other physically invasive procedure?</div>
			<br/>
			<div><p>If the answer to any of the above is "Yes", please explain this procedure in detail and describe procedures for protecting against or minimizing any potential risk.</p></div>
			<div><textarea id="procedureDetails" name="procedureDetails" style="width:97%; height: 8%"><?php echo $row['procedureDetails'] ?></textarea></div>
			<br/>
			<br/>
			<div>Progress:<progress value="60" max="100"></progress> &nbsp; &nbsp; &nbsp; &nbsp; <button style="float:right; margin-right: 20px" type="button" onclick="next(<?php echo $id ?>)" >Next</button> &nbsp; &nbsp;<button type="button" style="float:right; margin-right: 40px" onclick="save(<?php echo $id ?>)">Save</button> <button type="button" style="float:right; margin-right: 40px" onclick="back(<?php echo $id ?>)">Back</button> &nbsp;</div>
		</form>
		</div><br><br>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	<script>
function myFunction() {
    alert("You have not completed the form");
}
</script>
</body>
</html>