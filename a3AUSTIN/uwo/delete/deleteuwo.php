<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DELETE UWO WARNING</title>
</head>
<body>
<?php
    echo "<h1>Delete Warning</h1>";
    include '../../header.php';
    include '../../connectdb.php';
    echo "<hr>";
    $number = $_POST["courseNumber"];
    $code = $_POST["courseCode"];
    echo "<h5>Are you sure you want to delete the western course: </h5>";
    echo "<h3>" . $number . "</h3>";
    echo "<br>";
    echo "<h5>If it has an equivalency, it will be listed below: </h5>";
    echo "<h3>" . $code . "</h3>";
    echo "<br>";
    echo "<form action='delete.php' method='post'>";
        echo "<button type='submit' name='courseNumber' value='" . $number ."'>Yes I am sure</button>";
    echo"</form>";
    echo "<br>";
    echo "<form action='deleteuwocourse.php' method='post'>";
        echo "<button type='submit' value='" . $number ."'>No, do not delete</button>";
    echo"</form>";
    echo "<br>";
    mysqli_close($connection);
?>
</body>
</html>