<?php
include '../utils/file_list.php';
generateFileList();
echo "<h1>Hello Php</h1>";


$greet = "Hello";
$toWho = "World";

echo "<h3>Php says " . $greet . " " . $toWho . "</h3>";


echo "<h3>Arrays</h3>";

$numberList = array('<h4>Hello Php Arrays</h4>', 23, 50, 55, 100, 15, 456, 213, );
echo $numberList[0];

$associativeArray = array(
  "first_name" => 'Paul',
  "last_name" => 'Serban'
);

echo $associativeArray['first_name'] . " " . $associativeArray['last_name'];