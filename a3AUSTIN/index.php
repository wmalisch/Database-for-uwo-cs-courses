
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOME PAGE</title>

</head>
<body>
    <?php
        include 'connectdb.php'
    ?>
    <h1>Home Page</h1>
    <h2>UWO CS Courses & Equivalencies</h2>
    <h3>
        Here you can take a look at UWO courses, other universities, and the other universities courses<br>
    </h3>
    <form action="getuwocourses.php" method ="post">
        <input type="button" value="Get UWO Courses">
    </form>
    <form action="getuwocourses.php" method ="post">
        <input type="button" value="Get Universities">
    </form>
    <form action="getuwocourses.php" method ="post">
        <input type="button" value="Get Equivalent Coures's">
    </form>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>