<?php
$servername = "localhost";
$username = "user23";
$password = "roof";
$dbname = "AgileExpG23";

echo '<link rel="stylesheet" type="text/css" href="mystyle.css">';

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}
//Grabbing Round 1 match 1
$sql1 = "SELECT team1, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team1 = Team.id WHERE round = 1 AND Match.id = 1";
$sql2 = "SELECT team2, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 1 AND Match.id = 1";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

			//setting up the tournament
			echo"<main id="."tournament".">";
if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
			echo'<ul class="round round-1">';
			echo'<li class="spacer">&nbsp;</li>';
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewOne.html">Match View 1&nbsp;</a></li>';
			echo'<li class="game game-bottom">'.$row2["name"].'</li>';
			echo'<li class="spacer">&nbsp;</li>';
		
	}
}else {
	echo "0 results";
}
// grabbing round 1 match 2
$sql1 = "SELECT team1, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team1 = Team.id WHERE round = 1 AND Match.id = 2";
$sql2 = "SELECT team2, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 1 AND Match.id = 2";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewTwo.html">Match View 2&nbsp;</a></li>';
			echo'<li class="game game-bottom">'.$row2["name"].'</li>';
			echo'<li class="spacer">&nbsp;</li>';
		
	}
}else {
	echo "0 results";
}
// grabbing round 1 match 3
$sql1 = "SELECT team1, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team1 = Team.id WHERE round = 1 AND Match.id = 3";
$sql2 = "SELECT team2, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 1 AND Match.id = 3";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewThree.html">Match View 3&nbsp;</a></li>';
			echo'<li class="game game-bottom">'.$row2["name"].'</li>';
			echo'<li class="spacer">&nbsp;</li>';
		
	}
}else {
	echo "0 results";
}
// grabbing round 1 match 4
$sql1 = "SELECT team1, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team1 = Team.id WHERE round = 1 AND Match.id = 4";
$sql2 = "SELECT team2, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 1 AND Match.id = 4";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewFour.html">Match View 4&nbsp;</a></li>';
			echo'<li class="game game-bottom">'.$row2["name"].'</li>';
			echo'<li class="spacer">&nbsp;</li>';
		
	}
}else {
	echo "0 results";
}
echo "</ul>"; // end of round 1

// grabbing round 2 match 1
$sql1 = "SELECT team1, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team1 = Team.id WHERE round = 2 AND Match.id = 5";
$sql2 = "SELECT team2, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 2 AND Match.id = 5";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
			echo'<ul class="round round-2">';
			echo'<li class="spacer">&nbsp;</li>';
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewFive.html">Match View 5&nbsp;</a></li>';
			echo'<li class="game game-bottom">'.$row2["name"].'</li>';
			echo'<li class="spacer">&nbsp;</li>';
		
	}
}else {
	echo "0 results";
}
// grabbing round 2 match 2
$sql1 = "SELECT team1, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team1 = Team.id WHERE round = 2 AND Match.id = 6";
$sql2 = "SELECT team2, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 2 AND Match.id = 6";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewSix.html">Match View 6&nbsp;</a></li>';
			echo'<li class="game game-bottom">'.$row2["name"].'</li>';
			echo'<li class="spacer">&nbsp;</li>';
		
	}
}else {
	echo "0 results";
}
echo "</ul>"; //end of round 2

// grabbing round 3 match 1
$sql1 = "SELECT team1, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team1 = Team.id WHERE round = 3 AND Match.id = 7";
$sql2 = "SELECT team2, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 3 AND Match.id = 7";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
			echo'<ul class="round round-3">';
			echo'<li class="spacer">&nbsp;</li>';
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewSeven.html">Match View 7&nbsp;</a></li>';
			echo'<li class="game game-bottom">'.$row2["name"].'</li>';
			echo'<li class="spacer">&nbsp;</li>';
		
	}
}else {
	echo "0 results";
}
echo "</ul>"; //end of round 3

/* $sql2 = "SELECT team2, name, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 3 AND Match.id = 7";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
			echo'<ul class="round round-3">';
			echo'<li class="spacer">&nbsp;</li>';
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewEight.html">Winner Stats &nbsp;</a></li>';
			echo'<li class="game game-bottom">'.$row2["name"].'</li>';
			echo'<li class="spacer">&nbsp;</li>';
		
	}
}else {
	echo "0 results";
}
echo "</ul>"; //end of round 3 */


// Start of round 4
$sql1 = "SELECT team1, name, team1Score, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team1 = Team.id WHERE round = 3 AND Match.id = 7";
$sql2 = "SELECT team2, name, team2Score, Match.id FROM AgileExpG23.Match JOIN Team ON AgileExpG23.Match.team2 = Team.id WHERE round = 3 AND Match.id = 7";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->num_rows > 0 AND $result2->num_rows > 0){
	while($row1 = $result1->fetch_assoc() AND $row2 = $result2->fetch_assoc())
	{
		if($row1["team1Score"]>$row2["team2Score"]){

			echo'<ul class="round round-4">';
			echo'<li class="spacer">&nbsp;</li>';
			echo'<li class="game game-top">'.$row1["name"].'</li>';
			echo'<li class="game game-spacer"><a href="matchViewEight.html">Winner Stats &nbsp;</a></li>';
			}
		else{
			echo'<ul class="round round-4">';
			echo'<li class="spacer">&nbsp;</li>';
			echo'<li class="game game-top">'.$row2["name"].'</li>';
			echo'<li class="spacer"><a href="matchViewEight.html">Winner Stats &nbsp;</a></li>';
		}

				
	}
}else {
	echo "0 results";
}
echo "</ul>"; //end of round 4

$conn = null;
?>
