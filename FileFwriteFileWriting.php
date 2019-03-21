<!DOCTYPE html>
<html>
    <body>
        <?php
            $myfile = fopen("MyName.txt", "w") or die("Unable to open file!");
            $txt = "Manik Hosen\n";
            fwrite($myfile, $txt);
            $txt = "Manik Hosen\n";
            fwrite($myfile, $txt);
            fclose($myfile);
        ?>
    </body>
</html>