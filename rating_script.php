<?php 
 session_start();

$mysqli = new mysqli("localhost", "root", "", "readontest");
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM catalogtest ORDER by ID";
if ($result = $mysqli->query($query)) {
	$array = array ();
    while ($row = $result->fetch_assoc()) {
        	$array[]=$row;
    }

    $result->free();
}

$query = "SELECT * FROM users ORDER by ID";
if ($result = $mysqli->query($query)) {
	$users = array ();
    while ($row = $result->fetch_assoc()) {
        	$users[]=$row;
    }

    $result->free();
}
for($i=0;$i<count($users);$i++)
{
	 if(!isset($_SESSION['email']) && !isset($_SESSION['password']))
	{
		$id_u = 0;
	}
	else if($users[$i]["email"]==$_SESSION['email']){
		$id_u = $users[$i]["id"];
	}
		
}
$id_b = $array[0]["id"];

if(isset($_SESSION['email']) && isset($_SESSION['password'])){
$rtng = $_POST["rtn"];
$mysqli->query("DELETE FROM `rating` WHERE `rating`.`id_book` = $id_b AND `rating`.`id_user` = $id_u");
$mysqli->query("INSERT INTO `rating` (`id_user`, `id_book`, `rating`) VALUES ($id_u, $id_b, $rtng);");

}

$mysqli->close();

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$address_site."/bookpage1.php");
?>

