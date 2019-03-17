<!DOCTYPE html>
<html>
    <body>
        <?php
            echo $status = (empty($user)) ? "anonymous" : "logged in";
            echo("<br>");
            $user = "John Doe";
            echo $status = (empty($user)) ? "anonymous" : "logged in";
            echo "<br/>", "<br/>";
            echo $user = $_GET["user"] ?? "anonymous";
            echo("<br>");
            echo $color = $color ?? "red";
        ?>
    </body>
</html>