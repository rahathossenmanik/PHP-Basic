<!DOCTYPE html>
<html>
    <body>
        <?php
            $myfile = fopen("WebDictionary.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("webdictionary.txt"));
            fclose($myfile);
        ?>
    </body>
</html>