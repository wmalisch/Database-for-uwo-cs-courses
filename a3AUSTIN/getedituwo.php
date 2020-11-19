<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EDIT UWO COURSES</title>
</head>
<body>

<h1>Edit UWO Course</h1>
<?php
    include 'header.php';
    include 'connectdb.php';
?>
<hr>
<?php
    $course = $_POST["courseNumber"];
    $query = "SELECT * FROM westernCourses WHERE courseNumber='$course'";
    $result = mysqli_query($connection, $query);
    if(!result){
        die("database query failed");
    }
    $data = mysqli_fetch_assoc($result);
    echo "<h3>You are editing " . $course . "</h3>";
    echo "<form action='edituwo.php' method='post'>";
    echo "<div name='courseNumber' value='" . $data["courseName"] . "'>". "Current course name: " . $data["courseName"] . "   " . "</div>";
    echo "New course name: " . "<input type='text' name='courseName'>" . "<br>";
    echo "Current course weight: " . $data["weight"] . "   ";
    echo "New course weight: " . "<select name'weight'>
            <option value='0.5'>0.5</option>
            <option value='1.0'>1.0</option>
        </select><br>";
    echo "Current course suffix: " . $data["suffix"] . "   ";
    echo "New course suffix: " . "<select name='suffix'>
            <option value='A/B'>A/B</option>
            <option value='F/G'>F/G</option>
            <option value='E'>E</option>
            <option value='Y'>Y</option>
            <option value='Z'>Z</option>
            <option value=''></option>
        </select><br><br>";
    echo "<input type='submit' value='Click here to finalize edit'>";
    echo "</form>";
?>

</body>
</html>