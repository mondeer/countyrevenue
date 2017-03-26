<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <ul class="dropdown-menu" role="menu">
                  <li>

                  </li>
              </ul>
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('images/mond.jpg') }}" alt="">
                      Ever
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        <li><a href="{{ url('/logout') }}"
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

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                            <a>
                                <span class="image"><img src="Avatar of {{ asset('images/user-1.jpg')}}" alt="Profile Image" /></span>
                                <span>
                          <span>Charity</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                                  Revenue Defaulter notice, please pay your monthly parking fee before 10th march.
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="{{ asset('images/user-1.jpg')}}" alt="Profile Image" /></span>
                                <span>
                          <span>Timon </span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Revenue Defaulter notice, please pay your monthly parking fee before 10th march.
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="{{ asset('images/user-1.jpg')}}" alt="Profile Image" /></span>
                                <span>
                          <span>Brian</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                        Revenue Defaulter notice, please pay your monthly parking fee before 10th march.
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="{{ asset('images/user-1.jpg')}}" alt="Profile Image" /></span>
                                <span>
                          <span>Tanui</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Revenue Defaulter notice, please pay your monthly parking fee before 10th march.
                        </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a>
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
