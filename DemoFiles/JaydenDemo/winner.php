<?php
$servername = "localhost";
$username = "user23";
$password = "roof";
$dbname = "AgileExpG23";

#php to show the team information for the winner of the tournament - Emily and Tommy

echo '<link rel="stylesheet" type="text/css" href="mystyle.css">';

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}

#set queries
$sql_teamName1 = "SELECT Team.name FROM AgileExpG23.Team WHERE Team.id='6'";
$sql_playerList1 = "SELECT Player.firstName, Player.lastName FROM AgileExpG23.Player WHERE Player.team='6'";
$sql_team1Score = "SELECT team2Score FROM AgileExpG23.Match WHERE id='7'";
		
#gather results of the queries
$result_playerList1 = $conn->query($sql_playerList1);
$result_teamName1 = $conn->query($sql_teamName1);
$result_team1Score = $conn->query($sql_team1Score);

#create and fill table for winning team
$team1_table = '<table border="0" cellspacing="0" cellpadding="2">';
foreach($result_teamName1 as $row) {
	$team1_table .= '<tr><td><b><u>' .$row['name']. '</u></b></td></tr>';
}

$team1_table .= '<tr><td><b> Team Results: </b></td><td> Tournament Winner </td></tr>';

$team1_table .= '<tr><td><b> Team Score: </b></td>';
foreach($result_team1Score as $row) {
	$team1_table .= '<td>' .$row['team2Score']. '</td>';
}

$team1_table .= '</tr>';

$team1_table .= '<tr><td><b> Players List: </b></td></tr>';
$team1_table .= '<tr><td><i> First Name </i></td><td><i> Last Name </i></td></tr>';

foreach($result_playerList1 as $row) {
	$team1_table .= '<tr><td>' .$row['firstName']. '</td><td>' .$row['lastName']. '</td></tr>';
}

$team1_table .= '</table>';

#echo the table to matchView html
echo $team1_table;

#end connection with database
$conn = null;

?>
