

<?php
/*
 * Database connection helper
 */
include_once('setting.php');

class control{
    
    var $mysql = null;  //database object
    var $result = null; //data retrieved from the database
    
    function control(){
    }
    
    /**
     * Method to connect to the database
     * @return boolean to indicate if connection occurred without error
     */
    function connect(){
        $this->mysql = new mysqli(HOST, USER, PASSWORD, DATABASE);
        
        if($this->mysql->connect_error){
           return false; 
        }
        else
            return true;
    }
    
    
    /**
     * Method to query the database
     * @param type $strQuery sql command to be executed 
     * @return boolean indicating if query commanded is executed or not
     */
    function query($strQuery){
        
        if(!$this->connect()){
            return false;
        }
        
        if($this->mysql == null){
            return false;
        }
        
        $this->result = $this->mysql->query($strQuery);
        
        if($this->result==false){
            return false;
        }
        
        return true;
        
    }
        
}

?>