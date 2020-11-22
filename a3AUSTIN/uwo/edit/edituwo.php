<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EDIT UWO COMPLETE</title>
</head>
<body>
<h1>Edit Complete!</h1>
<?php
    include '../../connectdb.php';
    $number = $_POST["courseNumber"];
    $name = $_POST["courseName"];
    $weight = $_POST["weight"];
    $suffix = $_POST["suffix"];
    $query = "UPDATE westernCourses SET courseName='$name', weight='$weight', suffix='$suffix' WHERE courseNumber='$number';"; 
    if(!mysqli_query($connection,$query)){
        die("Error while trying to update UWO course " . mysqli_error($connection));
    }else{
        header('Location: ../../index.php');
        exit;
    }
?>
</body>
</html>
