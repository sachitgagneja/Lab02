<html>
    <head>
        <title>PHP functions</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <?php 
        $year = $_GET["qYear"];

        if ($year % 4 == 0){
            if ($year % 100 != 0){
                echo "Leap Year";
            }
            else if ($year % 100 == 0 && $year % 400 == 0){
                echo "Leap Year";
            }
            else{
                echo "Standard Year";
            }
        }
        ?>
    </body>
</html>