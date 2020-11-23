<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <h1>Home Page</h1>
    <h2>UWO CS Courses & Equivalencies</h2>
    <?php
        include 'header.php';
        include 'connectdb.php';
    ?>
    <hr>
    <h3>
        Here you can take a look at UWO courses, other universities, and the other universities courses<br>
    </h3>
    <form action="uwo/getuwocourses.php" method ="post">
        <input type="submit" class="courseButton" value="Get UWO Courses">
    </form>
    <form action="getuniversitys.php" method ="post">
        <input type="submit" class="uniButton" value="Get University's">
    </form>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>