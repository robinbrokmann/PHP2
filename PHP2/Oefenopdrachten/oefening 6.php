<?php
function countchar($string, $char) {


    $counter = 0;

    for($x = 0; $x < strlen($string); $x++) {

        if ($string[$x] == $char) {
            $counter++;
        }
    };

    return $counter;
}
echo "het aantal opgevraagde letters:   ";
echo countchar("dit is een zin gebruikt als een voorbeeld","e");

?>