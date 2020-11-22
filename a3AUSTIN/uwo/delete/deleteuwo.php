<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ADD UWO COMPLETE</title>
</head>
<body>
<?php
    include '../../header.php';
    include '../../connectdb.php';
    $number = $_POST["courseNumber"];
    $query = "DELETE FROM westernCourses where courseNumber='$number';"; 
    if(!mysqli_query($connection,$query)){
        echo "<h1>Add Error!</h1>";
        echo mysqli_error($connection);
        echo "<form action='adduwocourse.php method='post'>";
        echo "<input type='submit' value='Retry Entering Value'>";
        echo"</form>";
        die("Error while trying to update UWO course " . mysqli_error($connection));
    }else{
        header('Location: ../../index.php');
        exit;
    }
?>
</body>
</html>