<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">

		function back(id){
			window.open("risk.php?id="+id,"_self");
		}

		function validate(string){
			var re = /([^ ].*[^ ])+/i;
			return re.test(string);
		}

		function next(id){
			if(validate($("#confidentialityExtent").val()) == false){
				document.getElementById("confidentialityExtent").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("confidentialityExtent").style.border="1px solid grey";
			}

			if(validate($("#dataStorage").val()) == false){
				document.getElementById("dataStorage").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("dataStorage").style.border="1px solid grey";
			}

			if(validate($("#resultDissemination").val()) == false){
				document.getElementById("resultDissemination").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("resultDissemination").style.border="1px solid grey";
			}

			if(validate($("#subjectInfo").val()) == false){
				document.getElementById("subjectInfo").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("subjectInfo").style.border="1px solid grey";
			}

			if(validate($("#confidentialityProtection").val()) == false){
				document.getElementById("confidentialityProtection").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("confidentialityProtection").style.border="1px solid grey";
			}
				window.open("update.php?cmd=4&id="+id +"&confidentialityExtent="+$("#confidentialityExtent").val()+"&dataStorage=" + $("#dataStorage").val()+"&resultDissemination="+$("#resultDissemination").val() +"&subjectInfo="+$("#subjectInfo").val()+"&confidentialityProtection="+$("#confidentialityProtection").val() ,"_self");
			}
		

		function save(id){
			if(validate($("#confidentialityExtent").val()) == false){
				document.getElementById("confidentialityExtent").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("confidentialityExtent").style.border="1px solid grey";
			}

			if(validate($("#dataStorage").val()) == false){
				document.getElementById("dataStorage").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("dataStorage").style.border="1px solid grey";
			}

			if(validate($("#resultDissemination").val()) == false){
				document.getElementById("resultDissemination").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("resultDissemination").style.border="1px solid grey";
			}
			
			if(validate($("#subjectInfo").val()) == false){
				document.getElementById("subjectInfo").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("subjectInfo").style.border="1px solid grey";
			}

			if(validate($("#confidentialityProtection").val()) == false){
				document.getElementById("confidentialityProtection").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("confidentialityProtection").style.border="1px solid grey";
			}
			var theUrl="submission_ajax.php?cmd=5 & id="+id +"&confidentialityExtent="+$("#confidentialityExtent").val()+"&dataStorage=" + $("#dataStorage").val()+"&resultDissemination="+$("#resultDissemination").val() +"&subjectInfo="+$("#subjectInfo").val()+"&confidentialityProtection="+$("#confidentialityProtection").val();
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

		$id ="";

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


		<form style="margin-left:28%"action="updateConfidentiality.php?" method="GET">
		<div style="height:850px" class="mainDiv">
			<div><input type="hidden" name="id" value="<?php echo $id ?>"/></div>
			<div class="status" id="divStatus"></div>
			<h2 id="headings">Confidentiality</h2>
			<div><p>A. To what extent is the information confidential and to what extent are provisions made so that subjects are not identified? <i style="color: red">*required</i></p></div>
			<div><textarea id="confidentialityExtent" name="confidentialityExtent" style="width:97%; height: 8%" required><?php echo $row['confidentialityExtent'] ?></textarea></div>
			<div><p>B. What are the procedures for handling and storing data so that confidentiality of the subjects and privacy are protected? Particular attention should be given if research data will include photographs, video and audio recordings, computer files, organizational records, medical records, financial records with individual or corporate information. <i style="color: red">*required</i></p></div>
			<div><textarea id="dataStorage" name="dataStorage" style="width:97%; height: 8%" required><?php echo $row['dataStorage'] ?></textarea></div>
			<div><p>C. How will the results of the research be disseminated? <i style="color: red">*required</i></p></div>
			<div><textarea id="resultDissemination" name="resultDissemination" style="width:97%; height: 8%" required><?php echo $row['resultDissemination'] ?></textarea></div>
			<div><p> How will the subjects be informed of the results? <i style="color: red">*required</i></p></div>
			<div><textarea id="subjectInfo" name="subjectInfo" style="width:97%; height: 8%" required><?php echo $row['subjectInfo'] ?></textarea></div>
			<div><p> How will confidentiality of subjects or organizations be protected in the dissemination? <i style="color: red">*required</i></p></div>
			<div><textarea id="confidentialityProtection" name="confidentialityProtection" style="width:97%; height: 8%" required><?php echo $row['confidentialityProtection'] ?></textarea> </div>
			<br/>
			<div style="margin-top: 20px">Progress:<progress value="80" max="100"></progress> &nbsp; &nbsp; &nbsp;<button style="float:right; margin-right: 20px" type="button" onclick="next(<?php echo $id ?>)" >Next</button> &nbsp; &nbsp;<button type="button" style="float:right; margin-right: 40px" onclick="save(<?php echo $id ?>)">Save</button> <button type="button" style="float:right; margin-right: 40px" onclick="back(<?php echo $id ?>)">Back</button> &nbsp;</div> 
		
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