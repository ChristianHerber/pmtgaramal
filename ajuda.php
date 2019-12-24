<?php

	require('header.php');
	require('sidebar.php');
?>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid">
        	<div class="card shadow mb-4 mt-4">


			<div id="accordion">

				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<button class="btn btn-lik">
								1) Como Pesquisar?
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							Para pesquisar basta digitar parte ou todo texto/número que deseja encontrar no campo que fica no canto superior direito da tabela, a pesquisa é realizada em todos os campos, portanto você pode buscar por qualquer informação que esteja sendo apresentada nela.
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<button class="btn btn-lik">
								2) Como Ordenar a lista?
							</button>
						</h5>
					</div>

					<div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							Para ordena a lista de ramais basta clicar sobre o nome do campo pelo qual queira ordenar, a cada clique ele alterna entre ordem crescente e decrescente.
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
							<button class="btn btn-lik">
								2) Como Imprimir a lista?
							</button>
						</h5>
					</div>

					<div id="collapseTree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							Para imprimir a lista basta clicar no botão "Gerar Impressão" que está no topo da lista de ramais, ao clicar a lista será exibida, clique agora no botão imprimir.
						</div>
					</div>
				</div>

			</div>

		</div>

        </div>
      </div>



<?php require('footer.php'); ?>