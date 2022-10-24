<?php

function up_degree($arr, $callback){
    foreach ($arr as $value){
        yield $callback($value);
    }
}

$arr = [1, 5, 2, 6, 8, 12];

$collect = up_degree($arr, function ($e){return $e*$e;});
foreach ($collect as $val) echo "$val ";

$array = array();
for ($i = 0; $i < 10; $i++) {
    $array[]=rand(1,10);
    echo "{val i = $i }".$array[$i]."<br>";
}

function select($arr, $callback){
    foreach ($arr as $value){
        if ($callback($value)) yield $value;
    }
}

$select = select($array, function ($e){return $e % 2 == 0 ? true : false;});

//foreach ($select as $val) echo "$val ";

$test = up_degree($select, function ($e){echo $e*$e;});

foreach ($test as $val) echo "$val ";