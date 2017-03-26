<!doctype html>
<html>
<head>
    <title>Eldoret Municipality Motorcycle Revenue System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="eldoret and company advocates is a legal firm located in eldoret kenya owned by wilson kiplagat eldoret, its also a commissioner of oaths and public notaries" />
    <meta name="keywords" content="legal kenya, notaries public, eldoret legal, kenya legal firms, eldoret legal, eldoret law firms, legal advice" />
    <meta name="author" content="Laban, iMond Solutions" />

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="./css/animate.css"/>
    <script src="./js/jquery-2.1.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/typer.js"></script>
    <script src="./js/blocs.js"></script>
    <link rel='stylesheet' href='./css/et-line.min.css'/>
    <link rel='stylesheet' href='./css/font-awesome.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Raleway&subset=Raleway,latin-ext' rel='stylesheet'
          type='text/css'>

    <link rel="shortcut icon" href="kaly.ico">

</head>
<body>
<!-- Main container -->
<!-- <div class="page-container"> -->

    <!-- Navigation Bloc -->
    <div class="bloc imond2" id="nav-bloc">
        <div class="container ">
            <nav class="navbar imondopac row">
                <div class="navbar-header">
                  	<a href="/"><img style="width: 100px; height: 70px;"src="images/uasin.png" alt="" /></a>
                    <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-legal icon-sm icon-white zoomIn animated"></span> <img src="images/kal.png" alt="" /></a> -->
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1">
                    <ul class="site-navigation imond2  nav navbar-nav">

                        <li>
                            <a class="imond2" href="#">Services</a>
                        </li>
                        <li>
                            <a class="imond2" href="#">Customer Portal</a>
                        </li>
                        <li>
                            <a class="imond2" href="#">Finance Report</a>
                        </li>
                        <li>
                            <a class="imond2" href="#">Appointment</a>
                        </li>

                        <!-- <li>
                            <a href="/eldoretfaq">FAQ</a>
                        </li> -->
                        <li>
                            <a class="imond2" href="/eldoretcontact" class="btn btn">Contact Us</a>
                        </li>
                        @if (Auth::guest())
                            <li><a class="btn-danger" href="{{ url('/login') }}">Login</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle btn-danger" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

            </nav>
            <div class="row text-center">
              <h1 class="imond2">Eldoret Municipality Motorbike Revenue System</h1>
              <em>------est 2017-------</em>
            </div>
        </div>
    </div>
    <!-- Navigation Bloc END -->

    <!-- header -->
    <div class="bloc bgc-outer-space bg-city-overlay fh5co-cover-style-2 d-bloc" id="header">
      <div class="fh5co-overlay">

      </div>
        <div class="fh5co-cover bloc-xl">

            <div class="row" style="padding-top: 20px;">
                <div class="col-sm-5 col-sm-offset-7 fh5co-cover-text fh5co-cover-intro imondopac">
                  <br><br><br><br>  <h3 class="text-center mg-lg tc-white">Central Revenue System</h3>


                    <p class="text-center imond1 mg-lg animated fadeInUp animDelay02"> <br><br><br>
                      Managing all Motorbikes Centrally to ensure faithfulness <br>in revenue collection in the municipality
                    </p>

                    <div class="text-center">
                        <a class="btn btn-xl btn-danger animDelay06 animated fadeInUp"
                           href="/portfolio">OUR PORTFOLIO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header END -->



    <!-- clients -->
    <div class="bloc bgc-platinum l-bloc" id="bloc-3">
        <div class="container bloc-lg">
          <h1 class="text-center">Our Partners</h1>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <img src="images/kcb.jpg" width="150px" height="50px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/cic.png" width="80px" height="50px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/trans.jpg" width="150px" height="50px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/mtrh.png" width="80px" height="80px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/coorp.jpeg" width="150px" height="50px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/im.png" width="150px" height="50px" alt="ny-times"/>
                </div>
            </div>
            <div class="row">
            </br>
            </div>

            <div class="row">
                <div class="col-sm-2 text-center">
                    <img src="images/nic.jpeg" width="60px" height="60px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/krep.png" width="80px" height="50px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/equity.png" width="80px" height="80px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/nandi.jpeg" width="80px" height="80px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/afc.jpeg" width="180px" height="50px" alt="ny-times"/>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="images/telkom.jpeg" width="150px" height="50px" alt="ny-times"/>
                </div>
            </div>
            <div class="row">

            </div>

        </div>
    </div>
    <!-- clients END -->



    <!-- Footer - quote -->
    <div class="imondback" id="quote">
        <div class="container bloc-md">
            <div class="row">
                <div class="col-sm-9">
                    <h3 class="mg-md imond1 animated zoomIn">
                        Don&rsquo;t hesitate to contact us now...
                    </h3>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="/eldoretappointment" class="btn btn-lg wire-btn-white btn-wire animated zoomIn">BOOK AN APOINTMENT NOW</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer - quote END -->

    <div class="bloc l-bloc" id="faq">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center mg-md ">
                        FAQ
                    </h2>

                    <p class="sub-heading text-center">
                        Get Answers: Frequently Asked Questions
                    </p>
                </div>
            </div>
            <div class="row voffset-mg">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion"
                                       href="#collapseOne" aria-expanded="false">Can I apply for my monthly parking ticket online?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                Yes!! Eldoret Municipal has commissioned an online management system that will aid in revenue collection.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false">How can I pay for my services when I apply online?</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                <div class="panel-body">
                                Our Online system integrates online payment systems suitable for you, e.g. M-PESA
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ScrollToTop Button -->
    <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span
            class="fa fa-chevron-up"></span></a>
    <!-- ScrollToTop Button END-->

    <!-- Footer - bloc-8 -->
    <div class="bloc bgc-platinum l-bloc" id="bloc-8">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="#" target="_blank"><span
                                class="fa fa-twitter icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="#" target="_blank"><span
                                class="fa fa-facebook icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg"
                           href="#"
                           target="_blank"><span class="fa fa-google-plus icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="#"><span class="fa fa-dribbble icon-md icon-carmine-pink"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="imond-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 text-center line imond-widget">

				</div>

				<div class="col-md-2">
					<h4>Opening Hours</h4>
					<ul class="imond-footer-links">
						<li>Mon - Fri: 9:00 - 21:00</li>
						<li>Fri 8:00 - 21:00</li>
						<li>Sat 9:30 - 15:00</li>
					</ul>
				</div>
			</div>
      <div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 EMC Revenue System. All Rights Reserved.</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
    <div class="row imondblack">
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center mg-md"><small class="imond1">Designed by
        <a href="#" target="_blank">Ever</a></small>
      </div>
    </div>
    <!-- Footer - bloc-8 END -->
<!-- </div> -->
<!-- Main container END -->
</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
