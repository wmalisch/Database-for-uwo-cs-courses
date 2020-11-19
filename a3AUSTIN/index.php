<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOME PAGE</title>

</head>
<body>
    <h1>Home Page</h1>
    <h2>UWO CS Courses & Equivalencies</h2>
    <?php
        include 'header.php';
        include 'connectdb.php';
    ?>
    <h3>
        Here you can take a look at UWO courses, other universities, and the other universities courses<br>
    </h3>
    <form action="getuwocourses.php" method ="post">
        <input type="submit" value="Get UWO Courses">
    </form>
    <form action="getuniversitys.php" method ="post">
        <input type="submit" value="Get University's">
    </form>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>