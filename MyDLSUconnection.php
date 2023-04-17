<?php

//lets make a connection with Addtocart database

$servername = "localhost";
$username = "";
$password = "";
$db_name = "mydlsustore";
$conn = new mysqli($servername,$username,$password,$db_name,5306);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
else{
    echo "CONNECTED SUCCESSFULLY";
}

?>