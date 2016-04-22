<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">

			var currentObject = null;

			function fileUploadComplete(xhr, status){
				if(status!="success"){
					return;	
				}
				
				statusP.innerHTML = xhr.responseText;

			}
			
			function fileUpload(obj){
				var ajaxUrl= "ajaxValidate.php?cmd="+obj;
				$.ajax(ajaxUrl,
						{
						async: true,
						complete: fileUploadComplete
						}
				);
			}

		</script>
		
</head>
<body>
	<div class="main">
	<header><!--<a href="../UI template/index.html">--><img src="../UI template/images/ashesi.png"></a><h1> Ashesi IRB Web Application</h1></header>
	<div class="side1"style="position:absolute; top:30%; height:417px;">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="../UI template/deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review2.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu">
		<span>Application Form </span>
	</div>
	<br>
		
		<form style="margin-left:28%"action="" method="GET">
		<div style="height:420px; padding-top: 5px; position: relative; bottom:20px;" class="mainDiv">
			<!-- <div><input type="hidden" name="id" value="?php echo $id ?>"/></div> -->
			
			<h2 id="headings">Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way?</p></div>
			<div><textarea name="participantConpensation" style="width:97%; height: 8%" required></textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? </p></div>
			<div><textarea name="participantBenefits" style="width:97%; height: 8%" required></textarea></div>
			
			<div><p><b>Upload Consent Form </b></p> </div>
			<p style="color: #1e5eb6"> File extensions allowed are .txt, .docx, .pdf and .xlsx </p>
            <form action="" method="POST" enctype="multipart/form-data"> 
           
               <input type="file" name="doc" > 
			   
                <!--<input type="submit" name="button" value="Upload"> -->
           
				<!-- <button onclick="var bool = true;">Say Hello</button> </div> -->
        </form>
		<!-- <button onclick="fileUpload(1)">Upload </button> -->
		<a href="#" onclick="fileUpload(1)">Upload </a> 	
			<br/>
			<br/>
			
			<div>Progress:<progress value="100" max="100"></progress> &nbsp; &nbsp; <input style="float:right; margin-left: 20px" type="submit" name="submit" value="Submit" onclick="myFunction()"><input style="float:right;" type="submit" name="save" value="Save As Draft" onclick="myFunction()"> <a style="float:right; margin-right: 40px"href="confidentiality.php">Back</a> &nbsp;  </div> 
			<!--fileUpload(this, 27302017, 7, 1)
			-->	
			</div>
		</form>
		
	<footer><p>Ashesi University College | All rights reserved | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	
	<script>
function myFunction() {
    alert("You have completed the form");
}
</script>
</body>
</html>

