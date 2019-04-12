<?php
function berekenGetal ($getal1, $getal2, $manier) {
    switch ($manier){
        case 'plus':
            return $getal1 + $getal2;
        case 'min':
            return $getal1 - $getal2;
        case 'delen':
            return $getal1 / $getal2;
        case 'vermenigvuldigen':
            return $getal1 * $getal2;
    }
}
?>