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