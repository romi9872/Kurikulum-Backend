<?php
    $n=9;
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            // echo "(".$i.",".$j.") ";
            if($i<$j){
                echo "- ";
            }else{
                echo "+ ";
            }
        }
        echo "\n";
    }
?>