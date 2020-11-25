<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ADD UWO COURSES</title>
</head>
<body>

<!-- Basic header details -->
<h1>Add UWO Course</h1>
<?php
    include '../../header.php';
    include '../../connectdb.php';
?>
<hr>
<br>
<h3>Enter the details regarding the new course below: </h3>

<!-- Get data on new course and reroute to the page where we actually add it -->
<form action="adduwo.php" method="post">

    <!-- Course Number -->
    <div>
        <label for='newNumber'>New Course Number: cs</label>

        <!-- Make sure the input is exactly 4 in length and only numbers-->
        <input 
            type="text" 
            id='newNumber' 
            name="courseNumber"
            pattern=".{4,}"
            required title="4 characters minimum"
            maxlength="4"
            oninput="this.value = this.value.replace(/[^0-9.]/g,'').replace(/(\..*)\./g, '$1');" />
    </div>

    <!-- Course Name -->
    <div>
        New Course Name: <input type="text" id='newName' name="courseName" minlength='1' maxlength='50'> 
    </div>

    <!-- Weight details -->
    <div>
        New Course Weight: 
        <select id='newWeight' name="weight">
            <option value='0.5'>0.5</option>
            <option value='1.0'>1.0</option>
        </select>
    </div>

    <!-- Suffix details -->
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