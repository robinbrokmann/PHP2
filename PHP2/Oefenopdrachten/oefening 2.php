<?php
function evendag($x){
    if ($x % 2 == 0){
        echo "true";
    }else {
        echo "false";
    }
}
evendag(date("d"))
?>

 
