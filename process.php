<html>
    <head>De o fora daqui</head>
<body>
    
<?php
    $i = 1;
    
    $name = $_POST["nomes"];
    echo "AGORA! " . $name;
    
    while( $i <= 12) {
        $value = $i * 12;
        echo "$i times 12 is $value";
        $i++ ;
    }
?>
    
</body>    
</html>