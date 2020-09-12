<?php
    //Menampilkan pola

    for($i=0; $i<9; $i++){
        for($j=0;$j<9; $j++){
            // echo "($i,$j)";
            if($j%2 == 0){
                echo "+ ";
            }else{
                echo "- ";
            }
        }
        echo "\n";
    }
    echo "\n";
    echo "\n";
    for($i=0; $i<9; $i++){
        for($j=0; $j<9; $j++){
            if($i%2 == 0){
                echo "+ ";

            }else{
                echo "- ";
            }
        }
        echo "\n";
    }

?>