<?php
    $query = "SELECT * FROM westernCourses";
    $result = mysqli_query($connection, $query);
    if(!result){
        die("Database query failed");
    }
    while($row = mysqli_fetch_assoc($result)){
        echo "<li>";
        echo $row["courseNumber"] . "</li>";
    }
    mysqli_free_result($result);
?>