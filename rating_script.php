<?php 
 session_start();

$mysqli = new mysqli("localhost", "root", "", "readontest");
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM catalogtest ORDER by ID";
if ($result = $mysqli->query($query)) {
	$row_cnt_arr = mysqli_num_rows($result);
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

$query = "SELECT * FROM rating ORDER by ID";
if ($result = $mysqli->query($query)) {
	$row_cnt_rtng = mysqli_num_rows($result);
	$rating = array ();
    while ($row = $result->fetch_assoc()) {
        	$rating[]=$row;
    }

    $result->free();
}

for($j=1;$j<($row_cnt_arr+1);$j++){
$avr_rtng = 0;
$rtng_cnt = 0;
for($i=0;$i<$row_cnt_rtng;$i++){
	if($rating[$i]["id_book"] == $j){
		$avr_rtng+=$rating[$i]["rating"];
		$rtng_cnt+=1;		
	}
}
if($rtng_cnt != 0)
	$avr_rtng = round($avr_rtng / $rtng_cnt, 2);
$mysqli->query("UPDATE `catalogtest` SET avg_rtng = $avr_rtng WHERE id = $j;");
}


$mysqli->close();

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$address_site."/bookpage".$id_b.".php");
?>

