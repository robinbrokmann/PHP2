<?php
echo plus ();

function plus() {
    $rij = "";
    for ($aantal = 0; $aantal < 5; $aantal++){
        $rij = $rij . "+++++<br>";
    }
return $rij;
}

?>