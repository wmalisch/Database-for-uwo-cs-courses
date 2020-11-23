<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DELETE UWO COMPLETE</title>
</head>
<body>
<h1>DELETE COMPLETE</h1>
<?php
    include '../../connectdb.php';
    include '../../header.php';
    echo "<hr>";
    $number = $_POST["courseNumber"];
    $query = "DELETE FROM westernCourses where courseNumber='$number';"; 
        if(!mysqli_query($connection,$query)){
            echo "<h1>Delete Error!</h1>";
            echo mysqli_error($connection);
            echo "<form action='deleteuwocourse.php' method='post'>";
            echo "<input type='submit' value='Retry Deleting Value'>";
            echo"</form>";
            die("Error while trying to delete UWO course " . mysqli_error($connection));
        }else{
            echo "<h2>Course Deleted!</h2>";
        }
?>
</body>
</html>
