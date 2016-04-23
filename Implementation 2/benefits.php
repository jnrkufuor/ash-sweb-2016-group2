<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">

		function back(id){
			window.open("confidentiality.php?id="+id,"_self");
		}

		function validate(string){
			var re = /([^ ].*[^ ])+/i;
			return re.test(string);
		}
		
		function send(id){
			if(validate($("#participantConpensation").val()) == false){
				document.getElementById("participantConpensation").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("participantConpensation").style.border="1px solid grey";
			}

			if(validate($("#participantBenefits").val()) == false){
				document.getElementById("participantBenefits").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("participantBenefits").style.border="1px solid grey";
			}

				window.open("update.php?cmd=5&id="+id +"&participantConpensation="+$("#participantConpensation").val()+"&participantBenefits=" + $("#participantBenefits").val() ,"_self");
			}
		

		function save(id){
			if(validate($("#participantConpensation").val()) == false){
				document.getElementById("participantConpensation").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("participantConpensation").style.border="1px solid grey";
			}

			if(validate($("#participantBenefits").val()) == false){
				document.getElementById("participantBenefits").style.border="1px solid red";
				alert("Kindly fill all required fields");
				return;
			}
			else{
				document.getElementById("participantBenefits").style.border="1px solid grey";
			}

			
			var theUrl="submission_ajax.php?cmd=6 & id="+id +"&participantConpensation="+$("#participantConpensation").val()+"&participantBenefits=" + $("#participantBenefits").val();
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
		<form style="margin-left:32%">
		<div style="height:400px" class="mainDiv">
			<div><input type="hidden" name="id" value="<?php echo $id ?>"/></div>
			<div class="status" id="divStatus"></div>
			<h2 id="headings">Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way? <i style="color: red">*required</i></p></div>
			<div><textarea id="participantConpensation" name="participantConpensation" style="width:97%; height: 8%" ><?php echo $row['participantConpensation'] ?></textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? <i style="color: red">*required</i></p></div>
			<div><textarea id="participantBenefits" name="participantBenefits" style="width:97%; height: 8%" ><?php echo $row['participantBenefits'] ?></textarea></div>
			<br/>
			<br/>
			<div>Progress:<progress value="100" max="100"></progress> &nbsp; &nbsp; <button type="button" style="float:right; margin-right: 20px"  onclick="send(<?php echo $id ?>)">Submit</button> &nbsp; &nbsp;<button type="button" style="float:right; margin-right: 40px" onclick="save(<?php echo $id ?>)">Save As Draft</button> <button type="button" style="float:right; margin-right: 40px" onclick="back(<?php echo $id ?>)">Back</button> &nbsp;  </div> 
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