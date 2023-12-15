<?php
$servername = "localhost";
$username = "user23";
$password = "roof";
$dbname = "AgileExpG23";

#php to show the matchView of each match - Emily and Tommy

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}

#switch case to change quieries based on match selected
$matchType = $_GET['content']; 
    switch ($matchType) {
        case "content_1":
 		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='1'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='2'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='1'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='2'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='1'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='1'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Won', 'Lost') AS 'final1' FROM AgileExpG23.Match WHERE id='1'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Won', 'Lost') AS 'final2' FROM AgileExpG23.Match WHERE id='1'";
		break;
	case "content_2":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='3'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='4'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='3'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='4'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='2'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='2'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Won', 'Lost') AS 'final1' FROM AgileExpG23.Match WHERE id='2'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Won', 'Lost') AS 'final2' FROM AgileExpG23.Match WHERE id='2'";
		break;
	case "content_3":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='5'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='6'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='5'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='6'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='3'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='3'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Won', 'Lost') AS 'final1' FROM AgileExpG23.Match WHERE id='3'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Won', 'Lost') AS 'final2' FROM AgileExpG23.Match WHERE id='3'";
		break;
	case "content_4":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='7'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='8'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='7'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='8'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='4'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='4'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Won', 'Lost') AS 'final1' FROM AgileExpG23.Match WHERE id='4'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Won', 'Lost') AS 'final2' FROM AgileExpG23.Match WHERE id='4'";
		break;
	case "content_5":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='2'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='3'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='2'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='3'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='5'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='5'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Won', 'Lost') AS 'final1' FROM AgileExpG23.Match WHERE id='5'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Won', 'Lost') AS 'final2' FROM AgileExpG23.Match WHERE id='5'";
		break;
	case "content_6":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='6'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='7'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='6'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='7'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='6'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='6'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Won', 'Lost') AS 'final1' FROM AgileExpG23.Match WHERE id='6'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Won', 'Lost') AS 'final2' FROM AgileExpG23.Match WHERE id='6'";
		break;
	case "content_7":
		$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='2'";
		$sql_teamName2 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='6'";
		$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='2'";
		$sql_playerList2 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='6'";
		$sql_team1Score = "SELECT team1Score FROM AgileExpG23.Match WHERE id='7'";
		$sql_team2Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='7'";
		$sql_team1Final = "SELECT IF(team1Score>team2Score, 'Won', 'Lost') AS 'final1' FROM AgileExpG23.Match WHERE id='7'";
		$sql_team2Final = "SELECT IF(team1Score<team2Score, 'Won', 'Lost') AS 'final2' FROM AgileExpG23.Match WHERE id='7'";
		break;
    } 

#gather results of the queries 
$result_playerList1 = $conn->query($sql_playerList1);
$result_playerList2 = $conn->query($sql_playerList2);
$result_teamName1 = $conn->query($sql_teamName1);
$result_teamName2 = $conn->query($sql_teamName2);
$result_team1Score = $conn->query($sql_team1Score);
$result_team2Score = $conn->query($sql_team2Score);
$result_team1Final = $conn->query($sql_team1Final);
$result_team2Final = $conn->query($sql_team2Final);

#create and fill tables for team 1
$team11_table .= '<table border="0" cellspacing="0" cellpadding="4" id="team1Name">';
foreach($result_teamName1 as $row) {
	$team11_table .= '<tr><td><b>' .$row['name']. '</b></td></tr>';
}
echo '<table class="team1name">';
$team11_table .= '</table>';


$team1_table .= '<table border="0" cellspacing="2" cellpadding="6" id="team1Info">';

$team1_table .= '<tr><td><b> Team Results: </b></td>';

foreach($result_team1Final as $row) {
	$team1_table .= '<td>' .$row['final1']. '</td>';
}

$team1_table .= '</tr>';

$team1_table .= '<tr><td><b> Team Score: </b></td>';
foreach($result_team1Score as $row) {
	$team1_table .= '<td>' .$row['team1Score']. '</td>';
}

$team1_table .= '</tr>';

$team1_table .= '<tr><td><b> Players: </b></td></tr>';
$team1_table .= '<tr><td><i><u> First Name </u></i></td><td><i><u> Last Name </u></i></td></tr>';

foreach($result_playerList1 as $row) {
	$team1_table .= '<tr><td>' .$row['firstName']. '</td><td>' .$row['lastName']. '</td></tr>';
}

$team1_table .= '</table>';


#create and fill table for team 2
$team22_table .= '<table border="0" cellspacing="0" cellpadding="4" id="team2Name">';
foreach($result_teamName2 as $row) {
	$team22_table .= '<tr><td><b>' .$row['name']. '</b></td></tr>';
}

$team22_table .= '</table>';


$team2_table .= '<table border="0" cellspacing="2" cellpadding="6" id="team2Info">';
$team2_table .= '<tr><td><b> Team Results: </b></td>';

foreach($result_team2Final as $row) {
	$team2_table .= '<td>' .$row['final2']. '</td>';
}

$team2_table .= '</tr>';

$team2_table .= '<tr><td><b> Team Score: </b></td>';
foreach($result_team2Score as $row) {
	$team2_table .= '<td>' .$row['team2Score']. '</td>';
}

$team2_table .= '</tr>';

$team2_table .= '<tr><td><b> Players: </b></td></tr>';
$team2_table .= '<tr><td><i><u> First Name </u></i></td><td><i><u> Last Name </u></i></td></tr>';

foreach($result_playerList2 as $row) {
	$team2_table .= '<tr><td>' .$row['firstName']. '</td><td>' .$row['lastName']. '</td></tr>';
}

$team2_table .= '</table>';


#echo all tables to matchView html
echo $team11_table;
echo $team22_table;
echo '<hr />';
echo $team1_table;
echo $team2_table;

#end connection with database
$conn = null;

?>
