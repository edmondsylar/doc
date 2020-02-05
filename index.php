<?php
      include_once "backend/config.php";
      include_once "head.php";
      $cur = new AppInit();
      $drugs = $cur->getDrugs();

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
                        <h1>Drugs</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">View Drugs</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

              <?php if (!empty($drugs)): ?>
                <?php foreach ($drugs as $drug): ?>
                  <?php
                    $image = base64_encode($drug['image']);
                    // echo $image;
                   ?>
                <a href="details.php?id=  <?php echo $drug['id'] ?>&type=drug"><div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="mx-auto d-block" style="width: 250px; height: 200px" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" alt="Card image cap">
                                <h5 class="text-sm-center mt-2 mb-1"><?php echo $drug['title'] ?></h5>
                                <div class="location text-sm-center"><?php echo $drug['address'] ?></div>
                            </div>
                            <hr>
                            <div class="card-text text-sm-center">
                                <i class="fa fa-map-marker"></i> &nbsp; <?php echo $drug['description'] ?>
                            </div>
                        </div>
                  </div>
                </div></a>
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
