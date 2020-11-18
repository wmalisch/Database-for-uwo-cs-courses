<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UWO CS Courses & Equivalences</title>

</head>
<body>
    <?php
        include 'connectdb.php'
    ?>
    <h1>UWO CS Courses & Equivalencies</h1>
    <h3>
        Welcome to the UWO course and course equivalence page. Here you will be able to find<br>
        all information regarding current UWO CS Courses, other universities CS courses, other <br>
        universities information, and information on course equivalences between UWO and other <br>
        universities.<br>
    </h3>
    <select>
        <?php
            include getuwocourses.php;
        ?>
        View UWO Courses
        <option value="1">All Courses</option>
        <option value="2">By Date</option>
        <option value="3">By Course Name</option>
        <?php
            include getuwocourses.php;
        ?>
    </select>

</body>
</html>