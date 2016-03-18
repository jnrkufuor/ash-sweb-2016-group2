<?php

include_once('control.php');

/**
 * Class for upload of consent form
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
    public function addFile($fileName, $fileType, $fileSize, $file){
        $strQuery = "INSERT INTO informedconsentform(FileName, FileType, FileSize, File) VALUES('$fileName', '$fileType', '$fileSize','$file')";    
        return $this->query($strQuery);
    }
    
}
