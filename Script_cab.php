<?php
$mysqli = new mysqli("localhost", "root", "", "readontest");
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}
$id_b = $array[0]["id"];


$mysqli->query("DELETE FROM `cab` WHERE `cab`.`id_book` = $id_b AND `cab`.`id_user` = $id_u");



if ($id_buttn == 1 && isset($_SESSION['email']) && isset($_SESSION['password'])){
$mysqli->query("INSERT INTO `cab` (`id_user`, `id_book`, `read_now`, `read_later`, `was_read`) VALUES ($id_u, $id_b , '1', '0', '0');");

}
else if ($id_buttn == 2 && isset($_SESSION['email']) && isset($_SESSION['password'])){
$mysqli->query("INSERT INTO `cab` (`id_user`, `id_book`, `read_now`, `read_later`, `was_read`) VALUES ($id_u, $id_b , '0', '1', '0');");

}
else if ($id_buttn == 3 && isset($_SESSION['email']) && isset($_SESSION['password'])){
$mysqli->query("INSERT INTO `cab` (`id_user`, `id_book`, `read_now`, `read_later`, `was_read`) VALUES ($id_u, $id_b , '0', '0', '1');");

}

$mysqli->close();

?>
