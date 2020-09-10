<?php
    $bil = [5,9,6,7,9,8,10,7];
    // echo "Ingin input berapa angka ? ";
    // $input = trim(fgets(STDIN));
    // $bil = array();
    // for($i=0;$i<$input; $i++){
    //     echo "Nilai ke-".$i.": "; 
    //     array_push($bil,trim(fgets(STDIN)));
    // }
    echo "Niali ";
    foreach ($bil as $key => $value) {
        echo "{$value}";
    };
    echo "\n1. Mean \n2. Modus \n3. Median \n";
    echo "Pilih menu : ";
    $pilih = trim(fgets(STDIN));
    
    switch ($pilih) {
        case 1:
            $sum = 0;
            for($i=0;$i<count($bil);$i++){
                $sum += $bil[$i];
            }
            $mean = $sum/count($bil);
            echo $mean."\n";
            break;
        case 2:
            $modus = array_count_values($bil);
            foreach($modus as $key => $value){
                if($value == max($modus)){
                    echo "Nilai terbanyak :{$key} frekuensi {$value}\n";
                }
            }
            break;
        default:
            sort($bil);
            print_r($bil);
            $median = count($bil)/2;
            if(is_double($median)){
                $hasil = floor($median);
                echo $bil[$hasil]."\n";
            }else{
                
                $hasil = ($bil[$median-1]+$bil[$median])/2;
                echo $hasil."\n";
            }
            break;
    }
    
?>