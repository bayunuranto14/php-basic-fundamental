<?php
$global = 3;

function myFunction(){
    $local = 5;
    echo "Variable local scope a didalam adalah : $local";
    echo "\n";
}
myFunction();

echo "Variable global scope a adalah : $global";
?>