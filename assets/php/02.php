<?php

if(empty($_POST['format']) || empty($_POST['year']) || !isset($_POST['yearP'])
		|| empty($_POST['month']) || !isset($_POST['monthP'])
		|| empty($_POST['day']) || !isset($_POST['dayP'])
		|| empty($_POST['hour']) || !isset($_POST['hourP'])
		|| empty($_POST['min']) || !isset($_POST['minP'])
		|| empty($_POST['sec']) || !isset($_POST['secP'])){
	die('Invalid input');
}

$format = $_POST['format'];
$year = $_POST['year'] + $_POST['yearP'];
$month = $_POST['month'] + $_POST['monthP'];
$day = $_POST['day'] + $_POST['dayP'];
$hour = $_POST['hour'] + $_POST['hourP'];
$min = $_POST['min'] + $_POST['minP'];
$sec = $_POST['sec'] + $_POST['secP'];

$result = date($format, mktime($hour, $min, $sec, $month, $day, $year));

echo $result;