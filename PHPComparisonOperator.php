<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 100;  
            $y = "100";
            $z = 50;
            var_dump($x == $y);
            echo "<br/>";
            var_dump($x === $y);
            echo "<br/>";
            var_dump($x != $y);
            echo "<br/>";
            var_dump($x <> $y);
            echo "<br/>";
            var_dump($x !== $y);
            echo "<br/>";
            var_dump($x > $z);
            echo "<br/>";
            var_dump($x < $z);
            echo "<br/>";
            var_dump($x >= $z);
            echo "<br/>";
            var_dump($x <= $z);
            echo "<br/>";
            var_dump($x <=> $z);
        ?>
    </body>
</html>