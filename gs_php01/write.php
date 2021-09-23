<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$profession = $_POST['profession'];
$birthPlace = $_POST['birthPlace'];
$fun = $_POST['fun'];

$array = $name . '/' . $mail . '/' . $profession . '/' . $birthPlace . '/' . $fun. "\n";

$file = fopen('./data/data.csv','a');
fwrite($file,$str);
fclose($file);

?>