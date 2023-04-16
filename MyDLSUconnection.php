<?php

//lets make a connection with Addtocart database

$servername = "localhost";
$username = "root";
$password = "RACEisLIFE18!";
$db_name = "mydlsustore";

$conn = new mysqli($servername,$username,$password,);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
else{
    echo "CONNECTED SUCCESSFULLY";
}

?>