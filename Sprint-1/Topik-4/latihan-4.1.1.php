<?php
    $bil = [5,9,6,7,9,8,10,7,8];
    echo "Niali ";
    foreach ($bil as $key => $value) {
        echo "{$value}";
    };
    echo "\n1. Mean \n2. Modus \n3. Median \n";
    echo "Pilih menua : ";
    $pilih = trim(fgets(STDIN));
    
    switch ($pilih) {
        case 1:
            $sum = 0;
            foreach($bil as $key => $value){
                
            }
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
                $hasil1 = floor($median);
                $hasil2 = round($median);

                $median = ($hasil1+$hasil2)/2;
                echo $median;
            }
            break;
    }
    
?>