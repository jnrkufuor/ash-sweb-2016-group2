
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
    $type=$row['type'];

    if (!$row||!$tbl){
        //echo '<script>window.location.href = "../New UI/IRB_home.php?error=err";</script>';
        }
    if ($row||!$tbl){
         $type=$row['type'];
        }
    if (!$row||$tbl){
        $type=$tbl['type'];
        }
	if ($type=="Applicant") {
             echo '<script>window.location.href = "../New UI/IRB_dashboard.php";</script>';
        }
	if ($type=="Reviewer") {
            header("Location:reviewerIndex.php?id=$id");
        }
	if ($type=="Administrator") {
            echo '<script>window.location.href = "../New UI/admin_dashboard.php";</script>';
        }
    
}
?>
