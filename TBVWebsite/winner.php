<?php
$servername = "localhost";
$username = "user23";
$password = "roof";
$dbname = "AgileExpG23";

#php to show the team information for the winner of the tournament - Emily and Tommy

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
$team11_table = '<table border="0" cellspacing="0" cellpadding="4" id="winnerNameTable">';
foreach($result_teamName1 as $row) {
	$team11_table .= '<tr><td><b><u>' .$row['name']. '</u></b></td></tr>';
}

$team11_table .= '</table>';

$team1_table = '<table border="0" cellspacing="2" cellpadding="8" id="winnerInfoTable">';
$team1_table .= '<tr><td><b> Team Results: </b></td><td> Tournament Winner </td></tr>';

$team1_table .= '<tr><td><b> Players: </b></td></tr>';
$team1_table .= '<tr><td><i><u> First Name </u></i></td><td><i><u> Last Name </u></i></td></tr>';

foreach($result_playerList1 as $row) {
	$team1_table .= '<tr><td>' .$row['firstName']. '</td><td>' .$row['lastName']. '</td></tr>';
}

$team1_table .= '</table>';

#echo the tables to matchView html
echo $team11_table;
echo '<hr />';
echo $team1_table;

#end connection with database
$conn = null;

?>
