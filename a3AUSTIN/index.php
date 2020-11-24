<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOME PAGE</title>
    <script src="createEquiv.js"></script>
</head>
<body onload='setDateSetUni()'>
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
                <?php
                    include 'components/dateforsearch.php';
                ?>
                <button>Submit Date</button>
            </form>
        </div>
    </div>
    <br>
    <div id='container' style='width:100%; text-align:center;'>
        <div class='innerContainer' style='display: inline-block; border: 1px solid black;'>
            <form action='equiv/createequivalence.php' method='post'>
                <label>CREATE EQUIVALENCY:</label>
                <select name='uwoCourse'>
                    <?php
                        $query = "SELECT courseNumber FROM westernCourses;";
                        $result = mysqli_query($connection, $query);
                        if(!result){
                            die("Database query failed");
                        }
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='" . $row["courseNumber"] . "'>" . "UWO-" . $row["courseNumber"] . "</option>";
                        }
                        mysqli_free_result($result);
                    ?>
                </select>
                <label> with </label>
                <select id='outsideCourse' name='outsideCourse' onchange='checkUni()'>
                    <?php
                        $query = "SELECT courseCode, nickname, outsideCourses.uniId FROM outsideCourses, university WHERE outsideCourses.uniId=university.uniId;";
                        $result = mysqli_query($connection, $query);
                        if(!result){
                            die("Database query failed");
                        }
                        $i = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option id='" . $i . "' value='" . $row["courseCode"] . "'>" . $row["uniId"] . "-" . $row["nickname"] . "-" . $row["courseCode"] . "</option>";
                            $i++;
                        }
                        mysqli_free_result($result);
                    ?>
                </select>
                <br>
                <?php
                    include 'components/dateforadd.php';
                ?>
                <input id='university' name='university' type='hidden' value=''>
                <br>
                <button>Create</button>
            </form>
        </div>
    </div>
    <br>
    <div id='container' style='width:100%; text-align:center;'>
        <div class='innerContainer' style='display: inline-block; border: 1px solid black;'>
            <form action='university/nocourses.php' method='post'>
                <input type="submit" value="Get Universities with No Equivalences">
            </form>
        </div>
    </div>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>