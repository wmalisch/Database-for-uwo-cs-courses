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

        echo "<h1>" . $_POST["outsideCourse"] . "</h1>";
        echo "<h1>" . $_POST["university"] . "</h1>";
        echo "<h1>" . $_POST["year"] . "</h1>";
        echo "<h1>" . $_POST["month"] . "</h1>";
        echo "<h1>" . $_POST["day"] . "</h1>";

    ?>
</body>
</html>