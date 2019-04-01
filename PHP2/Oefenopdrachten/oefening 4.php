<?php
echo plus(10);
function plus($aantal){
    $rij = "";
    for ($huidigaantal = 0; $huidigaantal < $aantal; $huidigaantal++) {
        for ($aantalplus = 0; $aantalplus < $aantal; $aantalplus++) {
            $rij = $rij . "+";

        }
        $rij = $rij . "<br>";
    }
    return $rij;
}

?>



