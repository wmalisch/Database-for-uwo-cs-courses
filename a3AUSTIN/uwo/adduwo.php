<?php
    include '../connectdb.php';
    $number = $_POST["courseNumber"];
    $name = $_POST["courseName"];
    $weight = $_POST["weight"];
    $suffix = $_POST["suffix"];
    $query = "INSERT INTO westernCourses VALUES('$number','$name','$weight','$suffix');"; 
    if(!mysqli_query($connection,$query)){
        die("Error while trying to update UWO course " . mysqli_error($connection));
        echo mysqli_error($connection);
    }else{
        header('Location: ../index.php');
        exit;
    }
?>