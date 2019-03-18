<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            function setHeight(int $minheight = 50) {
                echo "The height is : $minheight <br>";
            }
            setHeight(350);
            setHeight();
        ?>
    </body>
</html>