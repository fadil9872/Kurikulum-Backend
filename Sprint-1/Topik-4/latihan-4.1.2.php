<?php
    // $bil = [5,9,6,7,9,8,10,7,8];
    echo "Ingin input berapa angka ? ";
    $input = trim(fgets(STDIN));
    $bil = array();
    for($i=0;$i<$input; $i++){
        echo "Nilai ke-".$i.": "; 
        array_push($bil,trim(fgets(STDIN)));
    }
    $max = max($bil);
    $min = min($bil);

    echo "Nilai Maksimal = ".$max.", Nilai Minimal = ".$min."\n";
?>