<?php
    $celsius = 34;

    $kelvin = $celsius+273;
    $fahrenheit = ((9/5)*$celsius)+32;
    $reaumur = (4/5)*$celsius;

    echo "Suhu Celsius : ".$celsius;
    echo "<br>";
    echo "Konversi ke Kelvin : ".$kelvin;
    echo "<br>";
    echo "Konversi ke Fahrenheit : ".$fahrenheit;
    echo "<br>";
    echo "Konversi ke Reaumur : ".$reaumur;
?>