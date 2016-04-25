<html>
<head>
	<link href="../UI template/index.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
	<script type="text/javascript">
	
		function validate(string){
			var re = /([^ ].*[^ ])+/i;
			return re.test(string);
		}

		function checkSave(id){
			if(validate($("#title").val()) == false){
				document.getElementById("title").style.border="1px solid red";
				alert("Kindly provide a title for your submission");
				return;
			}
			else{
				document.getElementById("title").style.border="1px solid grey";
			}


			if(!divStatus.innerHTML == ""){
				window.open("subjects.php","_self");
			}
			else{
				window.open("update.php?cmd=1&title="+$("#title").val()+"&exemption=" + $("#exemption").val()+"&id="+id ,"_self");
			}
		}

		function save(id){
			if(validate($("#title").val()) == false){
				document.getElementById("title").style.border="1px solid red";
				alert("Kindly provide a title for your submission");
				return;
			}
			else{
				document.getElementById("title").style.border="1px solid grey";
			}


			if(divStatus.innerHTML != ""){
				var theUrl="submission_ajax.php?cmd=2&title="+$("#title").val()+"&exemption=" + $("#exemption").val();
				$.ajax(theUrl,
					{async:true,complete:saveComplete}
					)
				return;
			}
			var theUrl="submission_ajax.php?cmd=1&title="+$("#title").val()+"&exemption=" + $("#exemption").val()+"&id="+id;
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
		$id = 27302017;
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
		}

		?>

			<form style="margin-left:28%" >
			<div style="height: 700px" class="mainDiv">
				<div><input type="hidden" name="id" value="<?php echo $id ?>"/></div>
				<div class="status" id="divStatus"></div> 
				<div><h2>Title of Project:</h2> <textarea id="title" style="width:97%; height:4%" name="title" required></textarea></div>
				</br>
				<h2>Exemption Request</h2>
				<div><p>If you are requesting an exemption from Human Subject Review Commitee (HSRC) review, explain the basis for the requested exemption. 
						Click <a href=''>here</a> to see the list of exempt project types. Skip if you are not requesting exemption.</p></div>
				<div><textarea id="exemption" name="exemption" style="width:97%; height:40%"></textarea></div>
				
				<div style="margin-top: 40px"><b>Progress:</b> &nbsp;<progress value="20" max="100" ></progress> &nbsp; &nbsp; &nbsp; &nbsp; <button style="float:right; margin-right: 20px" type="button" onclick="checkSave(<?php echo $id ?>)" >Next</button> &nbsp; &nbsp;<button type="button" style="float:right; margin-right: 50px" onclick="save(<?php echo $id ?>)">Save</button> </div>
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