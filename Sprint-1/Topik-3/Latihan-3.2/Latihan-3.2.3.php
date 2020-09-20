<?php
    $n=9;
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            // echo "(".$i.",".$j.") ";
            if($i==$j || ($i+$j)==$n-1 || ($i+$j)<$n-1&&$i<$j || ($i+$j)>$n-1&&$i>$j){
                echo "+ ";
            }else{
                echo "- ";
            }
            
        }
        echo "\n";
    }
?>