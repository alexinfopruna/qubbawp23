<?php
$servername = "localhost";
//$servername= "localhost";
$username = "qubbanet_admin";
//$password = "fI!Ip^!f4<9}1QtQ_";
//$password = "%6ijkGkLLG[^^09_¡i¡!";
//$password = "e!HouMq.970W";
$password = "E2q#^[Q~ukQ%";
$database = "qubbanet_WP5NI";

// Create connection$
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

