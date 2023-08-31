<?php
include '../utils/file_list.php';
generateFileList();

echo "<h1>Functions in Php</h1>";

$a = 555;
$b = 1234;
function calc($x, $y)
{
  echo $x + $y;
  echo "<br>";
}

$text = "hello functions!!";
function say_something($t)
{
  echo "$t <br>";
}

calc($a, $b);
say_something($text);

function returnSomething($e, $f)
{
  $concatenatedText = $e . $f;
  return $concatenatedText;
}

echo returnSomething($b, $text);

echo "Constants";

define("CONSTANT", 1000);
echo CONSTANT;
echo '<br>';
const NEW_CONSTANT = 'new constant';
echo NEW_CONSTANT;