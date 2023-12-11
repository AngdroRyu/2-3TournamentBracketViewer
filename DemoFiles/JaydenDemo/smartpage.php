<?php
$servername = "localhost";
$username = "user23";
$password = "roof";
$dbname = "AgileExpG23";

#echo '<link rel="stylesheet" type="text/css" href="mystyle.css">';
#Tommy and Emily

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}

$matchType = $_GET['content']; 
    switch ($matchType) {
        case "content_1":
 		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='1'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='2'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='1'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='2'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='1'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='1'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Winner', 'Loser') FROM AgileExpG23.Match WHERE id='1'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Loser', 'Winner') FROM AgileExpG23.Match WHERE id='1'";
		break;
	case "content_2":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='3'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='4'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='3'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='4'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='2'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='2'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Winner', 'Loser') FROM AgileExpG23.Match WHERE id='2'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Loser', 'Winner') FROM AgileExpG23.Match WHERE id='2'";
		break;
	case "content_3":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='5'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='6'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='5'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='6'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='3'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='3'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Winner', 'Loser') FROM AgileExpG23.Match WHERE id='3'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Loser', 'Winner') FROM AgileExpG23.Match WHERE id='3'";
		break;
	case "content_4":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='7'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='8'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='7'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='8'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='4'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='4'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Winner', 'Loser') FROM AgileExpG23.Match WHERE id='4'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Loser', 'Winner') FROM AgileExpG23.Match WHERE id='4'";
		break;
	case "content_5":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='2'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='3'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='2'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='3'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='5'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='5'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Winner', 'Loser') FROM AgileExpG23.Match WHERE id='5'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Loser', 'Winner') FROM AgileExpG23.Match WHERE id='5'";
		break;
	case "content_6":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='6'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='7'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='6'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='7'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='6'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='6'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Winner', 'Loser') FROM AgileExpG23.Match WHERE id='6'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Loser', 'Winner') FROM AgileExpG23.Match WHERE id='6'";
		break;
	case "content_7":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='2'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='6'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='2'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='6'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='7'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='7'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Winner', 'Loser') FROM AgileExpG23.Match WHERE id='7'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Loser', 'Winner') FROM AgileExpG23.Match WHERE id='7'";
		break;
	case "content_8":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='1'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='2'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='1'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='2'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='7'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='7'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Winner', 'Loser') FROM AgileExpG23.Match WHERE id='7'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Loser', 'Winner') FROM AgileExpG23.Match WHERE id='7'";
		break;
    } 

$result_playerList1 = $conn->query($sql_playerList1);
$result_playerList2 = $conn->query($sql_playerList2);
$result_teamName1 = $conn->query($sql_teamName1);
$result_teamName2 = $conn->query($sql_teamName2);
$result_team1Score = $conn->query($sql_team1Score);
$result_team2Score = $conn->query($sql_team2Score);
$result_team1Final = $conn->query($sql_team1Final);
$result_team2Final = $conn->query($sql_team2Final);

$team1_table = '<table border="0" cellspacing="0" cellpadding="2">';
foreach($result_teamName1 as $row) {
	$team1_table .= '<tr><td>' .$row['name']. '</td></tr>';
}

foreach($result_team1Final as $row) {
	$team1_table .= '<tr><td>' .$row['IF(team1Score>team2Score, "Winner", "Loser")']. '</td></tr>';
}

$team1_table .= '<tr><td><b> Score: </b></td></tr>';
foreach($result_team1Score as $row) {
	$team1_table .= '<tr><td>' .$row['team1Score']. '</td></tr>';
}

$team1_table .= '<tr><td><b> Players List: </b></td></tr>';
$team1_table .= '<tr><td><b> First Name </b></td><td><b> Last Name </b></td></tr>';

foreach($result_playerList1 as $row) {
	$team1_table .= '<tr><td>' .$row['firstName']. '</td><td>' .$row['lastName']. '</td></tr>';
}

//team 2 table
$team2_table = '<table border="0" cellspacing="0" cellpadding="2">';
foreach($result_teamName2 as $row) {
	$team2_table .= '<tr><td>' .$row['name']. '</td></tr>';
}

foreach($result_team2Final as $row) {
	$team2_table .= '<tr><td>' .$row['IF(team1Score>team2Score, "Loser", "Winner")']. '</td></tr>';
}

$team2_table .= '<tr><td><b> Score: </b></td></tr>';

foreach($result_team2Score as $row) {
	$team2_table .= '<tr><td>' .$row['team2Score']. '</td></tr>';
}

$team2_table .= '<tr><td><b> Players List: </b></td></tr>';
$team2_table .= '<tr><td><b> First Name </b></td><td><b> Last Name </b></td></tr>';

foreach($result_playerList2 as $row) {
	$team2_table .= '<tr><td>' .$row['firstName']. '</td><td>' .$row['lastName']. '</td></tr>';
}




$team1_table .= '</table>';

echo $team1_table;
echo $team2_table;

#header("Location:matchView.html");

$conn = null;

?>
