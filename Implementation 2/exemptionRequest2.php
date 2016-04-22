<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">

		function checkSave(sid){
			if($("#title").val() == ""){
				document.getElementById("title").style.border="1px solid red";
				alert("Kindly provide a title for your submission");
				return;
			}
			
			window.open("update.php?cmd=6&title="+$("#title").val()+"&exemption=" + $("#exemption").val()+"&sid="+sid ,"_self");
		}

		function save(sid){
			if($("#title").val() == ""){
				document.getElementById("title").style.border="1px solid red";
				alert("Kindly provide a title for your submission");
				return;
			}
			
			var theUrl="submission_ajax.php?cmd=2&title="+$("#title").val()+"&exemption=" + $("#exemption").val() +"&sid="+sid;
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
	
		if(isset($_REQUEST['id'])){
			$sid = $_REQUEST['id'];
			include_once("submission.php");
			$obj = new submission();

			$r = $obj -> getSubmissionByCode($sid);
								
			if(!$r){
				echo "Error getting the user to edit";
				exit();
			}
			else{
			$row = $obj ->fetch();
			}
		}

		?>

			<form style="margin-left:30%" action="updateExemption.php" method="GET">
			<div class="mainDiv">
				<div><input type="hidden" name="sid" value="<?php echo $sid ?>"/></div>
				<div class="status" id="divStatus"></div>
				<div><h2>Title of Project:</h2> <textarea style="width:97%; height:4%" id="title" name="title" required><?php echo $row['title']?></textarea></div>
				</br>
				<h2>Exemption Request</h2>
				<div><p>If you are requesting an exemption from Human Subject Review Commitee (HSRC) review, explain the basis for the requested exemption. 
						Click <a href=''>here</a> to see the list of exempt project types. Skip if you are not requesting exemption.</p></div>
				<div><textarea id="exemption" name="exemption" style="width:97%; height:40%"><?php $row['exemption']?></textarea></div>
				
				<div style="margin-top: 40px"><b>Progress:</b> &nbsp;<progress value="20" max="100" ></progress> &nbsp; &nbsp; &nbsp; &nbsp; <button style="float:right; margin-right: 20px" type="button" onclick="checkSave(<?php echo $sid ?>)" >Next</button> &nbsp; &nbsp;<button type="button" style="float:right; margin-right: 50px" onclick="save(<?php echo $sid ?>)">Save</button> </div>
				</div>
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