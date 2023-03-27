<?php


// connecting to te Database
$servername = "localhost";
$username = "root";
$password ="";
$database = "dbcrud";

 //create a connection

$conn = new mysqli($servername, $username, $password, $database );


//Die if connection was not successful
if(!$conn){
	die("sorry we failed to connect:". mysqli_connect_error());
}

//  echo "Connected successfully";
?>