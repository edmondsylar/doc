<?php include_once "head.php";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("Location: index.php");
}

 ?>
    <!-- Left Panel -->
    <?php include_once "nav.php"?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
<?php include_once "header.php";
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Add Service</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
              <div class="card">
                  <div class="card-header">
                      <strong class="card-title">Add Service</strong>
                  </div>
                  <div class="card-body">
                    <hr>
                    <form action="backend/service.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="name" class="control-label mb-1">Title</label>
                          <input name="name" type="text" class="form-control" aria-required="true" required>
                      </div>
                      <div class="form-group">
                          <label for="address" class="control-label mb-1">Address</label>
                          <input name="address" type="text" class="form-control" aria-required="true" required>
                      </div>
                      <div class="form-group">
                          <label for="address" class="control-label mb-1">Description</label>
                          <textarea name="desc" id="textarea-input" rows="9" placeholder="Drug Description" class="form-control"></textarea>
                      </div>

                      <div class="form-group">
                          <label for="address" class="control-label mb-1">upload Image</label>
                          <input name="image" type="file" class="form-control" aria-required="true" required>
                      </div>
                      <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                      </button>

                    </form>
                  </div>
              </div>
            </div>
        </div>

<div>


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
