<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>UNIVERSITY BY PROVINCE CODE</title>
    </head>
    <body>
        <?php
            $province = $_POST["provinceCode"];
            
            echo "<h1>University's in " . $province . "</h1>";
            echo "<h2>Name Info</h2>";
            include '../connectdb.php';
            include '../header.php';
            echo "<br>";
            $query = "SELECT * FROM university WHERE provinceCode='$province'";
            $result = mysqli_query($connection, $query);
            if(!result){
                die("Database query failed");
            }
            echo "<table style='width:50%; border: 1px solid black; margin-left:auto; margin-right:auto' id='table'>";
            echo "<tr><th>University Name</th><th>City</th><th>Nickname</th></tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row["officialName"] . "</td>";
                echo "<td>" . $row["city"] . "</td>";
                echo "<td>" . $row["nickname"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($connection);
        ?>
    </body>
</html>