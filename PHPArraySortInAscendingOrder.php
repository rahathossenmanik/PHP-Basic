<!DOCTYPE html>
<html>
    <body>
        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            sort($cars);
            $numbers = array(4, 6, 2, 22, 11);
            sort($numbers);
            for($x = 0; ($x < count($cars)) or ($x < count($numbers)) ; $x++) {
                if($x < count($cars)) echo $cars[$x];
                echo "<br>";
                if($x < count($numbers)) echo $numbers[$x];
                echo "<br>";
            }
        ?>
    </body>
</html>