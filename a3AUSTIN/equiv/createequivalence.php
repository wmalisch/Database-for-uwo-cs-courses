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
            $query = "UPDATE equivalence SET dateDecided='$date' WHERE courseNumber='$uwoCourse' AND courseCode='$outsideCourse';";
            if(!mysqliquery($connection,$query)){
                echo "<h1>Error, please try another entry.</h1>";
                echo "<form action='../index.php' method='post'>";
                echo "<input type='submit' value='Retry Entering Value'>";
                echo"</form>";
                die("Error while trying to update UWO course " . mysqli_error($connection));
            }
            echo "<h3>Looks like these two courses are already equivalent.</h3>";
            echo "<h3>The date has been updated. Click the button below to be routed home. From there you can go check the equivalence page.</h3>";
            echo "<form action='../index.php' method='post'>";
            echo "<input type='submit' value='Home'>";
            echo"</form>";
            mysqli_close($connection);
            die("Updated equivalence");
        }
        
        

    ?>
</body>
</html>