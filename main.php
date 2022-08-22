<?php

function sumAll($val) {

    $result = 0;

    if(!is_integer($val)){
        echo "{$val} não é um número inteiro";
    }

    for($i = 0; $i < $val; $i++){
        if(!($i % 3) || !($i % 5)){
            $result += $i;
        }
    }
    echo $result;
}

sumAll(9);