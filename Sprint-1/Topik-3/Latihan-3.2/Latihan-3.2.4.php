<?php
    $n=9;
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            // echo "(".$i.",".$j.") ";
            if($i==0 || $i==4 || $i==8){
                echo "+ ";
            }
            if($i<4&&$i>0&&$j==0){
                echo "+ ";
            }else if($i<4&&$i>0&&$j!==0){
                echo "- ";
            }
            if($j==8&&$i>4&&$i<8){
                echo "+ ";
            }else if($i>4&&$i<8){
                echo "- ";
            }

        }
        echo "\n";
    }
?>