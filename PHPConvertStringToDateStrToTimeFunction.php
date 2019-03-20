<!DOCTYPE html>
<html>
    <body>
        <?php
            $d=strtotime("10:30pm April 15 2014");
            echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
            $d=strtotime("tomorrow");
            echo "Tommorow is " . date("Y-m-d h:i:sa", $d) . "<br>";
            $d=strtotime("next Saturday");
            echo "Next Saturday is " . date("Y-m-d h:i:sa", $d) . "<br>";
            $d=strtotime("+3 Months");
            echo "Day After 3 Months is " . date("Y-m-d h:i:sa", $d) . "<br>";
        ?>
    </body>
</html>