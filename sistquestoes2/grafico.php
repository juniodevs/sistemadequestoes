<?php 
include 'header.php';

?>
<html>
  <head>
    <br> <br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cursos', 'Total de alunos por Curso'],

          <?php  
          include 'conexao.php';

          $sql = mysqli_query($connection, "SELECT curso, count(curso) as qtd FROM questoes WHERE curso LIKE 'Enf%' GROUP BY curso UNION SELECT curso, count(curso) as qtd FROM questoes WHERE curso LIKE 'Inf%' GROUP BY curso UNION SELECT curso, count(curso) as qtd FROM questoes WHERE curso LIKE 'Admin%' GROUP BY curso UNION SELECT curso, count(curso) as qtd FROM questoes WHERE curso LIKE 'Com%' GROUP BY curso ORDER BY qtd ASC");

          while ($dados = mysqli_fetch_array($sql)) {

            $curso = $dados ['curso'];
            $total = $dados ['qtd'];

          ?>

          ['<?php echo $curso ?>', '<?php echo $total ?>'],

        <?php } ?>


        ]);

        var options = {
          chart: {
            title: 'Gráfico sistema 2020',
            subtitle: 'Quantidade de alunos por curso - 2020',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body><center>
      <div id="columnchart_material" style="width: 800px; height: 500px; "></div>
      </center>

  </body>
</html>
