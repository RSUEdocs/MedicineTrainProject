<?php

$mysql = mysqli_connect('localhost','root','','train');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if(!$mysql)
{
	die("AAAAAAAAAAAAAAAAA");
	echo(1111);
}
$query = mysqli_query($mysql,"SELECT * FROM `checkup`");
if(count($checkUps) == 0)
{
	$checkUps=[[0,'мужчина','Скриннинг/nТестестерон/nГлобулин/nLorem',1000,500],[1,'женщина','Скриннинг/nТестестерон/nГлобулин/nLorem',500,250],[2,'Оно','Скриннинг/nТестестерон/nГлобулин/nLorem',250,69]];
	
}


?>