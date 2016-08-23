<?php
$text = isset($_POST["text"]) ? $_POST["text"]: false;
$tag = isset($_POST["tag"]) ? $_POST["tag"]: false;
$statement = isset($_POST["statement"]) ? $_POST["statement"]: false;
preg_match_all('/\w*is\w*/', $text, $result[0]);
$result[0] = "Words containing 'is': " . implode(', ', $result[0][0]);
preg_match_all('/\w*thing/', $text, $result[1]);
$result[1] = "Words ending with 'thing': " . implode(', ', $result[1][0]);
preg_match_all('/[A-z]+/', $text, $result[2]);
$result[2] = "Valid words: " . implode(', ', $result[2][0]);
preg_match_all('/\s?[A-Z][a-z\s]*[.?!]/', $text, $result[3]);
$result[3] = "Valid sentances: " . implode(', ', $result[3][0]);
preg_match_all("/((\+359|0)[\-\s]?8[7-9]\d[\-\/\s\\\s]?\d\d[\-\s]?\d[\-\s]?\d[\-\s]?\d\d)/", $text, $result[4]);
$result[4] = "Valid BG Phone number: " . implode(', ', $result[4][0]);
preg_match_all('/<[^>]+>(.|\n)*<\/[^>]+>/', $tag, $result[5]);
$result[5] = "Valid HTML tags: " . implode(', ', $result[5][0]);
preg_match_all('/<\?(=|php).*\?>/', $text, $result[6]);
$result[6] = "Valid PHP statements (You can see them in the Console - F12): " . implode(', ', $result[6][0]);
preg_match_all('/Ivan [A-Z]\w+/', $text, $result[7]);
$result[7] = "People with name Ivan: " . implode(', ', $result[7][0]);
preg_match_all('/CT\s?\d{4}\s?\w{2}/', $text, $result[8]);
$result[8] = "Cars with CT registration: " . implode(', ', $result[8][0]);
preg_match_all('/[a-zA-Z0-9_.+-]+@gmail.com/', $text, $result[9]);
$result[9] = "gmail e-mails: " . implode(', ', $result[9][0]);
preg_match_all('/[a-zA-Z0-9_.+-]+@(gmail.com|yahoo.com|abv.bg)/', $text, $result[10]);
$result[10] = "gmail, yahoo, abv e-mails: " . implode(', ', $result[10][0]);
preg_match_all('/(\s|\-|:)1?[1-9][1-9][1-9][1-9]/', $text, $result[11]);
$result[11] = "Numbers between 1000 and 19000: " . implode(', ', $result[11][0]);
preg_match_all('/\.[^0-9].*\{[^\}]*\}/', $tag, $result[12]);
$result[12] = "Valid CSS classes: " . implode(', ', $result[12][0]);
preg_match_all('/while\([^\{]+\)\s?\{/', $text, $result[13]);
$result[13] = "Beginings of a while cycle: " . implode(', ', $result[13][0]);
preg_match_all('/SELECT (\*\sFROM\s\w+;|\w+,\w+\sFROM\s\w+;)/', $text, $result[14]);
$result[14] = "Valid SQL SELECTs: " . implode(', ', $result[14][0]);
echo json_encode($result);