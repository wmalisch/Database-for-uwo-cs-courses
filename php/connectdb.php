<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "cs3319";
$dbname = "vetoffice";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()){
        die("database connection failed :" .
        mysqli_connect_eerno() .
        "(" . mysqli_connect_errno() . ")"
        );
}
?>
