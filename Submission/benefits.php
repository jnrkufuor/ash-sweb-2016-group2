<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	
	<style>
		h1{
			font-size: 170%;
		}
	</style>
		
</head>
<body>
	<div class="main">
	<header><!--<a href="../UI template/index.html">--><img src="../UI template/images/ashesi.png"></a><h1 id="titre"> Ashesi IRB Web Application</h1></header>
	<div class="side1"style="position:absolute; top:30%; height:417px;">
		<a href="../UI template/index.html" style ="text-decoration:none"><div id="appcen"><h3>Application Center</h3></div></a>
		<a href="../UI template/deletefile.html" style ="text-decoration:none"><div id="filesys"><h3>File System</h3></div></a>
		<a href="../UI template/review2.html" style ="text-decoration:none"><div id="rev"><h3>IRB Reviews</h3></div></a>
	</div>
	<!-- <div class="side2" >Side bar</div>-->
	<div class="menu" style="background-color: orange;position:relative; left:28%; width:57%; height:5%; bottom:1%; font-size: 120%;">
		<span> <h2> <strong> Application Form <strong> </h2></span>
	</div>
	<br>
			
		<form style="margin-left:28%"action="" method="GET">
		<div style="height:420px; padding-top: 0.00002px; position: relative; bottom:20px;" class="mainDiv">
			<!-- <div><input type="hidden" name="id" value="?php echo $id ?>"/></div> -->
			<h2 id="headings">Describe Any Anticipated Benefits To Subjects From Participation In This Research</h2>
			<div><p>A. Will participants / subjects / respondents be compensated or rewarded in any way?</p></div>
			<div><textarea name="participantConpensation" style="width:97%; height: 8%" required></textarea></div>
			<div><p>B. What intrinsic benefit will participants / subjects / respondents receive? </p></div>
			<div><textarea name="participantBenefits" style="width:97%; height: 8%" required></textarea></div>
			<br>
			<div>Progress:<progress value="100" max="100"></progress> &nbsp; &nbsp; <input style="float:right; margin-left: 20px" type="submit" name="submit" value="Submit" onclick="myFunction()"><input style="float:right;" type="submit" name="save" value="Save As Draft" onclick="myFunction()"> <a style="float:right; margin-right: 40px"href="confidentiality.php">Back</a> &nbsp;  </div> 
		</form>
			<br>
			<hr>
			<br>
			<div>
			<div><p><b>Upload Consent Form </b></p> </div>
				<p style="color: #1e5eb6"> File extensions allowed are .txt, .docx, .pdf and .xlsx </p>
				<form style="text-align: left;"id="files" action="ajaxValidate.php" method="POST" enctype="multipart/form-data"> 
			   
				   <div style="float:left;"> <input type="file" name="doc" > </div>
				   <input type="submit" value="Upload"></input>
			  
				</form>
			</div>
		</div>
			
		<script type="text/javascript">
		$(function(){
			$('#files').form({
				success:function(data){
					$.messager.alert('Info', data, 'info');
				}
			});
		});
		</script>
		
	<footer><p>Ashesi University College | All rights reserved | University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330</p>
	</footer>
	
<script>
function myFunction() {
    alert("You have completed the form");
}
</script>

</body>
</html>



