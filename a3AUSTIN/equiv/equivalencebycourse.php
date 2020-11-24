<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UWO INDIVIDUAL COURSES</title>
</head>
<body>
    <?php
        $courseName = $_POST["courseName"];
        $courseNumber = $_POST["courseNumber"];
        $weight = $_POST["weight"];
        echo "<h1>UWO Computer Science</h1>";
        echo "<h2>" . $courseNumber . " Details</h2>";
        include '../header.php';
        include '../connectdb.php';
        echo "<hr>";
        echo "<h3>Basic Course Information</h3>";
        echo "<table style='width:30%;border: 1px solid black;margin-left:auto;margin-right:auto' id='equivtable'>";
        echo "<tr><th>Detail</th><th>Value</th></tr>";
        echo "<tr><td>Course Number</td><td>" . $courseNumber . "</td></tr>";
        echo "<tr><td>Course Name</td><td>" . $courseName . "</td></tr>";
        echo "<tr><td>Weight</td><td>" . $weight . "</td></tr>";
        echo "</table><br>";
        echo "<h3>Equivalent Course Information</h3>";
        $query = "SELECT officialName, courseName, equivalence.courseCode, weight, dateDecided FROM equivalence, outsideCourses, university WHERE courseNumber='$courseNumber' AND outsideCourses.courseCode=equivalence.courseCode AND outsideCourses.uniId=university.uniId AND equivalence.uniId=university.uniId AND equivalence.uniId=outsideCourses.uniId;";
        $result = mysqli_query($connection, $query);
        if(!result){
            die("Database query failed");
        }
        echo "<table style='width:80%;border: 1px solid black;margin-left:auto;margin-right:auto' id='equivcoursetable'>";
        echo "<tr>";
        echo "<th>University Name</th>";
        echo "<th>Course Code</th>";
        echo "<th>Course Name</th>";
        echo "<th>Weight</th>";
        echo "<th>Date Decided</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["officialName"] . "</td>";
            echo "<td>" . $row["courseCode"] . "</td>";
            echo "<td>" . $row["courseName"] . "</td>";
            echo "<td>" . $row["weight"] . "</td>";
            echo "<td>" . $row["dateDecided"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($result);
        mysqli_close($connection);
    ?>
</body>
</html>