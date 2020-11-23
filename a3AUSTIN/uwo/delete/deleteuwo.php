<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DELETE UWO WARNING</title>
</head>
<body>
<?php
    include '../../header.php';
    include '../../connectdb.php';
    $number = $_POST["courseNumber"];
    $code = $_POST["courseCode"];
    echo "<h1>Delete Warning</h1>"
    echo"<h5>Are you sure you want to delete the western course?". $number . "</h5>";

    echo "<form action='delete.php' method='post'>";
        echo "<button type='submit' name='courseNumber' value='" . $number ."'>Yes I am sure</button>";
    echo"</form>";
    echo "<form action='deleteuwocourse.php' method='post'>";
        echo "<button type='submit' value='" . $number ."'>No, do not delete</button>";
    echo"</form>";
    echo "<br>"
    echo "<h5>If it has an equivalency, it will be listed below: </h5>"
    echo "<h5>" . $code . "</h5>"
    
    
?>
</body>
</html>