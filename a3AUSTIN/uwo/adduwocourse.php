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
        <label for='newNumber'>New Course Number: cs</label>
        <input 
            type="text" 
            id='newNumber' 
            name="courseNumber"
            pattern=".{4,}"
            required title="4 characters minimum"
            maxlength="4"
            oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1');" />
    </div>
    <div>
        New Course Name: <input type="text" id='newName' name="courseName" minlength='1' maxlength='50'> 
    </div>
    <div>
        New Course Weight: 
        <select id='newWeight' name="weight">
            <option value='0.5'>0.5</option>
            <option value='1.0'>1.0</option>
        </select>
    </div>
    <div>
        New Course Suffix: <select id='newSuffix' name="suffix">
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