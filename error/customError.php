<html>
    <style>
        .notice { color: yellow; }
        .warning { color: red; }
    </style>
    <body>
        <?php
        set_error_handler(myError);
        error_reporting(E_ALL);
        echo $test;
        echo 1/0;
        
        function myError($errno, $errstr, $errfile, $errline) {
            switch ($errno) {
                case E_NOTICE:
                    echo "<span class='notice'>$errstr</span>";
                    break;
                case E_WARNING:
                    echo "<span class='warning'>$errstr</span>";
                    break;
                default:
                    echo "An error occurred: $errstr";
                    break;
            }
            return true; // Prevent default error handler from being called
        }
        ?>
    </body>
</html>
