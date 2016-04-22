<?php

			
				include_once('../FileUpload/upload.php');
				$user = new upload();
        

           
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
                    //move_uploaded_file($filetemp, $folder.$filename);
					print_r($error);
                   
                    }        

                else{
					 if($user->addFile($fileext, $filesize, $filename, $filetemp,27302018, 9)){
                        echo "File succesfully added" ;
                    }
                    else{
                        echo "File add failed";
					
				}
				}
                    
          





?>
