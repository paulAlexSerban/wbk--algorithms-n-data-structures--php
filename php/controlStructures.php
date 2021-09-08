<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Structures</title>
</head>
<body>
  <?php echo "if Statements"; ?>
  <br>
  <?php 
  $a = 3;
  $b = 10;

  if($a < $b) {
    echo "a is smaller than b";
  } elseif( $a === $b) {
    echo 'numbers are equal';
  } else {
    echo "b is bigger than a";
  }
  ?>
  <br>
  <?php echo "Switch Statements"; ?>
  <br>
  <?php 
  
  $num = 10;

  switch($num) {
    case 34:
      echo "it is 34";
      break;
    case 37:
      echo "it is 37";
      break;
    case 23:
      echo "it is 23";
      break;
    
    default:
      echo "number was not found";
    break;
  }
  ?>

  <br>
  <?php echo "While Loops"; ?>
  <br>
  <?php 
  $num = 0;

  while($num <= 10) {
    echo "while loop for $num time <br>";
    $num++;
  }
  ?>

  <br>
  <?php echo "For Loops"; ?>
  <br>

  <?php 
  
  for($counter = 0; $counter < 10; $counter++) {
    echo "for loop for $counter time <br>";
  }  

  ?>

<br>
  <?php echo "Foreach Loops"; ?>
  <br>

  <?php 
  
  $numbers = array(453, 545646, 5156, 548798);
    foreach($numbers as $number) {
      echo "<br> foreach got to ".$number."<br>";
    }
  ?>
</body>
</html>