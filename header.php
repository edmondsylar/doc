        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                        <a href="index.php"> <button href="/" class="btn btn-secondary dropdown-toggle" type="button" id="notification" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span>Drugs</span>
                            </button></a>
                        </div>

                        <div class="dropdown for-message">
                            <a href="services.php"><button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                Services
                            </button></a>

                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar"> -->
                            <i class="fa fa-user-circle large"></i>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <?php if (isset($_SESSION['loggedin'])): ?>
                            <a class="nav-link" href="backend/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                            <?php endif; ?>
                            <?php if (!isset($_SESSION['loggedin'])): ?>
                              <a class="nav-link" href="login.php"><i class="fa fa-power-off"></i> Login</a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
