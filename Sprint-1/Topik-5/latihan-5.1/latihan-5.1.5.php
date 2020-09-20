<?php
    function multiple($nilai){
        foreach($nilai as $key => $value){
            $nilai[$key]*=3;
        }
        return $nilai;
    }
    echo "Inputkan banyak data : ";
    $input = trim(fgets(STDIN));

    for($i=1; $i<=$input; $i++){
        echo "Input data ke-".$i." : ";
        $arr[] = trim(fgets(STDIN));
    }
    // $bil= [2,3,4,5,6,7,8,9];

    print_r($arr);
    $hasil = multiple($arr);
    print_r($hasil);
    
?>