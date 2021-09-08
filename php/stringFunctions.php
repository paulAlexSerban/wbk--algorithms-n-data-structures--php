<?php
  $files = scandir('.');
  foreach($files as $file) {
    echo "<a href='http://localhost:8000/".$file."'>".$file."</a> <br>";
  }
?>

<h2>String Functions</h2>

<?php 

$string = "Hello students, do you like the class?";

echo strlen($string)." characters";
echo "<br>";

echo strtoupper($string);
echo "<br>";

echo strtolower($string);
echo "<br>";
?>