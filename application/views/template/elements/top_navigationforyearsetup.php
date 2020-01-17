<!--Header-->
<header id="topnav" class="navbar navbar-black navbar-fixed-top" role="banner">

    <div class="logo-area" style="width: 700px;">
                <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
                    <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                        <span class="icon-bg">
                            <i class="ti ti-menu"></i>
                        </span>
                    </a>
                </span>

                <div style="color: lightgreen;font-size: 12pt;padding-top: 15px;">
                    <img src="assets/img/prime_logo.png" style="width: 20px; height: 20px;">
                    <?php echo $this->session->company_name;?> 
                    <span style="color: #FFF;"> - HRIS</span>
                </div>

    </div><!-- logo-area -->

    <ul class="nav navbar-nav toolbar pull-right">

        <li class="toolbar-icon-bg">
            <a href="#" id="btn_active" title="Set as Active"><span class="icon-bg"><i class="fa fa-check-circle"></i></span></i></a>
        </li>


        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                <img class="img-circle" src="<?php echo $this->session->user_photo; ?>" alt="" />
            </a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="Profile"><i class="fa fa-user"></i><span>Profile</span></a></li>
                <li><a href="login/transaction/logout"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
            </ul>
        </li>

    </ul>

</header><!--Header-->
