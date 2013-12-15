<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>assignment 4 D.Alcorn</title>
    </head>
    <body>
        <?php

        function __autoload($class) {
            include $class . '.php';
        }

        static $password = 'baloney_sandwich';

        function takeOverTheWorld($password) {
            if ($password == 'baloney_sandwich') {
                echo 'Congratulations, you have taken over the world.';
            } else {
                throw new My_Exception('English', 4);
            }
        }

        try {
            takeOverTheWorld('baloney');
        } catch (My_Exception $e) {
            echo '<br/>';
            echo '<i>Custom exception caught.</i>';
        }
        ?>

    </body>
</html>
