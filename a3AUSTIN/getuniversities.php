<?php
    $query = "SELECT * FROM university";
    $result = mysqli_query($connection, $query);
    if(!result){
        die("Database query failed");
    }
    while($row = mysqli_fetch_assoc($result)){
        echo "<li>";
        echo $row[]
    }
?>