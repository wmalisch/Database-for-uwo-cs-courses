<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UWO COURSES</title>
    <script src="sortTable.js"></script>
</head>
<body>
    <h1>UWO Computer Science</h1>
    <h2>UWO Courses</h2>
    <?php
        include '../header.php';
        include '../connectdb.php';
    ?>
    <hr>
    <?php
        $query = "SELECT * FROM westernCourses";
        $result = mysqli_query($connection, $query);
        if(!result){
            die("Database query failed");
        }
        echo "<table style='width:100%' id='table'>";
        echo "<tr>";
        echo "<th id='hnumber'>Course Number</th>";
        echo "<th id='hname'>Course Name</th>";
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
            echo "<td>" . "<form action='getedituwo.php' method='post'>";
                echo "<input type='submit' name='courseNumber' value='" . $row["courseNumber"] . "'>";
            echo "</form>" . "</td>";
            echo "<td>" . "<input type='submit' value='" . $row["courseNumber"] . "'>" . "</td>";
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
