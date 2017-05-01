<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>EMC - REVENUE SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset ('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset ('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/lineicons/style.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset ('assets/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{ asset ('assets/js/chart-master/Chart.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>EMC || Revenue System</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->

                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">

                <li>
                  <a class="logout" href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>

            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Welcome <br>{{Auth::user()->name}}</h5>

                  <li class="mt">
                      <a class="active" href="">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <hr>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-automobile"></i>
                          <span>Manage Motorcycles</span>
                          <i class="fa fa-chevron-circle-down"></i>
                      </a>
                      <ul class="sub">
                          <li><a  href="/motor/create">Register Motorcycle</a></li>
                          <li><a  href="/motor/view">View Motorbikes</a></li>
                          <li><a  href="/motorbike/deregister">Deregister Motorcycle</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-dollar"></i>
                          <span>Manage Revenue</span>
                          <i class="fa fa-chevron-circle-down"></i>
                      </a>
                      <ul class="sub">
                          <li><a  href="/motor/view">Revenue Payment</a></li>
                          <li><a  href="/revenue/show">Revenue Inquiry</a></li>
                          <li><a  href="/revenue/filter">Monthly Report</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            @yield('content')
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="">
          <div class="text-center">
              &copy;2017 Eer Designs
              <a href="" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset ('assets/js/jquery.js')}}"></script>
    <script src="{{ asset ('assets/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{ asset ('assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{ asset ('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{ asset ('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset ('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('assets/js/jquery.sparkline.js')}}"></script>


    <!--common script for all pages-->
    <script src="{{ asset ('assets/js/common-scripts.js')}}"></script>

    <script type="text/javascript" src="{{ asset ('assets/js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/gritter-conf.js')}}"></script>

    <!--script for this page-->
    <script src="{{ asset ('assets/js/sparkline-chart.js')}}"></script>
	<script src="{{ asset ('assets/js/zabuto_calendar.js')}}"></script>

	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Revenue Portal!',
            // (string | mandatory) the text inside the notification
            text: 'This is the first Portal of its kind in the region, enjoy the great functions integrated, the awesome UI designed by great minds, welcome back always',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <script>
      $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item");
      });

    </script>


  </body>
</html>
