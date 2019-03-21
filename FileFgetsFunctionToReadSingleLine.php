<!DOCTYPE html>
<html>
    <body>
        <?php
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            fgets($myfile);
            echo fgets($myfile);
            fclose($myfile);
        ?>
    </body>
</html>