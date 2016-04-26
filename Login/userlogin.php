
<?php

include('users.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $password = $_REQUEST['pword'];
	
    $obj = new users();
    $lec = new users();
    if (!$obj->validateUser($id,$password)) {
        window.alert("Error Validating");
        echo '<script>window.location.href = "../New UI/IRB_home.php";</script>';
		
    }
	if (!$lec->validateReviewer($id,$password)){
		window.alert("Error Validating");
        echo '<script>window.location.href = "../New UI/IRB_home.php";</script>';
	}

	
    $row = $obj->fetch();
	$tbl = $lec->fetch();
   
    if (!$row||!$tbl){
        echo '<script>window.location.href = "../New UI/IRB_home.php?error=err";</script>';
        }
    if ($row||!$tbl){
         $type=$row['type'];
        }
    if (!$row||$tbl){
        $type=$tbl['type'];
        }
	if ($type=="Applicant") {
		     session_start();
		     $_SESSION['USER_ID']=$row['USER_ID'];
			 $_SESSION['FIRSTNAME']=$row['FIRSTNAME'];
			 $_SESSION['LASTNAME']=$row['LASTNAME'];
             header("Location: ../New UI/IRB_dashboard.php");
        }
	if ($type=="Reviewer") {
		    session_start();
		    $_SESSION['USER_ID']=$tbl['RID'];
			$_SESSION['FIRSTNAME']=$tbl['FIRSTNAME'];
			 $_SESSION['LASTNAME']=$tbl['LASTNAME'];
            header("Location:reviewerIndex.php?id=$id");
        }
	if ($type=="Administrator") {
		    session_start();
		    $_SESSION['USER_ID']=$tbl['RID'];
			$_SESSION['FIRSTNAME']=$tbl['FIRSTNAME'];
			 $_SESSION['LASTNAME']=$tbl['LASTNAME'];
            echo '<script>window.location.href = "../New UI/admin_dashboard.php";</script>';
        }
    
}
?>
