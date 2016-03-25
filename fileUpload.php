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
        
<<<<<<< HEAD
        if(isset($_POST['manga'])){
             
            $error = array();
            $filename = $_FILES['doc']['name']; //filename
            $filetemp = $_FILES['doc']['tmp_name']; //temporary file
            $filesize = $_FILES['doc']['size']; //size of file in bytes
            $fileext = strtolower(end(explode('.', $filename))); //extension of file
            
            
=======
        
        
        if(isset($_POST['manga'])){
             
            $error = array();
            $filename = $_FILES['doc']['name'];    
            $filetemp = $_FILES['doc']['tmp_name'];
            $filesize = $_FILES['doc']['size'];
            $fileext = strtolower(end(explode('.', $filename)));
>>>>>>> f267ee5917bfeaacf87c06193c1c96bb0125aad0
            
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
            
<<<<<<< HEAD
            
            //Add file and file information on database if there are no errors 
            if(empty($error)==true){
                move_uploaded_file($filetemp, $folder.$filename);
                if($user->addFile($filename, '.txt', $filesize,$filetemp)){
                    echo "$filename.$fileext Succesfully added";
                }
                else{
                    echo "File add failed! ";
                }        
=======
            //stores file on server if there are no errors and enters file details into database
            if(empty($error)==true){
                move_uploaded_file($filetemp, $folder.$filename);
                $user->addFile($filename, '.txt', $filesize);
>>>>>>> f267ee5917bfeaacf87c06193c1c96bb0125aad0
            }
            
            else
                print_r($error);
<<<<<<< HEAD
        }
       
=======
           
        }
           
            
>>>>>>> f267ee5917bfeaacf87c06193c1c96bb0125aad0
        ?>
       
        
        <p style="text-align: center; font-size: 40px"> File Upload </p>
<<<<<<< HEAD
        <br>
        <p style="text-align: center;color: #1e5eb6"> File extensions allowed are .txt, .docx, .pdf and .xlsx </p>
=======
        
>>>>>>> f267ee5917bfeaacf87c06193c1c96bb0125aad0
        <form action="fileUpload.php" method="POST" enctype="multipart/form-data">
            <div style="text-align: center"> <input type="file" name="doc" >
                <input type="submit" name="manga"> </div>
        </form>
       
        
    </body>
</html>
