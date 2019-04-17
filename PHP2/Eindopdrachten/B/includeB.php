<?php

function checkValue($invoer, $type){
    switch($type){
        case "alfabetisch":
           return checkalfabetisch ($invoer);
        case "numeriek":
            return checkNummeriek($invoer);
        case "postcodecheck":
            return Checkpostcode ($invoer);
        case "mobielnummer":
            return nummercheck ($invoer);
        case "mail":
            return mailcheck ($invoer);

    }
}

function checkalfabetisch($invoer){
    return preg_match("/^[a-z,A-Z]*$/", $invoer);
}
function checkNummeriek($invoer){
    return preg_match("/^[0-9]*$/", $invoer);
}
function checkpostcode($invoer){
    return preg_match("/^[1-9][0-9]{3} ?[a-zA-Z]{2}$/", $invoer);
}
function nummercheck($invoer){
    return preg_match("/^[0-9]{4,4}\s[0-9]{6,6}/", $invoer);
    }
function mailcheck($invoer){
    return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$invoer);
    }
?>