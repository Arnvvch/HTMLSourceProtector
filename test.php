<?php

if(file_exists('vendor/autoload.php')){
    require_once 'vendor/autoload.php';
  }
  
  if(file_exists('src/protector.php')){
    require_once 'src/protector.php';
  }
  
  if(file_exists('protector.php')){
    require_once 'protector.php';
  }
  
  $crypt = new ArnchON\HTMLSourceProtector\Crypt;
  $crypt->Start();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMLSourceProtector</title>
</head>
<body>
    <div>
        <h1>HELLO WORLD &nbsp; TEST</h1>
    </div>
</body>
</html>