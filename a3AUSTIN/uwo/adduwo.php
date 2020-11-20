<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ADD UWO COMPLETE</title>
</head>
<body>
<?php
    include '../connectdb.php';
    $number = $_POST["courseNumber"];
    $name = $_POST["courseName"];
    $weight = $_POST["weight"];
    $suffix = $_POST["suffix"];
    $query = "INSERT INTO westernCourses VALUES('cs$number','$name','$weight','$suffix');"; 
    if(!mysqli_query($connection,$query)){
        echo "<h1>Add Error!</h1>";
        die("Error while trying to update UWO course " . mysqli_error($connection));
        echo mysqli_error($connection);
        echo "<form action='adduwocourse.php method='post'>";
        echo "<input type='submit' value='Retry Entering Value'>";
        echo"</form>";
    }else{
        header('Location: ../index.php');
        exit;
    }
?>
</body>
</html>