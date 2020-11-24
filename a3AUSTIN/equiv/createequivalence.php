<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>CREATE EQUIVALENCE</title>
</head>
<body>
    <h1>UWO Computer Science</h1>
    <h2>Add Equivalence</h2>
    <?php
        include '../connectdb.php';
        include '../header.php';
        echo "<hr><br>";
        $uwoCourse = $_POST["uwoCourse"];
        $outsideCourse = $_POST["outsideCourse"];
        $uniId = $_POST["university"];
        $date = $_POST["year"] . "-" . $_POST["month"] . "-" . $_POST["day"];
        $query = "INSERT INTO equivalence VALUES('$uwoCourse', '$outsideCourse', '$uniId', '$date')";
        if(!mysqli_query($connection, $query)){
            echo "<h1>Add Error!</h1>";
        echo mysqli_error($connection);
        }
    ?>
</body>
</html>