<?php
  require('cnx.php');
  require('header.php');
  require('session.php');
  require('sidebarlogado.php');

  $ram_id = $_GET['ram_id'];

  $sql = "SELECT * FROM ramal WHERE ram_id = '$ram_id'";
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <?php require('navlogado.php'); ?>

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
          
          <div class="col-md-12">
            <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Editar Ramal Cadastrado</h6>
            </div>
            <div class="card-body">
              <div class="">
                <form name="formCadRamal" id="formCadRamal" method="get" acao="editar">

                  <div class="row">


                  <?php
                  if ($result = mysqli_query($mysqli, $sql)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <input type="hidden" name="ram_id" id="ram_id" value="<?php echo $row['ram_id']; ?>">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ram_secretaria">Secretaria</label>
                        <select type="text" name="ram_secretaria" id="ram_secretaria" class="form-control">
                          <option value="<?php echo $row['ram_secretaria']; ?>"><?php echo $row['ram_secretaria']; ?></option>
                          <option value="Administração">Administração</option>
                          <option value="Gabinete">Gabinete</option>
                          <option value="Fazenda">Fazenda</option>
                          <option value="Agricultura">Agricultura</option>
                          <option value="Turismo">Turismo</option>
                          <option value="Assistência Social">Assistência Social</option>
                          <option value="Educação">Educação</option>
                          <option value="Meio Ambiente">Meio Ambiente</option>
                          <option value="Coordenação e Planejamento">Coordenação e Planejamento</option>
                          <option value="SERRAPREV">SERRAPREV</option>
                          <option value="Indústria e Comércio">Indústria e Comércio</option>
                          <option value="Saúde">Saúde</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ram_setor">Setor</label>
                        <select type="text" name="ram_setor" id="ram_setor" class="form-control" required>                        
                          <option value="<?php echo $row['ram_setor']; ?>"><?php echo $row['ram_setor']; ?></option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ram_nomepessoa">Nome</label>
                        <input type="text" name="ram_nomepessoa" id="ram_nomepessoa" class="form-control" value="<?php echo $row['ram_nomepessoa']; ?>" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ram_numero">Ramal</label>
                        <input type="number" name="ram_numero" id="ram_numero" class="form-control" value="<?php echo $row['ram_numero']; ?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ram_telefone">Telefone</label>
                        <input type="text" name="ram_telefone" id="ram_telefone" class="form-control" value="<?php echo $row['ram_telefone']; ?>">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="ram_celular">Celular</label>
                        <input type="text" name="ram_celular" id="ram_celular" class="form-control" value="<?php echo $row['ram_celular']; ?>">
                      </div>
                    </div>

                    <?php
                          }
                          mysqli_free_result($result);
                      }
                    mysqli_close($mysqli);
                    ?>  

                  </div>

                    <div class="form-group">
                      <button class="btn btn-success" id="btn_cadastrar">Atualizar Cadastro</button>
                    </div>
                </form>
              </div>
            </div>
            </div>  
          </div>

          </div>        

        </div>

<?php require('footer.php'); ?>