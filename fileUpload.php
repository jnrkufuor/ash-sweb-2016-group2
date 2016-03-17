<!-- Display for Testing of Functional Requirement - Upload File -->

<html>
    <head>
        <meta charset="UTF-8">
    <br>
        <title>IRB APP</title>
        <h1 style="color: brown; text-align: center; font-size: 50px"> Internal Review Board Application </h1>
        <hr>
        
    </head>
    <body>
        <br>
        
         <?php
        include_once('upload.php');
        $user = new upload();
        
        
        
        if(isset($_POST['manga'])){
             
            $error = array();
            $filename = $_FILES['doc']['name'];    
            $filetemp = $_FILES['doc']['tmp_name'];
            $filesize = $_FILES['doc']['size'];
            $fileext = strtolower(end(explode('.', $filename)));
            
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
            
            //stores file on server if there are no errors and enters file details into database
            if(empty($error)==true){
                move_uploaded_file($filetemp, $folder.$filename);
                $user->addFile($filename, '.txt', $filesize);
            }
            
            else
                print_r($error);
           
        }
           
            
        ?>
       
        
        <p style="text-align: center; font-size: 40px"> File Upload </p>
        
        <form action="fileUpload.php" method="POST" enctype="multipart/form-data">
            <div style="text-align: center"> <input type="file" name="doc" >
                <input type="submit" name="manga"> </div>
        </form>
       
        
    </body>
</html>
