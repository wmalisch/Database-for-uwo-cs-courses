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
        Here you can take a look at UWO courses, other universities, and the other universities courses<br>
    </h3>
    <form action="getuwocourses.php" method ="post">
        <?php
            include "getuwocourses.php";
        ?>
        <input type="button" value="Get UWO Courses">
    </form>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>