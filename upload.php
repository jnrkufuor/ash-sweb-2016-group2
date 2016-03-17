<?php

include_once('control.php');

/**
 * Description of upload
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
    function addFile($fileName, $fileType, $fileSize){
        $strQuery = "INSERT INTO informedconsentform(FileName, FileType, FileSize) VALUES('$fileName', '$fileType', '$fileSize')";    
        return $this->query($strQuery);
    }
    
    
}
