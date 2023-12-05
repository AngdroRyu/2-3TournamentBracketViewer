<?php
$servername = "localhost";
$username = "user23";
$password = "roof";
$dbname = "AgileExpG23";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
echo "created connection"
$conn = null;
?>