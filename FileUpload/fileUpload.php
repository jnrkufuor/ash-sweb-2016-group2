<!-- Display for Testing of Functional Requirement - Upload File -->
<!DOCTYPE html>
<html>
 

<head>
<title> IRB Web </title>
<link rel="stylesheet" href="main.css"/>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50;
	
}
</style>
</head>

<body>

<header class="header">
	<h1 style="position:relative"> Institutional Review Board</h1> 
</header>

<div>
<ul>
  <li><a href="dashboard.php">Home</a></li>
  <li><a href="anna/exemptionRequest.php">Application Form</a></li>
  <li><a class="active" href="fileUpload.php">Upload Document </a></li>
  <li><a href="#about">Contact Us</a></li>
</ul>
</div>

<br> <br>
<div> 	
        <p style="text-align: center; font-size: 40px; font-family: Lucida; color: #000066"> <b> File Upload </b></p>
       
        <p style="text-align: center;color: #1e5eb6"> File extensions allowed are .txt, .docx, .pdf and .xlsx </p>
        <form action="fileUpload.php" method="POST" enctype="multipart/form-data"> 
            <div style="text-align: center">
                Student ID <input type="text" name="sID"> <br> <br>
                Research ID <input type="text" name="rID"> 
            </div>
            <br>
           <div style="text-align: center"> 
               <input type="file" name="doc" > 
                <input type="submit" name="button"> 
           </div>
				<!-- <button onclick="var bool = true;">Say Hello</button> </div> -->
        </form>
       


<br> <br> <br> <br> <br>
</div>

<footer class="footer">
	<p style="text-align:center"> <Strong> Ashesi University College. All rights reserved.
	 <br>1 University Avenue, Berekuso; PMB CT 3, Cantonments, Accra, Ghana | Phone: +233.302.610.330  </strong> <p>
</footer>
</body>
        
		  
    
</html>

 <?php
      
            include_once('upload.php');
            $user = new upload();
        

            if(isset($_POST['button'])){

                $error = array();
                $filename = $_FILES['doc']['name']; //filename
                $filetemp = $_FILES['doc']['tmp_name']; //temporary file
                $filesize = $_FILES['doc']['size']; //size of file in bytes
                $tmp = explode('.', $filename);
                $fileext = strtolower(end($tmp));
                
                $sID = $_POST['sID'];
                $rID = $_POST['rID'];

             
                $folder = "consentForms/"; //folder in IRBApp folder where consent forms are stored
                $extensions = array('docx','txt','xlsx','pdf'); //accepted file extensions

                //checks if uploaded file exceeds 5 megabytes
                if($filesize>5242880){
                    $error [] = "Maximum file size allowed is 5MB";   
                }

                //checks if uploaded file is required extension
                if(in_array($fileext, $extensions)!= true){
                    $error [] = "Wrong file extension";
                }

                //Add file and file information on database if there are no errors 
                if(empty($error)==true){
                    //move_uploaded_file($filetemp, $folder.$filename);
                    if($user->addFile('.txt', $filesize, $filename, $filetemp,$sID, $rID)){
                        echo "$filename.$fileext Succesfully added";
                    }
                    else{
                        echo "File add failed! ";
                    }        

                }
                else
                    print_r($error);
            }
			
?>


