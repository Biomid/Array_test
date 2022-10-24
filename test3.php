<?php

$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];

foreach ($arr as $value){
    foreach ($value as $key => $item){
        if ($key !=0 && $key != 'blue'){
        echo " значение - $item <br>";
            }

    }
}

$arr2 = [
    "employee" => "Иванов Иван",
    "phones" => [
        "+7 700 97 38 103",
        "+7 931 961 03 60"
    ],
    "citizenship" => "Kazahstaan",
    "age" => "21",
    "education" => "in process"
];

echo json_encode($arr2, JSON_UNESCAPED_UNICODE);
