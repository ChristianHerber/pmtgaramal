<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PMTGA Ramal</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="css/sb-admin-2.css" rel="stylesheet">

  <link rel="icon" type="img/png" sizes="192x192"  href="img/android-icon-192x192.png">
  <link rel="icon" type="img/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="img/png" sizes="96x96" href="img/favicon-96x96.png">
  <link rel="icon" type="img/png" sizes="16x16" href="img/favicon-16x16.png">
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Olá, Seja Bem-Vindo!</h1>
                  </div>

                  <form action="validar" name="frmLogin" method="post" class="user">

                    <div class="form-group">
                      <input type="text" name="user" class="form-control form-control-user" placeholder="Digite o nome de usuário">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" class="form-control form-control-user" placeholder="Sua Senha">
                    </div>

                    <button class="btn btn-primary btn-user btn-block">Login</button>
                    
                  </form>

                  <hr>
                  <div class="text-center mt-4">
                    <p><img src="img/brasao.png" alt="Tangará da Serra - MT" width="50">    
                    <img src="img/favicon.png" alt="Tangará da Serra - MT" width="50"></p>
                    <p class="small">Prefeitura Municipal de Tangará da Serra</p>
                    <p class="small">Departamento de Informática</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php

          @$msg = $_GET['msg'];

          if($msg == 'erro'){
            echo '<div class="alert alert-warning" role="danger">
                    <i class="fas fa-exclamation-triangle"></i> LOGIN INVÁLIDO - Verifique o usuário e senha
                  </div>';
          }
        ?>

      </div>

    </div>

  </div>

<?php require('footer.php'); ?>