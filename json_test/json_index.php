<?php

?>

<!DOCTYPE html>

<html lang="ru">
<head>
    <title>Test json-data</title>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="json_index.js"></script>

</head>
<body>
<p id="hello-js">Приветствую</p>
<form action="json_answer.php" method="get">
    <p>Имя: <input type="text" name="name"></p>
    <p>Фамилия: <input type="text" name="family"></p>
    <p>Возраст:<input type="number" name="age"></p>
    <p>Гражданство: <input type="text" name="citizenship"></p>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>