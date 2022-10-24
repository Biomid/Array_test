<?php
$goods = ["MAx" => "Zinchenko", "Andrey" => "Ivanov"];
$Items = ["Jeka" => "Jekich", "Alex" => "Lex"];
$all = $goods + $Items;

print_r($all);

$a = ['a' => 10, 'b' => 20];
$b = ['b' => "new?"];

$a = array_merge($a,$b);

print_r($a);

$number = [10,55,69];

for ($i = 0; $i < 10; $i++) {
    foreach ($number as &$v) $v++;
}

echo "Элементы массива: ";
foreach ($number as $res) echo "$res ";