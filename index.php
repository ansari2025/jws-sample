<?php
// Include the file
require 'Token.php';

$servername = "localhost";
$db="siliconc_db";
$username = "siliconc_user";
$password = "6+pBv6!f3yyV";

echo "<br><br>";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "DB Connected successfully ";

echo "<br><br>";

$sql = "SELECT * from `student`";
$result = mysqli_query($conn,$sql);

// Associative array
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

echo $row["name"];  
echo " === ";

echo $row["type"]; echo "<br><br>";
}
mysqli_close($conn);

// Generate token
$token = Token::Sign(['stu_type' => 'type'], $row["type"], 60*5);


echo $token;

// Vefity token
$payload = Token::Verify($token, KEY);