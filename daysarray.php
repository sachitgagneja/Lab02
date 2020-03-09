<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Web Development :: Lab 1 /">
        <meta name="keywords" content="Web,development" />
        <title>Days Array</title>
    </head>
    <body>
    <?php
            $days=array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            echo "The days in English are: \n",$days[0],",",$days[1],",",$days[2],",",$days[3],",",$days[4],",",$days[5],",",$days[6],".";
            $days=["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
            echo "\nThe days in French are: \n",$days[0],",",$days[1],",",$days[2],",",$days[3],",",$days[4],",",$days[5],",",$days[6],".";
        ?>
    </body>   
 </html>