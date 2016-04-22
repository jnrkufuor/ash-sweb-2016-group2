<!DOCTYPE html>

<html>

<head> </head>

<body>
	<div><p><b>Upload Consent Form </b></p> </div>
			
		<p style="color: #1e5eb6"> File extensions allowed are .txt, .docx, .pdf and .xlsx </p>
            
			<form action="Tester.php" method="POST" enctype="multipart/form-data">
          
               <input type="file" name="doc" > 
             <input type="submit" value="Upload" name="nabbed"></input>
          
			</form>

</body>

</html>

<?php
           
		    if(isset($_POST['nabbed'])){

			
			include_once('../FileUpload/upload.php');
			$usera = new upload();
			
			$error = array();
                $filename = $_FILES['doc']['name']; //filename
                $filetemp = $_FILES['doc']['tmp_name']; //temporary file
                $filesize = $_FILES['doc']['size']; //size of file in bytes
                $tmp = explode('.', $filename);
                $fileext = strtolower(end($tmp));
                
                $sID = 27302090;
                $rID = 7;

             
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
					
                    if($usera->addFile($fileext, $filesize, $filename, $filetemp, $sID, $rID)){
                        echo "$filename.$fileext Succesfully added";
				}
                    else{
                        echo "File add has failed! ";
                    }        
				}
                
                else
                    print_r($error);
			}
            
			
?>