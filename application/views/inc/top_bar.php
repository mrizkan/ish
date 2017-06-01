<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="<?php echo base_url(); ?>Welcome/pinsert" class="logo">
            <!--<i class="zmdi zmdi-group-work icon-c-logo"></i>-->
            <span>Ishra Auto Traders</span></a>
    </div>

    <nav class="navbar navbar-custom">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="zmdi zmdi-menu"></i>
                </button>
            </li>
            <!--<li class="nav-item hidden-mobile">
                <form role="search" class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>-->
        </ul>

        <ul class="nav navbar-nav pull-right">

            <li class="nav-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="<?= base_url() ?>images/avatar-1.jpg" alt="user" class="img-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Welcome ! Rizkan</small> </h5>
                    </div>

                    <!-- item-->
                    <a href="<?php echo base_url(); ?>Welcome/index" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>

    </nav>

</div>
<!-- Top Bar End -->