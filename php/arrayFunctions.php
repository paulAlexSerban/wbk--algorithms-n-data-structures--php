<?php
  $files = scandir('.');
  foreach($files as $file) {
    echo "<a href='http://localhost:8000/".$file."'>".$file."</a> <br>";
  }
?>

<h2>Array Functions</h2>

<?php 
$list = [456,232,753,159,456,852,123,321,654,456,987,789];
echo max($list);
echo "<br>";
echo min($list);
echo "<br>";
sort($list);
print_r($list);



?>