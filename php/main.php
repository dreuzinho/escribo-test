<?php

function sumAll($val) {

    $result = 0;

    for($i = 0; $i < $val; $i++){
        if(!($i % 3) || !($i % 5)){
            $result += $i;
        }
    }
    ?> <b><?php echo $result; ?></b> <?php
}

$value = (int)$_GET["form"];
sumAll($value);

?>