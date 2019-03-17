<!DOCTYPE html>
<html>
    <body>
        <?php  
            $x = 5985;
            var_dump($x);
            echo "<br/>";
            var_dump("I Love You");
            echo "<br/>";
            $x = 10.365;
            var_dump($x);
            echo "<br/>";
            $x = true;
            var_dump($x);
            echo "<br/>";
            $cars = array("Volvo", "BMW", 10);
            var_dump($cars);
            echo "<br/>";
            class Car {
                function Car() {
                    $this->model = "BMW";
                }
            }
            $A02X = new Car();
            var_dump($A02X);
            echo "<br/>";
            $x = null;
            var_dump($x);
        ?>
    </body>
</html>