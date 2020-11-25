<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UNIVERSITY'S</title>
    <script src="sortUniTable.js"></script>
</head>
<body>
    <!-- Basic header details -->
    <h1>UWO Computer Science</h1>
    <h2>University's</h2>
    <?php
        include '../header.php';
        include '../connectdb.php';
    ?>
    <hr>
    <br>

    <!-- Get all information on other university's -->
    <?php
        $query = "SELECT * FROM university ORDER BY provinceCode";
        $result = mysqli_query($connection, $query);
        if(!result){
            die("Database query failed");
        }
        echo "<table style='width:100%; border: 1px solid black' id='table'>";
        echo "<tr>";
        echo "<th>Uni ID</th>";
        echo "<th><button id='officialname' onclick='check_direction(1)'>Official Name</button></th>";
        echo "<th>City</th>";
        echo "<th><button id='province' onclick='check_direction(3)'>Province</button></th>";
        echo "<th>Nickname</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["uniId"] . "</td>";

            // Reroute to the individual university details page when user clicks university name
            echo "<td>" . "<form action='individualuni.php' method='post'>";
                echo "<button type='submit' name='officialName' value='" . $row["officialName"] . "'>" . $row["officialName"] . "</button>";
                echo "<input type='hidden' name='uniId' value='" . $row["uniId"] . "'>";
                echo "<input type='hidden' name='city' value='" . $row["city"] . "'>";
                echo "<input type='hidden' name='provinceCode' value='" . $row["provinceCode"] . "'>";
                echo "<input type='hidden' name='nickname' value='" . $row["nickname"] . "'>";
            echo "</form>" . "</td>";
            echo "<td>" . $row["city"] . "</td>";

            // Reroute to university by province page when university clicks province
            echo "<td>" . "<form action='provincecode.php' method='post'>";
                echo "<button type='submit' name='provinceCode' value='" . $row["provinceCode"] . "'>" . $row["provinceCode"] . "</button>";
            echo "</form>" . "</td>";
            echo "<td>" . $row["nickname"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
        mysqli_close($connection);
    ?>
</body>
</html>