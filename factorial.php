<html>
    <head>
        <title>PHP functions</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <?php include 'mathfunctions.php';
        $number = $_GET["numberinput"];
        if(is_int($number) && $number > 0){
            echo "Factorial of number is :",factorial($number);
        }
        else{
            echo "Enter Valid Number.";
        }
        
        ?>
    </body>
</html>