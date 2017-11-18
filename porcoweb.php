<!DOCTYPE HTML>
<html>
<body>

<h1>Pigweb<h1>
<h2>ainda em construção</h2>

<h3>nomes aleatorios</h3>
<h3>jose</h3>
<h3>josias</h3>
<h3>josicreyton</h3>

<?php

    $number1 = 120;
    $number2 = 125;
    $number3 = 130;
    $sum = $number1 + $number3 + $number2;
    echo "resultado " . $sum;
    $loggedin = true;
    if ($loggedin = true) {
        echo "welcome";
    } else {
        echo "please, get out";
    }
    $numbers = array();

    for($i = 0 ; $i < 10000 ; $i++)
    {
        $numbers[] = "batato";
    }
    
    print_r($numbers);


?>

</body>
</html>