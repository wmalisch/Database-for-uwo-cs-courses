<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <h1>Home Page</h1>
    <h2>UWO CS Courses & Equivalencies</h2>
    <?php
        include 'header.php';
        include 'connectdb.php';
    ?>
    <hr>
    <h3>
        Here you can take a look at UWO courses, other universities, and the other universities courses<br>
    </h3>
    <div id='container' style='width:100%; text-align:center;'>
        <div class='innerContainer' style='display: inline-block; border: 1px solid black;'>
            <form action="uwo/getuwocourses.php" method ="post">
                <input type="submit" value="Get UWO Courses">
            </form>
        </div>
        <div class='innerContainer' style='display: inline-block; border: 1px solid black;'>
            <form action="university/getuniversitys.php" method ="post">
                <input type="submit" value="Get University's">
            </form>
        </div>
        <div class='innerContainer' style='display: inline-block; border: 1px solid black;'>
            <form action="equiv/equivalencebydate.php" method='post'>
                <label>Year: </label>
                <select name='year'>
                    <?php
                        $i = 0;
                        $year = date("Y");
                        echo "<option value='" . $year . "'>" . $year . "</option>";
                        while($i != 30){
                            $year = $year - 1;
                            echo "<option value='" . $year . "'>" . $year . "</option>";
                            $i = $i + 1;
                        }
                    ?>
                </select>
                <label>Month: </label>
                <select name='month'>
                    <?php
                        $i = 1;
                        while($i != 13){
                            echo "<option value='" . $i . "'>" . $i . "</option>";
                            $i = $i + 1;
                        }
                    ?>
                </select>
                <label>Day: </label>
                <select name='day'>
                    <?php
                        $i = 1;
                        while($i != 32){
                            echo "<option value='" . $i . "'>" . $i . "</option>";
                            $i = $i + 1;
                        }
                    ?>
                </select>
                <button>Submit Date</button>
            </form>
        </div>
    </div>
    <br>
    <div id='container' style='width:100%; text-align:center;'>
        <div class='innerContainer' style='display: inline-block; border: 1px solid black;'>
            <form action='equiv/createequivalence.php' method='post'>
                <label>CREATE EQUIVALENCY</label>
                <select name='uwoCourse'>
                    <?php
                        $query = "SELECT courseNumber FROM westernCourses;";
                        $result = mysqli_query($connection, $query);
                        if(!result){
                            die("Database query failed");
                        }
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='" . $row["courseNumber"] . "'>" . $row["courseNumber"] . "</option>";
                        }
                        mysqli_free_result($result);
                    ?>
                </select>
                <select name='outsideCourse'>
                    <?php
                        $query = "SELECT courseCode, nickname FROM outsideCourses, university WHERE outsideCourses.uniId=university.uniId;";
                        $result = mysqli_query($connection, $query);
                        if(!result){
                            die("Database query failed");
                        }
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='" . $row["courseCode"] . "'>" . $row["courseCode"] . "</option>";
                        }
                        mysqli_free_result($result);
                    ?>
                </select>
            </form>
        </div>
    </div>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>