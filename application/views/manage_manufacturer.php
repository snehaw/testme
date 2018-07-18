<?php
require_once "inner_header.php";
?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
  require_once 'nav.php';
  ?>
  <div class="content-wrapper">
    <div class="container">
    <!-- row start -->
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form>
            <div class="form-group">
              <label for="manufacturer_name">Manufacturer Name:</label>
              <input class="form-control" name="manufacturer_name" type="text" placeholder="Manufacturer Name"/>
            </div>
            <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Submit"/>
            </div>
          </form>
        </div>
      </div>
      <!-- row end -->
      <!-- row start -->
      <div class="row">
        <div class="col-md-12">
          
        </div>
      </div>
      <!-- row end -->
    </div>
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © mini car inventory <?=date('Y')?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Your really want to logout?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="button" id="logout" data-dismiss="modal">Logout</button>
          </div>
        </div>
      </div>
    </div>
<?php
require_once "footer.php";
?>
