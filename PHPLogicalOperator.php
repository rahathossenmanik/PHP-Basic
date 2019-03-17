<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 100;  
            $y = 50;
            if ($x == 100 and $y == 50) {
                echo "Hello world!";
            	echo "<br/>";
            }
            if ($x == 100 or $y == 100) {
                echo "Hello world!";
            	echo "<br/>";
            }
            if ($x == 100 xor $y == 100) {
                echo "Hello world!";
            	echo "<br/>";
            }
            if ($x == 100 && $y == 50) {
                echo "Hello world!";
            	echo "<br/>";
            }
            if ($x == 100 || $y == 100) {
                echo "Hello world!";
            	echo "<br/>";
            }
            if ($x != 50) {
                echo "Hello world!";
            	echo "<br/>";
            }
        ?>
    </body>
</html>