<?php
//Возведение в степень
function square($arr, $callback){
    foreach ($arr as $value){
        yield $callback($value);
    }
}

$res = square([2], function ($e){echo $e*$e;});

foreach ($res as $val) echo "$val <br>";


//Проверка года
if (isset($_POST['submit'])) {
    $num = $_POST['number'];

    echo $num . "<br>";

    if ((float)$num %4 == 0){
        echo "Високостный"."<br>";
    }
    else echo "Не високостный";


}
// Произведение всех чётных в массиве
$array1 = array();
for ($i = 0; $i < 10; $i++) {
    $array1[]=rand(1,10);
    echo "{val i = $i }".$array1[$i]."<br>";
}

function Even_multiplication($arr){
    $res = 1;
   for ($i = 0; $i < count($arr); $i++){
       if ($arr[$i] %2 ==0){
           $res *= $arr[$i];
       }

   }
    return $res;

}
$res2 = Even_multiplication($array1);
echo $res2." asfdfdafd";




?>
<html>
<head>
    <title>dsfasdf</title>
</head>
<form action="" method="post">
<input type="number" name="number">
    <input type="submit" name="submit">
</form>

</html>
