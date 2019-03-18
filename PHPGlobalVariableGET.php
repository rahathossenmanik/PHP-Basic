<!DOCTYPE html>
<html>
    <body>
        <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        	<p>Name: </p>
        	<input type="text" name="fname">
        	<input type="submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_GET['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    </body>
</html>