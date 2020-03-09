<html>
    <head>
        <title>PHP functions</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <?php
            function factorial($n){
                $number = $n;
                $result = 1;

                while($number > 1){
                    $result = $result * $number;
                    $number--;
                }
            return $result;
            }
        ?>
    </body>
</html>