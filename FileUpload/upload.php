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
    public function addFile($fileType, $fileSize, $fileName, $file, $sID, $rID){
        $strQuery = "INSERT INTO supporting_documents(FileType, FileSize, FileName, File, Researcher_ID, Submission_ID) VALUES('$fileType', '$fileSize','$fileName', '$file','$sID', '$rID')";    
        return $this->query($strQuery);
    }
	
	public function getFiles($RID){
		$strQuery = "Select * from supporting_documents where Researcher_ID='$RID'";
		return $this->query($strQuery);
	}
    
  }
