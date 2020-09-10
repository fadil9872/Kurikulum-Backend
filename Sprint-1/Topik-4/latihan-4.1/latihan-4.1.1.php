<?php
    // $bil = [5,9,6,7,9,8,10,7,8];
    echo "Ingin input berapa angka ? ";
    $input = trim(fgets(STDIN));
    $bil = array();
    for($i=0;$i<$input; $i++){
        echo "Nilai ke-".$i.": "; 
        array_push($bil,trim(fgets(STDIN)));
    }
    echo "Niali ";
    foreach ($bil as $key => $value) {
        echo "{$value}";
    };

    echo "\n";
    
    
    $sum = 0;
    for($i=0;$i<count($bil);$i++){
        $sum += $bil[$i];
    }

    $mean = $sum/count($bil);
    echo "Nilai Mean : ".$mean."\n";
        
    $modus = array_count_values($bil);
    foreach($modus as $key => $value){
        if($value == max($modus)){
        echo "Nilai terbanyak : {$key} frekuensi {$value}\n";
        }
    }

    sort($bil);
    $median = count($bil)/2;
    if(is_double($median)){
        $hasil = floor($median);
        echo "Nilai Median : ".$bil[$hasil]."\n";
    }else{
        $hasil = ($bil[$median-1]+$bil[$median])/2;
        echo "Nilai Median : ".$hasil."\n";
    }
    
?>