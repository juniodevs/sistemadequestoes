<?php 

include 'conexao.php';

$sql = mysqli_query($connection, "SELECT * FROM questoes") or die(mysqli_error($connection));



?>