<?php

$num = $_REQUEST ['prime_number'];
$prime =0;

for($i = 2; $i <$num; $i++){
    if($num % $i == 0){
        $prime = 1;
    }
}

if($prime == 0){
    echo "<h1>This is prime number</h1>";
}else{
    echo " <h1>This is not prime number</h1>";
}