<?php include 'header.php';?>
<?php include 'conexao.php';

if (isset($_GET['id'])) {

$id = $_GET['id'];
$sql = mysqli_query($connection, "SELECT * FROM questoes WHERE id=$id ");

$count = (is_array($sql)) ? count($sql) :1 ;
if ($count) {
  $n = mysqli_fetch_array($sql);
  $alternativa = $n['alternativa'];
  $nome = $n ['nome'];
  $curso = $n ['curso'];
  $data = $n ['data'];
 }

}

if (isset($_POST['editar'])) {
$id = $_GET["id"];
$nome = $_POST ["nome"];
$curso = $_POST ["curso"];
$data = $_POST ["data"];
$alternativa = $_POST ['alternativa'];
$alternativa_implode = implode(",", $_POST['alternativa']);

$query = "UPDATE questoes SET alternativa = '$alternativa_implode', nome = '$nome', curso = '$curso', data = '$data' WHERE id = $id";

$consulta = mysqli_query($connection, $query) or die (mysqli_error($connection));

header('location: tabela.php');

}
?>


<br>
	<div class="container col-md-6 offset-md-3">
		<h2 align="center">Sistema de Questões</h2>
	<form method="POST">	

 <div class="row">
    <div class="col">
      <input name="nome" type="text" class="form-control" placeholder="Nome"
       value="<?php echo $nome;?>">
    </div>
    <div class="col">
    <select class="form-control" id="cursos" name="curso">
      <option></option>
      <option value="Informática" <?=($curso == 'Informática')? 'selected': '' ?> >Informática</option>
      <option value="Comércio" <?=($curso == 'Comércio')? 'selected': '' ?> >Comércio</option>
      <option value="Administração" <?=($curso == 'Administração')? 'selected': '' ?> >Administração</option>
      <option value="Enfermagem" <?=($curso == 'Enfermagem')? 'selected': '' ?> >Enfermagem</option>

    </select>
    </div>
     <div class="col">
      <input name="data" type="date" class="form-control" value="<?php echo $data;?>" >
    </div>
  </div>

<div id="accordion">
  <h3>Questao 1 </h3>
  <div>
    <p>
   <h2>Questao 1</h2>
  <fieldset>
    <legend>Marque uma alternativa:</legend>
    <label >A</label>
    <input type="radio" name="alternativa[0]" value="letra-a"><br>
    <label >B</label>
    <input type="radio" name="alternativa[1]" value="letra-b"><br>
    <label >C</label>
    <input type="radio" name="alternativa[2]" value="letra-c">
  </fieldset>
    </p>
  </div>
  <h3>Questao 2</h3>
  <div>
    <p>
     <h2>Questao 2</h2>
  <fieldset>
    <legend>Marque uma alternativa:</legend>
    <label >A</label>
    <input type="radio" name="alternativa[3]" value="letra-a"><br>
    <label >B</label>
    <input type="radio" name="alternativa[4]" value="letra-b"><br>
    <label >C</label>
    <input type="radio" name="alternativa[5]" value="letra-c">
  </fieldset>
    </p>
  </div>
  <h3>Questao 3</h3>
  <div>
    <p>
      <h2>Questao 3</h2>
  <fieldset>
    <legend>Marque uma alternativa:</legend>
    <label >A</label>
    <input type="radio" name="alternativa[6]" value="letra-a"><br>
    <label >B</label>
    <input type="radio" name="alternativa[7]" value="letra-b"><br>
    <label >C</label>
    <input type="radio" name="alternativa[8]" value="letra-c">
  </fieldset>
    </p>
  </div>
  <h3>Questao 4</h3>
  <div>
    <p>
    <h2>Questao 4</h2>
  <fieldset>
    <legend>Marque uma alternativa:</legend>
    <label >A</label>
    <input type="radio" name="alternativa[9]" value="letra-a"><br>
    <label >B</label>
    <input type="radio" name="alternativa[10]" value="letra-b"><br>
    <label >C</label>
    <input type="radio" name="alternativa[11]" value="letra-c">
  </fieldset>
    </p>
      </div>
</div><br><br>

<button name="editar" type="submit" class="btn btn-primary col-md-6 offset-md-3">Atualizar</button> <br> <br>


<button onclick="location.href='tabela.php'" type="button" class="btn btn-danger col-md-6 offset-md-3">
         Cancelar</button>


</form>



<br>
</div>
</body>
</html>