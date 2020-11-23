<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>INDIVIDUAL UNIVERSITY</title>
    </head>
    <body>
        <?php
            include '../connectdb.php';
            $university = $_POST["officialName"];
            $uniId = $_POST["uniId"];
            $city = $_POST["city"];
            $provinceCode = $_POST["provinceCode"];
            $nickname = $_POST["nickname"];
            echo "<h1>" . $university . " Computer Science</h1>";
            echo "<h2>Course and Basic Uni Information</h2>";
            include '../header.php';
            echo "<hr>";
            echo "<h3>Basic University Information</h3>";
            echo "<table style='width:30%; border: 1px solid black; margin-left:auto; margin-right:auto' id='detailstable'>";
            echo "<tr><th>Detail</th><th>Value</th></tr>";
            echo "<tr><td>University ID</td><td>" . $uniId . "</td></tr>";
            echo "<tr><td>Official Name</td><td>" . $university . "</td></tr>";
            echo "<tr><td>City</td><td>" . $city . "</td></tr>";
            echo "<tr><td>Province Code</td><td>" . $provinceCode . "</td></tr>";
            echo "<tr><td>Nickname</td><td>" . $nickname . "</td></tr>";
            echo "</table>";
            echo "<br>";
            echo "<h3>University Course Information</h3>";
            $query = "SELECT * FROM outsideCourses where uniId='$uniId'";
            $result = mysqli_query($connection, $query);
            if(!result){
                die("Database query failed");
            }
            echo "<table style='width:100%; border: 1px solid black' id='coursetable'>";
            echo "<tr>";
            echo "<th>Course Code</th>";
            echo "<th>Course Name</th>";
            echo "<th>Taken in  Year _</th>";
            echo "<th>Weight</th>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row["courseCode"] . "</td>";
                echo "<td>" . $row["courseName"] . "</td>";
                echo "<td>" . $row["year"] . "</td>";
                echo "<td>" . $row["weight"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br><br>";
            mysqli_close($connection);
        ?>
    </body>
</html>