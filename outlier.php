<?php
    $even = [2, 4, 6, 8, 10, 12, 14, 2091];
    $odd = [1, 3, 5, 7, 9, 11, 13, 4720];
    
    function find_outlier($x){
        // echo count($x);
        if (array_sum($x) % 2 != 0 && count($x) % 2 != 0){
            foreach ($x as $x) {
                if ($x % 2 != 0){
                    return $x;
                }
            }
        }elseif (array_sum($x) % 2 != 0 and count($x) % 2 == 0){
            foreach ($x as $x) {
                if ($x % 2 != 0){
                    return $x;
                }
            }
        }
        elseif (array_sum($x) % 2 == 0 and count($x) % 2 != 0){
            foreach ($x as $x) {
                if ($x % 2 == 0){
                    return $x;
                }
            }
        }
        elseif (array_sum($x) % 2 == 0 and count($x) % 2 == 0){
            foreach ($x as $x) {
                if ($x % 2 == 0){
                    return $x;
                }
            }
        }
    }
    
    echo find_outlier($even);
    echo find_outlier($odd);
?>