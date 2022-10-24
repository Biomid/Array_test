<?php

function square($value){
    yield $value * $value;
}

function even_squere($arr){
    foreach ($arr as $val){
        if ($val % 2 == 0) yield from square($val);
    }
}

$array = [];

for ($i = 0; $i < 10; $i++){
    $array[] = rand(1,12);
    echo "{val i = $i }".$array[$i]."<br>";
}

$result = even_squere($array);

foreach ($result as $val) echo "$val"."<br>";
