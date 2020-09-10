<?php
    // $bil = [5,9,6,7,9,8,10,7,8];
    echo "Ingin input berapa angka ? ";
    $input = trim(fgets(STDIN));
    $bil = array();
    for($i=0;$i<$input; $i++){
        echo "Nilai ke-".$i.": "; 
        array_push($bil,trim(fgets(STDIN)));
    }
    arsort($bil);
    // print_r($bil);
    $sort = array();
    $i=0;
    foreach($bil as $k => $v){
        $sort[$i]=$v;
        $i++;
    }
    print_r($sort);
    echo "Nilai Max : ";
    for($i=0;$i<3;$i++){
        echo $sort[$i]." ";
    }
    echo "\n";
    echo "Nilai Min : ";
    for($i=count($sort)-1;$i>(count($sort)-4);$i--){
        echo $sort[$i]." ";
    }
    echo "\n";
    // echo "Nilai Maksimal = ".$max.", Nilai Minimal = ".$min."\n";
?>