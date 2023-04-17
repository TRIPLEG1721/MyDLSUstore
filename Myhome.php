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
    <title>MyDLSUstore</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
    body,h1 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image: url('thestore.png');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
    </style>
</head>
<body>
    <?php
      include_once 'header.php';
   ?>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-black">
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">MyDLSUstore</h1>
    <hr class="w3-border-black w3-large" style="margin:auto;width:40%">
    <h1 class="w3-large w3-center w3-animate-bottom">Shop Now</h1>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
  </div>
</div>
</body>
</html>