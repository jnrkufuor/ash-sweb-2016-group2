
<?php

include('users.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
	
    $obj = new users();
    $lec = new users();
    if (!$obj->validateUser($id,$password)) {
        window.alert("Error Validating");
        header("Location:login.php");
		
    }
	if (!$lec->validateReviewer($id,$password)){
		window.alert("Error Validating");
        header("Location:login.php");
	}
    echo "flas";
	
    $row = $obj->fetch();
	$tbl = $lec->fetch();
    $type=$row['type'];

    if (!$row||!$tbl){
        header("Location:login.php?error=$err");
        }
    if ($row||!$tbl){
         $type=$row['type'];
        }
    if (!$row||$tbl){
        $type=$tbl['type'];
        }
	if ($type=="Applicant") {
            header("Location:../UI template/index.html?id=$id");
        }
	if ($type=="Reviewer") {
            header("Location:reviewerIndex.php?id=$id");
        }
	if ($type=="Administrator") {
            header("Location:adminIndex.php?id=$id");
        }
    
}
?>
