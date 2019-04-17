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
        case "manvrouw":
            return manvrouwcheck ($invoer);
        case "mail":
            return mailcheck ($invoer);
        case "adres":
            return adrescheck ($invoer);
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
    return preg_match("/^(((\\+31|0|0031)6){1}[1-9]{1}[0-9]{7})$/", $invoer);
    }
    function manvrouwcheck($invoer){
    return preg_match("/([male|female][man|vrouw])/i",$invoer);
    }
function mailcheck($invoer){
    return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$invoer);
    }
function adrescheck($invoer){
    return preg_match("/^([1-9][e][\s])*([a-zA-Z]+(([\.][\s])|([\s]))?)+[1-9][0-9]*(([-][1-9][0-9]*)|([\s]?[a-zA-Z]+))?$/",$invoer);
}
?>