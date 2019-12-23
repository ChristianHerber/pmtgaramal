<?php
  require('cnx.php');
  require('session.php');
  require('header.php');
  require('sidebar.php');
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary float-left">Lista de Ramais</h6>
              <a href="imprimirlista" class="btn btn-warning float-right"><i class="fas fa-sticky-note"></i> Gerar lista pra Impressão</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Secretaria</th>
                      <th>Setor</th>
                      <th>Nome</th>
                      <th>Ramal</th>
                      <th>Telefone</th>
                      <th>Celular</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Secretaria</th>
                      <th>Setor</th>
                      <th>Nome</th>
                      <th>Ramal</th>
                      <th>Telefone</th>
                      <th>Celular</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
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
                                echo '<td class="text-center">
                                        <button class="btn btn-danger" id="btn_del" idd="'.$row["ram_id"].'" data-toggle="tooltip" data-placement="top" title="Deletar">
                                          <i class="fas fa-trash-alt"></i>
                                        </button>
                                      </td>';
                                echo '<td class="text-center">
                                        <a href="editarramal?ram_id='.$row["ram_id"].'"" class="btn btn-success id="btn_edit" idd="'.$row["ram_id"].'" data-toggle="tooltip" data-placement="top" title="Editar">
                                          <i class="fas fa-pen"></i>
                                        </a>
                                      </td>';
                                echo '</tr>';
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

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


<?php require('footer.php'); ?>