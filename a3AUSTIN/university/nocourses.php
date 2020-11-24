<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UNIVERSITY'S NO COURSES</title>
    <script src="sortUniTable.js"></script>
</head>
<body>
    <h1>University's with No Courses Recorded</h1>
    <br>
    <?php
        include '../header.php';
        include '../connectdb.php';
    ?>
    <hr>
    <br>
    <?php 
        $query = "SELECT distinct officialName, nickname FROM university, equivalence WHERE university.uniId NOT IN (SELECT outsideCourses.uniId FROM outsideCourses);";
        $result = mysqli_query($connection,$query);
        if(!result){
            die("Database query failed");
        }
        echo "<table style='width:30%; border: 1px solid black;margin-left:auto;margin-right:auto' id='table'>";
        echo "<tr>";
        echo "<th>University Name</th>";
        echo "<th>Nickname</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["officialName"] . "</td>";
            echo "<td>" . $row["nickname"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
        mysqli_close($connection);
    ?>
</body>
</html>