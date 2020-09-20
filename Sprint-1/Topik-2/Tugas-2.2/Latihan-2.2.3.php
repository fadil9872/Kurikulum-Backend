<?php
    echo "Inputkan Suhu Celsius yang ingin dikonversi : ";
    $celsius = trim(fgets(STDIN));

    echo "1. Kelvin \n2. Fahrenhiet \n3.Reaumur \n";
    echo "Pilih konversi : ";
    $pilih = trim(fgets(STDIN));
    switch($pilih){
        case 1 : 
            $hasil = $celsius+273;
            echo "Konver Celsius = ".$celsius." ke Kelvin = ".$hasil."\n"; 
            break;
        case 2 : 
            $hasil = ((9/5)*$celsius)+32; 
            echo "Konver Celsius = ".$celsius." ke Fahrenhiet = ".$hasil."\n";
            break;
        case 3 : 
            $hasil = (4/5)*$celsius;
            echo "Konver Celsius = ".$celsius." ke Reaumur = ".$hasil."\n"; 
            break;
    }

    
?>