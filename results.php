<?php
      include_once "backend/config.php";
      include_once "head.php";
      $cur = new AppInit();
      if(!isset($_GET['search'])){
        header("Location: index.php");
      }
      $drugs = $cur->search_drug($_GET['search']);
      $services = $cur->search_service($_GET['search']);

?>
    <!-- Left Panel -->
    <?php include_once "nav.php"?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
<?php include_once "header.php" ?>
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Drugs.</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th style="width: 10px;">No</th>
                      <th>Title</th>
                      <th>Description</th>
                    </tr>
                </thead>
                <?php if (!empty($drugs)): ?>
                  <tbody>
                  <?php foreach ($drugs as $key => $value): ?>
                      <tr onclick="window.location.href='details.php?id=<?php echo $value['id'] ?>&type=drug'" style="cursor: pointer;">
                          <th scope="row"><?php echo $value['id'] ?></th>
                          <td><?php echo $value['title']; ?></td>
                          <td><?php echo $value['description'] ?></td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
              <?php else: ?>
                <tbody>
                  no rsults found
                </tbody>
              <?php endif;   ?>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Service.</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px;">No</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <?php if (!empty($services)): ?>
                  <tbody>
                  <?php foreach ($services as $key => $value): ?>
                      <tr onclick="window.location.href='details.php?id=<?php echo $value['id'] ?>&type=service'" style="cursor: pointer;">
                          <th scope="row"><?php echo $value['id'] ?></th>
                          <td><?php echo $value['title']; ?></td>
                          <td><?php echo $value['description'] ?></td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
              <?php else: ?>
                <tbody>
                  no rsults found
                </tbody>
              <?php endif;   ?>
            </table>
        </div>
    </div>
</div>





<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
