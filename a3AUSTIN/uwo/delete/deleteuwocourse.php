<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UWO DELETES</title>
    <script src="sortTable.js"></script>
</head>
<body>
    <h1>UWO Computer Science</h1>
    <h2>UWO Delete Courses</h2>
    <?php
        include '../../header.php';
        include '../../connectdb.php';
    ?>
    <hr>
    <br>
    <?php
        $query = "SELECT * FROM westernCourses as W LEFT JOIN equivalence as E on W.courseNumber=E.courseNumber";
        $result = mysqli_query($connection, $query);
        if(!result){
            die("Database query failed");
        }
        echo "<table style='width:100%' id='table'>";
        echo "<tr>";
        echo "<th><button id='hnumber' onclick='check_direction(0)'>Course Number</button></th>";
        echo "<th><button id='hname' onclick='check_direction(1)'>Course Name</button></th>";
        echo "<th>Course Weight</th>";
        echo "<th>Course Suffix</th>";
        echo "<th>Edit</th><th>Delete</th>";
        echo "</tr>";    
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["courseNumber"] . "</td>";
            echo "<td>" . $row["courseName"] . "</td>";
            echo "<td>" . $row["weight"] . "</td>";
            echo "<td>" . $row["suffix"] . "</td>";
            echo "<td>" . "<form action='deleteuwo.php' method='post'>";
                echo "<button type='submit' value='" . $row["courseNumber"] . "'>" . $row["courseNumber"] . "</button>" . "</td>";
            echo "</form>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    ?>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>