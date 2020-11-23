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
    <div class='container'>
        <div class='innerContainer'>
            <form action="uwo/getuwocourses.php" method ="post">
                <input type="submit" value="Get UWO Courses">
            </form>
        </div>
        <div class='innerContainer'>
            <form action="uni/getuniversitys.php" method ="post">
                <input type="submit" value="Get University's">
            </form>
        </div>
    </div>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>