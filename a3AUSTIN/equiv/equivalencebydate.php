<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>UWO EQUIVALENCES</title>
</head>
<body>
    <h1>UWO Equivalent Courses</h1>
    <?php
        $year =$_POST["year"];
        $month =$_POST["month"];
        $day =$_POST["day"];
        $date = $year . "-" . $month . "-" . $day;
        echo "<h2>Courses marked equivalent after" . $date .  "</h2>";
        include '../header.php';
        include '../connectdb.php';
        echo "<hr><br>";
        $query =  "select W.courseNumber, W.courseName, W.weight, officialName, O.courseName, E.courseCode, O.weight, dateDecided from westernCourses as W, outsideCourses as O, equivalence as E, university as U where E.courseNumber=W.courseNumber and E.courseCode=O.courseCode and E.uniId=O.uniId and O.uniId=U.uniId and E.uniId=U.uniId and dateDecided<='';"
    ?>

</body>
</html>