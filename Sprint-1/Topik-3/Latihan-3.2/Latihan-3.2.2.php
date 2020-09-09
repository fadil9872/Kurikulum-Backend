<?php
    $n=9;
    for($i=0; $i<$n; $i++){
        for($j=$n-1; $j>=0; $j--){
            // echo "(".$i.", ".$j.") ";
            if($i<$j){
                echo "- ";
            }else{
                echo "+ ";
            }
        }
        echo "\n";
    }
?>