<?php
include '../utils/file_list.php';
generateFileList();

echo "<h1>Loops</h1>";
echo "<h2>While loop</h2>";
$num = 0;

while ($num <= 10) {
  echo "while loop for $num time <br>";
  $num++;
}

echo "<h2>For loop</h2>";

for ($counter = 0; $counter < 10; $counter++) {
  echo "for loop for $counter time <br>";
}

echo "<h2>Foreach loop</h2>";

$numbers = array(453, 545646, 5156, 548798);
foreach ($numbers as $number) {
  echo "<br> foreach got to " . $number . "<br>";
}