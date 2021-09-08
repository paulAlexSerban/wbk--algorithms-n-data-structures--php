This the main page

<?php
  $files = scandir('.');
  foreach($files as $file) {
    echo "<a href='http://localhost:8000/".$file."'>".$file."</a> <br>";
  }
?>


