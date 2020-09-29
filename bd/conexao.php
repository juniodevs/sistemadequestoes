<?php
   $servidor = "localhost";
   $username = "root";
   $password = "";
   $database = "prova";

$conexao = mysqli_connect($servidor, $username, $password, $database);

   if (!$conexao) {
   	 die('Nao conectado ao banco' .mysqli_error());
   }
 ?>