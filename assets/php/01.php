<?php

$year = isset($_POST["year"]) ? $_POST["year"]: false;
$month = isset($_POST['month']) ? $_POST['month']: false;
$day = isset($_POST['day']) ? intval($_POST['day']) : false;

if (!($year && $month && $day)){
	die("Fill all inpput fields");
}

$y = strlen($year) > 2 ? "Y" : "y";
$m = strlen($month) == 2 ? "m" : (strlen($month) > 2 ? "F" : "n");
$d = strlen($day) == 2 ? "d" : "j";
$str = "$day-$month-$year";
$strtotime = strtotime($str);
$time = date("$d-$m-$y", $strtotime);

if($time == $str) {
	echo "Valid!";
} else {
	echo "Invalid!";
}