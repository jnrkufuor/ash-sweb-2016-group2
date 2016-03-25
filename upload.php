<?php

include_once('control.php');

/**
<<<<<<< HEAD
 * Class for upload of consent form
=======
 * Description of upload
>>>>>>> f267ee5917bfeaacf87c06193c1c96bb0125aad0
 *
 * @author Hudson Taylor
 */
class upload extends control {
    //put your code here
    
    function control(){}
    
    /**
     * Method to add file to database
     * @param type $id Submission ID
     * @param type $file Filename
     * @return type boolean depending on method execution success
     */
<<<<<<< HEAD
    public function addFile($fileName, $fileType, $fileSize, $file){
        $strQuery = "INSERT INTO informedconsentform(FileName, FileType, FileSize, File) VALUES('$fileName', '$fileType', '$fileSize','$file')";    
        return $this->query($strQuery);
    }
    
=======
    function addFile($fileName, $fileType, $fileSize){
        $strQuery = "INSERT INTO informedconsentform(FileName, FileType, FileSize) VALUES('$fileName', '$fileType', '$fileSize')";    
        return $this->query($strQuery);
    }
    
    
>>>>>>> f267ee5917bfeaacf87c06193c1c96bb0125aad0
}
