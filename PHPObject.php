<!DOCTYPE html>
<html>
    <body>
        <?php
            class Car {
                function Car() {
                    $this->model = "BMW";
                }
            }
            $A02X = new Car();
            echo $A02X->model;
        ?>
    </body>
</html>