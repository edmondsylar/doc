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
<?php if (!empty($details)): ?>
  <?php foreach ($details as $key => $value): ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><?php echo $value['title']; ?> Details</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#"><?php echo $value['title']; ?></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

          <?php $image = base64_encode($value['image']); ?>
          <div class="col-md-4">
              <div class="card">
                  <img class="card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title mb-3"><?php echo $value['title'] ?></h4>
                      <p class="card-text"><?php echo $value['description'] ?></p>
                  </div>
              </div>
          </div>

              <div class="animated fadeIn">

                  <div class="row">
                      <div class="col-lg-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4>Location | <?php echo $value['address'] ?></h4>
                              </div>
                              <div class="card-body">
                                  <div class="map" id="map-8"></div>
                              </div>
                          </div>
                          <!-- /# card -->
                      </div>
                      <!-- /# column -->
                  </div>
              </div><!-- .animated -->
    </div>
  <?php endforeach; ?>
<?php endif; ?>

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
