<?php
    $query = "SELECT * FROM westernCourses";
    $result = mysqli_query($connection, $query);
    if(!result){
        die("Database query failed");
    }
    while($row = mysqli_fetch_assoc($result)){
        var_dump($row);
        echo $row . "br";
    }
    mysqli_free_result($result);
?>