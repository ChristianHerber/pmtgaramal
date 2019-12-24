<?php
  $pageName = basename($_SERVER['PHP_SELF']);

  if($pageName !== 'login.php'){
?>


      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <div class="row">
              <div class="col-md-3">
                <p class="mt-2"><img src="img/brasao.png" alt="Tangará da Serra - MT" width="50"></p>
              </div>
              <div class="col-md-6">
                <p>Prefeitura Municipal de Tangará da Serra</p>
                <p>Departamento de Informática</p>
              </div>
              <div class="col-md-3">
                <p class="mt-2"><img src="img/favicon.png" alt="Tangará da Serra - MT" width="50"></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

<?php
  }
?>


    </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  <script src="vendor/mask/jquery.mask.min.js"></script>
  <script src="vendor/sweetalert/dist/sweetalert.min.js"></script>
  <script src="js/pmtga.js"></script>



</body>

</html>