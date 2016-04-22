<?php

include_once('..\adb.php');

/**
 *
 * @author Hudson Taylor
 */
class upload extends adb {
    //put your code here
    
    function upload(){}
    
    /**
     * Method to add file to database
     * @param type $id Submission ID
     * @param type $file Filename
     * @return type boolean depending on method execution success
     */
    public function addFile($fileType, $fileSize, $fileName, $file, $rID, $sID){
        $strQuery = "INSERT INTO supporting_documents SET FileType = '$fileType', FileSize = '$fileSize', FileName = '$fileName', File = '$file', Researcher_ID = '$rID', Submission_ID= '$sID'";    
        return $this->query($strQuery);
    }
    
  }
