<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UNIVERSITY'S</title>
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
        while($row = mysqli_fetch_assoc($result)){
            echo "<li>";
            echo $row["uniId"] . " " . $row["officialName"] . " " . $row["city"] . " " . $row["provinceCode"] . " " . $row["nickname"];
            echo "</li>";
        }
    ?>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>