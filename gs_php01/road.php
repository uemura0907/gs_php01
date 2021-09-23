<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表</title>
</head>
<body>
<?php
$filename = './data/data.csv';
$file =fopen($filename,"r");
if( ($fp = fopen('./data/data.csv',"r"))=== false ){
	die("CSVファイル読み込みエラー");
}
?>

<table id="table">
<tr>
	<td>名前</td>
	<td>メール</td>
	<td>職業</td>
	<td>出身</td>
	<td>趣味</td>
</tr>

<?php
while (!feof($file)) {
	$csv = fgets($file);
	$str = explode(",",$csv);
	?>
<tr>
<td><? echo $str[0];?></td>
<td><? echo $str[1];?></td>
<td><? echo $str[2];?></td>
<td><? echo $str[3];?></td>
<td><? echo $str[4];?></td>
</tr>
<?php
}
 
fclose($file);
?>
 
</table>

