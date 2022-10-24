<?php
$arr = json_decode($_POST['json'], true);
$name = trim(join(" ", $arr));

$result = "Hello";
if (!empty($result))
    $result .= ", $name";
$result .= "!";

echo htmlspecialchars($result);
