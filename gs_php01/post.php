<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$profession = $_POST['profession'];
$birthPlace = $_POST['birthPlace'];
$fun = $_POST['fun'];

$array = $name . ',' . $mail . ',' . $profession . ',' . $birthPlace . ',' . $fun. "\n";

$file = fopen('./data/data.csv','a');
fwrite($file,$array);
fclose($file);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?php echo $name ?></p>
    E-mail：<?php echo $mail ?></p>
    職業：<?php echo $profession ?></p>
    出身：<?php echo $birthPlace ?></p>
    趣味：<?php echo $fun ?></p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>