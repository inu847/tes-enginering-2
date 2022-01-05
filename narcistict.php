<?php
    $num1 = 1634;
    function narcissistic($val)
    {
        
        $strNum1 = (string)$val;
        $lengthNum1 = strlen($val);
        $resultsNum1 = 0;
        for ($i=0; $i < $lengthNum1; $i++) {
            $resultsNum1 += pow((int)$strNum1[$i], $lengthNum1);
        }
        return true;
    } 
    echo narcissistic($num1);
?>