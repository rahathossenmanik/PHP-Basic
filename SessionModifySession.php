<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "yellow";
            $_SESSION["favanimal"] = "rat";
            echo "Session variables are changed.<br/>";
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        ?>
    </body>
</html>