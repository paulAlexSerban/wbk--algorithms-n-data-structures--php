

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello Php</title>
</head>
<body>
  <?php echo "<h1>Hello Php</h1>"; ?>

  <?php 
    $greet = "Hello";
    $toWho = "World";

    echo "<h3>Php says ".$greet." ".$toWho."</h3>"; 
  ?>

  <?php echo "<h3>Arrays</h3>"?>

  <?php 
  $numberList = array('<h4>Hello Php Arrays</h4>', 23, 50, 55, 100 ,15 ,456 ,213,);
  echo $numberList[0];

  $associativeArray = array(
    "first_name" => 'Paul',
    "last_name" => 'Serban'
  );

  echo $associativeArray['first_name']. " " .$associativeArray['last_name'];
  ?>
</body>