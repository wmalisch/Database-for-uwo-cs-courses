<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UWO DELETES</title>
    <script src="alert.js"></script>
</head>
<body>
    <h1>UWO Delete Courses</h1>
    <?php
        include '../../header.php';
        include '../../connectdb.php';
    ?>
    <hr>
    <br>
    <?php
        $query = "SELECT westernCourses.courseNumber, courseName, weight, suffix, courseCode AS 'Equivalent Course' FROM westernCourses LEFT JOIN equivalence ON westernCourses.courseNumber=equivalence.courseNumber;";
        $result = mysqli_query($connection, $query);
        if(!result){
            die("Database query failed");
        }
        echo "<table style='width:100%' id='table'>";
        echo "<tr>";
        echo "<th>Course Number</th>";
        echo "<th>Course Name</th>";
        echo "<th>Course Weight</th>";
        echo "<th>Course Suffix</th>";
        echo "<th>Equivalent Course Code</th><th>Delete</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["courseNumber"] . "</td>";
            echo "<td>" . $row["courseName"] . "</td>";
            echo "<td>" . $row["weight"] . "</td>";
            echo "<td>" . $row["suffix"] . "</td>";
            echo "<td>" . $row["courseCode"] . "</td>";
            echo "<td>" . "<form action='deleteuwo.php' method='post'>";
            echo "<button type='submit' onclick='alert()' value='" . $row["courseNumber"] . "'>" . $row["courseNumber"] . " Equivalent to: " . $row["Equivalent Course"] . "</button>" . "</td>";
            echo "<div name='courseCode' value='" . $row["courseCode"] . "'></div>";
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