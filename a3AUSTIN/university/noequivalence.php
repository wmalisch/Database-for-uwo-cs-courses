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
        include '../header.php';
        include '../connectdb.php';
    ?>
    <hr>
    <br>
    <?php 
        $query = "SELECT DISTINCT officialName, nickname FROM university, equivalence WHERE university.uniId NOT IN (SELECT equivalence.uniId FROM equivalence);";
        $result = mysqli_query($connection,$query);
        if(!result){
            die("Database query failed");
        }
        mysqli_free_result($result);
        mysqli_close($connection);
    ?>
</body>
</html>