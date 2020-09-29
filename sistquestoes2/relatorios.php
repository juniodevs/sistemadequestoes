
<?php include 'conexao.php'; ?>
<?php include 'listar.php'; ?>
<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
  <title>Tabela Gabaritos</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<br>

<div class="container">
  <font size="+3" style='font-weight:bold;'>Lista de Gabaritos</font>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Curso</th>
      <th>Relatorio</th>
    </tr>
    <tr>
    	<td>Informações</td>
    	<td>Aluno/Curso</td>
    	<td><a href="relatorio.php" target="_blank" class="btn btn-sm btn-warning">Gerar</a></td>
    </tr>
  </thead>
</table>
   <a href="index.php" class="btn btn-sm btn-primary" >Voltar</a>
</div>

</body>
</html>