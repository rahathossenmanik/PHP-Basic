<!DOCTYPE html>
<html>
    <body>
        <?php
            $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            while(!feof($myfile)) {
                echo fgets($myfile);
            }
            fclose($myfile);
        ?>
    </body>
</html>