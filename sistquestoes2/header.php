<!DOCTYPE html>
<html>
<head>
	<title>Sistema Questões</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

<script type="text/javascript" src="jqueryui/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
<script type="text/javascript" src="funcoes.js"></script>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php" style="font-weight: bold;">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <a class="navbar-brand" href="tabela.php" style="font-weight: bold;">Gabaritos<span class="sr-only">(current)</span></a>
        <a class="navbar-brand" href="grafico.php" style="font-weight: bold;">Gráfico<span class="sr-only">(current)</span></a>
        <a class="navbar-brand" href="relatorios.php" style="font-weight: bold;">Relatórios<span class="sr-only">(current)</span></a>
        <a class="navbar-brand" data-toggle="modal" data-target="#meuModal" style="font-weight: bold; color:  #e60000;">Sair</a>

    </ul>
  </div>
</nav>


<div id="meuModal" class="modal fade"role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"> Deseja sair do sistema ?</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				  <p>Clique em Sair para deslogar</p>
			</div>
          <div class="modal-footer">
          	<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>

            <a class="navbar-brand" href="../index_logo.html">
            	<button type="button" class="btn btn-danger">Sair</button>
            </a>
          	

          </div>

		</div>
	</div>

</div>

