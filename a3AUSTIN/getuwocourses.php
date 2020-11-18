<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UWO COURSES</title>
</head>
<body>
    <?php
        include 'connectdb.php'
    ?>
    <h1>UWO Courses</h1>
    <h2>UWO CS Courses & Equivalencies</h2>
    <?php
        $query = "SELECT * FROM westernCourses";
        $result = mysqli_query($connection, $query);
        if(!result){
            die("Database query failed");
        }
        while($row = mysqli_fetch_assoc($result)){
            echo "<li>";
            echo $row["courseNumber"] . " " . $row["courseName"] . " " . $row["weight"] . " " . $row["suffix"] . "</li>";
        }
        mysqli_free_result($result);
    ?>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>
