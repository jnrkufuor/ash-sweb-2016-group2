<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">

	<header><a href="../UI template/irbinterface.html"><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Web Application</h1></header>

	<div class="side1" style="position: absolute; top:30%">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="../UI template/deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review2.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu">
		<span>Application Form</span>
	</div>
	<?php
		$id ="";
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}

		?>


			<form style="margin-left:28%" action="subjects.php" method="GET">
			<div class="mainDiv" style="padding-top: 5px;">

				<div><input type="hidden" name="id" value="<?php echo $id ?>"/></div>
				<div><h2>Title of Project:</h2> <textarea style="width:97%; height:4%" name="title" required></textarea></div>
				</br>
				<h2>Exemption Request</h2>
				<div><p>If you are requesting an exemption from Human Subject Review Commitee (HSRC) review, explain the basis for the requested exemption. 
						Click <a href=''>here</a> to see the list of exempt project types. Skip if you are not requesting exemption.</p></div>
				<div><textarea name="exemption" style="width:97%; height:40%"></textarea></div>
				
				<div style="margin-top: 40px"><b>Progress:</b> &nbsp;<progress value="20" max="100" ></progress> &nbsp; &nbsp; &nbsp; &nbsp; <input style="float:right; margin-right: 50px" type="submit" value="Next" ></div>
				</div>
			</form>
		</div>
	<footer><p>Ashesi University College. | All rights reserved. | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	<script>
function myFunction() {
    alert("You have not completed the form");
}
</script>
</body>
</html>