<?php
$servername = "localhost";
$username = "user23";
$password = "roof";
$dbname = "AgileExpG23";

try {
  echo "in diver add php";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	echo "created connection"
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, name FROM Team";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " "<br>";
  }
  } else {
  echo "0 results";
}


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
header('Location: TournTest.html');


?>