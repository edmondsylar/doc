<?php
      include_once "backend/config.php";
      include_once "head.php";
      $cur = new AppInit();
      $details = $cur->product($_GET['id'], $_GET['type']);
?>

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
                    <h1>Product Name</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Details</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
      <?php if (!empty($details)): ?>
        <?php foreach ($details as $key => $value): ?>
          <?php $image = base64_encode($value['image']); ?>
          <div class="col-md-4">
              <div class="card">
                  <img class="card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title mb-3"><?php echo $value['title'] ?></h4>
                      <p class="card-text"><?php echo $value['address'] ?></p>
                  </div>
              </div>
          </div>

          <div class="col-lg-6">
              <div class="card">
                  <div class="card-header">
                      <h4>Located | <?php echo $value['description'] ?></h4>
                  </div>
                  <div class="card-body">
                      <div class="map" id="map-5"></div>
                  </div>
              </div>
              <!-- /# card -->
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

    </div>


        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- Gmaps -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2jlT6C_to6X1mMvR9yRWeRvpIgTXgddM"></script>
        <script src="vendors/gmaps/gmaps.min.js"></script>
        <script src="assets/js/init-scripts/gmap/gmap.init.js"></script>
</body>
</html>
