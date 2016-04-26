<?php
session_start();
session_destroy();
header("location: IRB_home.php");

?>