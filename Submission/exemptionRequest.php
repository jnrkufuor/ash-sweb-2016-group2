<html>
	<head>
	<title> Submission </title>
	<link rel="stylesheet" type="text/css" href="applicationStyle.css">
	</head>
	<body>
		<div id="header"> 
		<img style="float:left" src="logo.jpg"> IRB Application Form
		</div>
		<div id="navMenu" align="center">
                    <ul id="menu" >
                    <li><a href="">DASHBOARD</a></li>
                    <li><a href="">UPLOAD DOCUMENTS</a></li>
                   <li><a href="">SIGN OUT</a></li>
                  </ul>  
                    </div>
		<div id="mainDiv">
			<form action="subjects.php" method="GET">
				<div><h2 id="headings">Title of Project:</h2> <textarea style="width:97%; height:4%" name="title" required></textarea></div>
				</br>
				<h2 id="headings">Exemption Request</h2>
				<div><p>If you are requesting an exemption from Human Subject Review Commitee (HSRC) review, explain the basis for the requested exemption. 
						Click <a href=''>here</a> to see the list of exempt project types. Skip if you are not requesting exemption.</p></div>
				<div id="textBox"><textarea name="exemption" style="width:97%; height:40%" required></textarea></div>
				
				<div id="progressMargin"><b>Progress:</b> &nbsp;<progress value="20" max="100" ></progress> &nbsp; &nbsp; &nbsp; &nbsp; <input style="float:right; margin-right: 50px" type="submit" value="Next" ></div>
			</form>
		</div>
	</body>
</html>