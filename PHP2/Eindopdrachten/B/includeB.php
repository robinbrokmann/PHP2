<?php

function checkValue($invoer, $type){
    switch($type){
        case "alfabetisch":
           return checkalfabetisch ($invoer);
        case "numeriek":
            return checkNummeriek($invoer);
        case "postcodecheck":
            return Checkpostcode ($invoer);

    }
}

function checkalfabetisch($invoer){
    return preg_match("/^[a-z,A-Z]*$/", $invoer);
}
function checkNummeriek($invoer){
    return preg_match("/^[0-9]*$/", $invoer);
}
function checkpostcode($invoer){
    return preg_match('/^[1-9][0-9]{3} ?[a-zA-Z]{2}$/', $invoer);

}