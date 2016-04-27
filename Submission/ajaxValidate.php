<?php

	session_start();
	if(!isset($_SESSION['USER_ID'])){
		header("Location:IRB_home.php");
		exit();
	}
			
				include_once('../FileUpload/upload.php');
				$user = new upload(); //creates object of upload class
        

				if(isset($_POST['sid'])){
				$researcherID = $_SESSION['USER_ID']; //default researcherID. Will be gotten from session when code is upgraded
				$submissionID = $_POST['sid']; //default submissionID. Same as researcherID
           
                $error = array();
                $filename = $_FILES['doc']['name']; //filename
                $filetemp = $_FILES['doc']['tmp_name']; //temporary file
                $filesize = $_FILES['doc']['size']; //size of file in bytes
                $tmp = explode('.', $filename);
                $fileext = strtolower(end($tmp));
                

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
                if(empty($error)==false){
					print_r($error); //print error if file exceeds 5 MB or file extension is wrong
                   
                }        

                else{
					 if($user->addFile($fileext, $filesize, $filename, $filetemp,$researcherID, $submissionID)){
                        echo "File succesfully added" ; //print if file is added to database
                    }
                    else{
                        echo "File add has failed.";
					
				}
				}
				}
                    

?>
