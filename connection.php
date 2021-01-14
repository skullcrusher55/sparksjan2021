<?php
$servername = "localhost";
$username = "id15916237_ashish";
$password = "!>Vo77hWVV8zO8!i";
$database = "id15916237_intern";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


?>