<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">

		function back(id){
			window.open("exemptionRequest2.php?id="+id,"_self");
		}

		function validate(string){
			var re = /([^ ].*[^ ])+/i;
			return re.test(string);
		}

		function next(id){
			if(validate($("#subjectCharacteristics").val()) == false){
				document.getElementById("subjectCharacteristics").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#subjectCharacteristics").val() == ""){
				document.getElementById("subjectCharacteristics").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("subjectCharacteristics").style.border="1px solid grey";
			}

			if(validate($("#recruitment").val()) == false){
				document.getElementById("recruitment").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#recruitment").val() == ""){
				document.getElementById("recruitment").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("recruitment").style.border="1px solid grey";
			}

			if(validate($("#partcipnatInfo").val()) == false){
				document.getElementById("partcipnatInfo").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#partcipnatInfo").val() == ""){
				document.getElementById("partcipnatInfo").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("partcipnatInfo").style.border="1px solid grey";
			}

			if(validate($("#researchMethod").val()) == false){
				document.getElementById("researchMethod").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#researchMethod").val() == ""){
				document.getElementById("researchMethod").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("researchMethod").style.border="1px solid grey";
			}

			if(validate($("#dataSources").val()) == false){
				document.getElementById("dataSources").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#dataSources").val() == ""){
				document.getElementById("dataSources").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("dataSources").style.border="1px solid grey";
			}

				window.open("update.php?cmd=2&id="+id +"&subjectCharacteristics="+$("#subjectCharacteristics").val()+"&specialClasses=" + $("#specialClasses").val()+"&recruitment="+$("#recruitment").val() +"&partcipnatInfo="+$("#partcipnatInfo").val()+"&researchMethod="+$("#researchMethod").val()+"&dataSources="+$("#dataSources").val() ,"_self");
			}
		

		function save(id){
			if(validate($("#subjectCharacteristics").val()) == false){
				document.getElementById("subjectCharacteristics").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#subjectCharacteristics").val() == ""){
				document.getElementById("subjectCharacteristics").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("subjectCharacteristics").style.border="1px solid grey";
			}
			
			if(validate($("#title").val()) == false){
				document.getElementById("title").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#recruitment").val() == ""){
				document.getElementById("recruitment").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("recruitment").style.border="1px solid grey";
			}
			if(validate($("#title").val()) == false){
				document.getElementById("title").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#partcipnatInfo").val() == ""){
				document.getElementById("partcipnatInfo").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("partcipnatInfo").style.border="1px solid grey";
			}
			if(validate($("#title").val()) == false){
				document.getElementById("title").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#researchMethod").val() == ""){
				document.getElementById("researchMethod").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("researchMethod").style.border="1px solid grey";
			}
			if(validate($("#title").val()) == false){
				document.getElementById("title").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else if($("#dataSources").val() == ""){
				document.getElementById("dataSources").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("dataSources").style.border="1px solid grey";
			}
			var theUrl="submission_ajax.php?cmd=3 & id="+id +"&subjectCharacteristics="+$("#subjectCharacteristics").val()+"&specialClasses=" + $("#specialClasses").val()+"&recruitment="+$("#recruitment").val() +"&partcipnatInfo="+$("#partcipnatInfo").val()+"&researchMethod="+$("#researchMethod").val()+"&dataSources="+$("#dataSources").val();
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
			
		<form style="margin-left:30%">
		<div style="height:1290px" class="mainDiv">
			<div><input type="hidden" name="id" value="<?php echo $id ?>"/></div>
			<div class="status" id="divStatus"></div>
			<h2>Numbers, Types and Recruitment of Subjects</h2>
			<div><p>A. Identify the numbers and characteristics of subjects (eg. age ranges, sex, ethnic background, health status, disabilities , etc.) It is recommended to provide the breakdown based on your sampling strategy. <i style="color: red">*required</i></p></div>
			<div><textarea id="subjectCharacteristics" name="subjectCharacteristics" style="width:97%; height: 8%"><?php echo $row['subjectCharacteristics'] ?></textarea></div>
			<div><p>B. Special cases. If applicable, explain the rationale for the use of special cases or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particulary vulnerable</p></div>
			<div><textarea id="specialClasses" name="specialClasses" style="width:97%; height: 8%"><?php echo $row['specialClasses'] ?></textarea></div>
			<div><p>C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withraw at any time without any negative consequences? <i style="color: red">*required</i></p></div>
			<div><textarea id="recruitment" name="recruitment" style="width:97%; height: 8%" required><?php echo $row['recruitment'] ?></textarea></div>
			<div><p>D. To what extent and how are participants to be informed of research procedures before their participation? <i style="color: red">*required</i></p></div>
			<div><textarea id="partcipnatInfo" name="partcipnatInfo" style="width:97%; height: 8%" required><?php echo $row['partcipnatInfo'] ?></textarea></div>
			<div><p>E. How will you classify your research method? (experiment, observation, modelling etc.). Specify all methods you anticipate to use. <i style="color: red">*required</i></p></div>
			<div><textarea id="researchMethod" name="researchMethod" style="width:97%; height: 8%" required><?php echo $row['researchMethod'] ?></textarea></div>
			<div><p>F. Specify the data sources you will use for your reserach. (eg. questionnaire, audio recording human resource files, experiment data, etc.) <i style="color: red">*required</i></p></div>
			<div><textarea id="dataSources" name="dataSources" style="width:97%; height: 8%" required><?php echo $row['dataSources'] ?></textarea></div>
			<br/>
			<div style="margin-top: 20px"> Progress:</b> &nbsp;<progress value="40" max="100"></progress> <button style="float:right; margin-right: 20px" type="button" onclick="next(<?php echo $id ?>)" >Next</button> &nbsp; &nbsp;<button type="button" style="float:right; margin-right: 40px" onclick="save(<?php echo $id ?>)">Save</button> <button type="button" style="float:right; margin-right: 40px" onclick="back(<?php echo $id ?>)">Back</button> &nbsp; </div> 
		</div>
		</form><br><br>
		</div>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
</body>
</html>