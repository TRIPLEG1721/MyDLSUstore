<?php

  require_once 'connection.php';

  $sql = "SELECT * FROM product";
  $all_product = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>MyDLSUstore</title>
</head>
<body>
    <?php
      include_once 'header.php';

   ?>


</body>
</html>