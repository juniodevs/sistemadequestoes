<?php 
include 'conexao.php';

$id = $_GET["id"];

if (isset($_GET["id"])) {
	$sql = mysqli_query($connection, "DELETE FROM questoes WHERE id = {$id}") or die(mysqli_error($connection));

	header('location: tabela.php');
}
?>