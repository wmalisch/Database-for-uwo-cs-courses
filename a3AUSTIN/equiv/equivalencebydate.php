<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UWO EQUIVALENCES</title>
</head>
<body>
    <h1>UWO Equivalent Courses</h1>
    <?php

        // Basic setup and header details
        $date = $_POST["year"] . "-" . $_POST["month"] . "-" . $_POST["day"];
        echo "<h2>Courses marked equivalent after" . $date .  "</h2>";
        include '../header.php';
        include '../connectdb.php';
        echo "<hr><br>";
        $query =  "SELECT W.courseNumber, W.courseName, W.weight, officialName, O.courseName, E.courseCode, O.weight, dateDecided FROM westernCourses AS W, outsideCourses AS O, equivalence AS E, university AS U WHERE E.courseNumber=W.courseNumber AND E.courseCode=O.courseCode AND E.uniId=O.uniId AND O.uniId=U.uniId AND E.uniId=U.uniId AND dateDecided<='$date';";
        $result = mysqli_query($connection, $query);
        if(!result){
            die("Database query failed");
        }

        // Details on the equivalences later than the inputted date
        echo "<table style='width:100%; border: 1px solid black' id='equivtable'>";
        echo "<tr>";
        echo "<th>UWO Course Number</th>";
        echo "<th>UWO Course Name</th>";
        echo "<th>UWO Weight</th>";
        echo "<th>Equiv. University Name</th>";
        echo "<th>Equiv. Course Name</th>";
        echo "<th>Equiv. Course Code</th>";
        echo "<th>Equiv. Weight</th>";
        echo "<th>Date Decided for Equiv.</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
                echo "<td>" . $row["courseNumber"] . "</td>";
                echo "<td>" . $row["courseName"] . "</td>";
                echo "<td>" . $row["weight"] . "</td>";
                echo "<td>" . $row["officialName"] . "</td>";
                echo "<td>" . $row["courseName"] . "</td>";
                echo "<td>" . $row["courseCode"] . "</td>";
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