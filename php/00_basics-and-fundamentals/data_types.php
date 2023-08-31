<?php
include '../utils/file_list.php';
generateFileList();

$string = "<h1>Hello students, do you like the class?</h1>";

echo strlen($string) . " characters";
echo "<br>";

echo strtoupper($string);
echo "<br>";

echo strtolower($string);
echo "<br>";