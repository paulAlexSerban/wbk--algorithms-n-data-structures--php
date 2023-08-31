<?php
include '../utils/file_list.php';
generateFileList();

echo "<h1>if Statements</h1>";
$a = 3;
$b = 10;

if ($a < $b) {
  echo "<p>a is smaller than b</p>";
} elseif ($a === $b) {
  echo '<p>numbers are equal</p>';
} else {
  echo "<p>b is bigger than a</p>";
}

echo "<h2>Switch Statements</h2>";

$num = 10;

switch ($num) {
  case 34:
    echo "<p>it is 34</p>";
    break;
  case 37:
    echo "<p>it is 37</p>";
    break;
  case 23:
    echo "<p>it is 23</p>";
    break;

  default:
    echo "<p>number was not found</p>";
    break;
}