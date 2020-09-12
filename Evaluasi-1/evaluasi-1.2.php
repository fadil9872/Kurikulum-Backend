<?php
    $bil = 5956560159466056;
    $arr_bil = explode('0',(string)$bil);
    // print_r($arr_bil);
    foreach($arr_bil as $key => $value){
        $bil2[] = str_split($arr_bil[$key],1);
      
    }
    foreach($bil2 as $key =>$value){
        sort($bil2[$key]);
    }
    $hasil = "";
    for($i=0;$i<count($bil2);$i++){
        for($j=0;$j<count($bil2[$i]);$j++){
            $hasil .= $bil2[$i][$j];
        }
    }
    echo $hasil."\n";

?>