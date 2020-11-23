<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UNIVERSITY'S</title>
    <script src="sortUniTable.js"></script>
</head>
<body>
    <h1>UWO Computer Science</h1>
    <h2>University's</h2>
    <?php
        include 'header.php';
        include 'connectdb.php';
    ?>
    <hr>
    <?php
        $query = "SELECT * FROM university";
        $result = mysqli_query($connection, $query);
        if(!result){
            die("Database query failed");
        }
        echo "<table style='width:100%' id='table'>";
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
            echo "<td>" . "<form action='individualuni.php' method='post'>";
                echo "<button type='submit' name='officialName' value='" . $row["officialName"] . "'>" . $row["officialName"] . "</button>";
            echo "</form>" . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . "<form action='unibyprovince.php' method='post'>";
                echo "<button type='submit' name='provinceCode' value='" . $row["provinceCode"] . "'>" . $row["provinceCode"] . "</button>";
            echo "</form>" . "</td>";
            echo "<td>" . $row["nickname"] . "</td>"
            echo "</tr>";
        }
    ?>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>