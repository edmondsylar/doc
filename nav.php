
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Doc App</a>
                <!-- <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> -->
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-home"></i>Drugs </a>
                    </li>
                    <li class="active">
                        <a href="services.php"> <i class="menu-icon fa fa-dashboard"></i>Services </a>
                    </li>

<?php if (isset($_SESSION['loggedin'])): ?>
                    <h3 class="menu-title">Admins</h3><!-- /.menu-title -->

                    <li class="active">
                        <a href="addDrugs.php"> <i class="menu-icon fa fa-plus"></i>Add Drug </a>
                    </li>

                    <li class="active">
                        <a href="Addservices.php"> <i class="menu-icon fa fa-plus"></i>Add Service </a>
                    </li>
<?php endif; ?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
