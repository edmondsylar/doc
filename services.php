<?php
      include_once "backend/config.php";
      include_once "head.php";
      $cur = new AppInit();
      $services = $cur->getServices();
?>
    <!-- Left Panel -->
    <?php include_once "nav.php"?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
<?php include_once "header.php" ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Services</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">View Service</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

              <?php if (!empty($services)): ?>
                <?php foreach ($services as $service): ?>
                  <?php
                    $image = base64_encode($service['image']);
                    // echo $img;
                   ?>
                 <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="mx-auto d-block" style="width: 250px; height: 200px" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" alt="Card image cap">

                                <h5 class="text-sm-center mt-2 mb-1"><?php echo $service['title'] ?></h5>
                                <div class="location text-sm-center"><?php echo $service['description'] ?></div>
                            </div>
                            <hr>
                            <div class="card-text text-sm-center">
                              <i class="fa fa-map-marker"></i> <?php echo $service['address'] ?>
                            </div>
                        </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>

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
