<?php
    function factorial($i) {
        $total = 1;
        for($j=1; $j<=$i; $j++)
           $total = $total * $j;
        return $total;
    }
?>