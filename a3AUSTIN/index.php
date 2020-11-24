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
        <div class='innerContainer' style='display: inline-block;'>
            <form action="uwo/getuwocourses.php" method ="post">
                <input type="submit" value="Get UWO Courses">
            </form>
        </div>
        <div class='innerContainer' style='display: inline-block;'>
            <form action="university/getuniversitys.php" method ="post">
                <input type="submit" value="Get University's">
            </form>
        </div>
        <div class='innerContainer' style='display: inline-block;'>
            <form action="equiv/equivalencebydate.php" method='post'>
                <select name='year'>

                    <?php
                        $i = 0;
                        $year = date("Y");
                        echo "<option value='" . $year . "'>" . $year . "</option>";
                        while($i != 30){
                            echo "<option value='" . $year-$i . "'>" . $year-$i . "</option>";
                            $i++;
                        }
                    ?>
                </select>
                <button>Submit Date</button>
            </form>
        </div>
    </div>
    <?php
        mysqli_close($connection);
    ?>
</body>
</html>