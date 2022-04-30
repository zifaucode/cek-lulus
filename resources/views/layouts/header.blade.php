@php

use App\Models\Web;

$web = Web::first();

@endphp

<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="/">

                            <h3> <img src="/files/logo/{{ $web->logo}}" width="30px" alt="avatar"> {{ $web->web_name}}</h3>
                            <br>

                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>


                        </li>
                    </ul>

                    @auth

                    <ul class="nav navbar-nav float-right">


                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">


                                <img src="../../../app-assets/images/dashboard-icon/user2.png" width="35px" alt="avatar"><i></i>

                                <span class="user-name"> {{auth()->user()->first_name}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout.perform') }}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>

                    </ul>

                    @endauth


                    @guest


                    <ul class="nav navbar-nav float-right">


                        <li class="dropdown dropdown-user nav-item">

                            <div class="dropdown-menu dropdown-menu-right">

                                <div class="dropdown-divider"></div>

                            </div>
                        </li>

                    </ul>

                    @endguest

                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->