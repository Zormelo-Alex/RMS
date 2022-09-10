<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment three</title>
    <link rel="stylesheet" href="./style.css ?v=<?php time();?>">
</head>
<body>
    <div class="form" data-tilt>
    <?php
    $month = date('m');
    $day = date('d');
    $time = date('h:i A');
    echo "The date is : ". date('l-Y-m-d'). '</br></br>';
    echo "The time is : ". $time. '</br></br>';
    if ($month == 03){
        if($day == 17){
            echo"<b> MERRY CHRISTMASS!!!! </b> <br> <br>";
        }
        
    }else{
        echo"not today bruh";
    }
    if (date('h') > 4){
            echo"<b>Good Evening!!</b>";
    }else if(date('h')>=12 && date('h')>4){
        echo"<b> Good Afternoon!! </b>";
    }else{
        echo"<b> Good Morning!! </b>";
    }


?>

    </div>
     <script src="./vanilla-tilt.js"></script>
</body>
</html>
