<?php
  require('cnx.php');
  require('header.php');
?>

<style type="text/css">
	.div-table {
		width: 75%;
		float: left;
	}
	.div-menu {
		width: 100%;
		float: left;
		height: 75px;
	}
	table {
		width: 100%;
		margin: 0 auto;
		border-collapse: collapse;
		border: 1px solid #000;
		color: #000;
	}
</style>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="mt-2 mb-2">
					<button class="btn btn-success" id="imprimir"><i class="fas fa-print"></i> Imprimir</button>
					<a href="listarramal" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Voltar</a>
				</div>

			</div>

			<div class="col-md-12">
				
				<table class="table-striped" id="dataTable" border="1">
					<thead>
					<tr>
					  <th>Secretaria</th>
					  <th>Setor</th>
					  <th>Nome</th>
					  <th>Ramal</th>
					  <th>Telefone</th>
					  <th>Celular</th>
					</tr>
					</thead>
					<tbody>

					<?php 

					    $query = "SELECT * FROM ramal";

					    if ($result = mysqli_query($mysqli, $query)) {

					        while ($row = mysqli_fetch_assoc($result)) {
					            echo '<tr id="delete'.$row["ram_id"].'">';
					            echo '<td>'.$row["ram_secretaria"].'</td>';
					            echo '<td>'.$row["ram_setor"].'</td>';
					            echo '<td>'.$row["ram_nomepessoa"].'</td>';
					            echo '<td>'.$row["ram_numero"].'</td>';
					            echo '<td>'.$row["ram_telefone"].'</td>';
					            echo '<td>'.$row["ram_celular"].'</td>';
					        }

					        mysqli_free_result($result);
					    }

					    mysqli_close($mysqli);

					?>


					</tbody>
				</table>

			</div>

		</div>

	</div>

 <script src="vendor/jquery/jquery.min.js"></script>

<script type="text/javascript">
    function imprimirTabela(){
        var divToPrint=document.getElementById("dataTable");
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('#imprimir').on('click',function(){
        imprimirTabela();
    })
</script>