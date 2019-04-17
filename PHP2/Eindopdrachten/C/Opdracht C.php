<?php

function Fibonacci($nummer){
// genereert de eerste twe nummers
    if ($nummer == 0)
        return 0;
    else if ($nummer == 1)
        return 1;

    // methode om de volgende nummers op te halen

    else
        return (Fibonacci($nummer-1) +
            Fibonacci($nummer-2));
}

$nummer = 10;
for ($counter = 0; $counter < $nummer; $counter++){
    echo Fibonacci($counter),'<br>';
}
?>