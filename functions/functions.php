<?php
$mysqli=false;
function connectDB(){
	global $mysqli;
	$mysqli = new mysqli("localhost", "root", "","readontest");
	$mysqli->query("SET NAMES 'utf-8'");

}
function closeDB(){
global $mysqli;
$mysqli->close();
}

function getBook($limit){
	global $mysqli;
	connectDB();
	$result = $mysqli->query("SELECT * FROM 'catalogtest' ORDER BY 'id' DESC LIMIT $limit");
	closeDB();
	return resultToArray($result);
}
function resultToArray($result){
$array = array ();
while(($row = $result->mysql_fetch_assoc())!=false)
	$array[]=$row;
return $array;
}
?>

