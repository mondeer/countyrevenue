<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-dashboard"></i> <span>EMC</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ asset('images/mond.jpg')}}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Ever</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>EMC Admin</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Manage Motorcycles<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/motor/create">Register a Motorcycle</a></li>
                            <li><a href="/motor/view">View Motorcycles</a></li>
                            <li><a href="#">Deregister a Motorcycle</a></li>

                        </ul>
                    </li>

                    <li><a><i class="fa fa-hospital-o"></i> Manage Revenue<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/motor/view">Revenue Payment</a></li>
                            <li><a href="/revenue/show">Revenue Inquiry</a></li>
                            <li><a href="#">Audit Monthly Revenue</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-dollar"></i>
                            Defaulter Register
                            <span class="label label-success pull-right">Flag</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
