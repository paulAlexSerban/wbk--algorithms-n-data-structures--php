<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>
  <?php echo "<h1>Functions in Php</h1>";?>

  <br>
  <?php

    $a = 555;
    $b = 1234;
    function calc($x, $y) {
      echo $x + $y;
      echo "<br>";
    }

    $text= "hello functions!!";
    function say_something($t) {
      echo "$t <br>";
    }

    calc($a, $b);
    say_something($text);

    function returnSomething($e, $f) {
      $concatenatedText = $e.$f;
      return $concatenatedText;
    }

    echo returnSomething($b, $text);
  ?>
  <br>
  <?php echo "Constants"; ?>
  <br>
  <?php
  define("CONSTANT", 1000);
  echo CONSTANT;
  echo '<br>';
  const NEW_CONSTANT = 'new constant';
  echo NEW_CONSTANT;

  ?>
</body>
</html>