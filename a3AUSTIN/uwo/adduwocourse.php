<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ADD UWO COURSES</title>
</head>
<body>
<h1>Add UWO Course</h1>
<?php
    include '../header.php';
    include '../connectdb.php';
?>
<br>
<h3>Enter the details regarding the new course below: </h3>
<form action="adduwo.php" method="post">
    <div>
        New Course Number: <input type="text" name="courseNumber"> 
    </div>
    <div>
        New Course Name: <input type="text" name="courseName"> 
    </div>
    <div>
        New Course Weight: <select name="weight">
            <option value='0.5'>0.5</option>
            <option value='1.0'>1.0</option>
        </select>
    </div>
    <div>
        New Course Suffix: <select name="suffix">
            <option value="A/B">A/B</option>
            <option value="F/G">F/G</option>
            <option value="E">E</option>
            <option value="Y">Y</option>
            <option value="Z">Z</option>
            <option value=""></option>
        </select>
        <br>
        <br>
    </div>
    <input type="submit" value="Click here to add course">
</form>
</body>
</html>