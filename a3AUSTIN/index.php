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
    <form action="getuwocourses.php" method ="post">
        <?php
            include "getuwocourses.php";
        ?>
        <input type="submit" value="Get UWO Courses">
    </form>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>