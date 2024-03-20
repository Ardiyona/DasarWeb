<!DOCTYPE html>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
            Name: <input type="text" name="fname">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_REQUEST['fname'];
                if (empty($name)) {
                    echo "name is empty";
                }
                else {
                    echo $name;
                }
            }
        ?>
    </body>
</html>