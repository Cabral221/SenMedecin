<!-- main-content -->
<div class="main-content app-content">

    <!-- main-header -->
    <div class="main-header sticky side-header nav nav-item">
        <div class="container-fluid">
            <div class="main-header-left">
                <div class="responsive-logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/brand/logo-axxunjurel-vertical.png') }}" class="logo-1 logo-color1" alt="logo"></a>
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/logo2.png') }}" class="logo-1 logo-color2" alt="logo"></a> --}}
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/logo3.png') }}" class="logo-1 logo-color3" alt="logo"></a> --}}
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/logo4.png') }}" class="logo-1 logo-color4" alt="logo"></a> --}}
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/logo5.png') }}" class="logo-1 logo-color5" alt="logo"></a> --}}
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/logo6.png') }}" class="logo-1 logo-color6" alt="logo"></a> --}}
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/brand/logo-axxunjurel-white.png') }}" class="dark-logo-1" alt="logo"></a>
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/brand/favicon-axxunjurel.svg') }}" class="logo-2 logo-color1" alt="logo"></a>
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/favicon2.png') }}" class="logo-2 logo-color2" alt="logo"></a> --}}
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/favicon3.png') }}" class="logo-2 logo-color3" alt="logo"></a> --}}
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/favicon4.png') }}" class="logo-2 logo-color4" alt="logo"></a> --}}
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/favicon5.png') }}" class="logo-2 logo-color5" alt="logo"></a> --}}
                    {{-- <a href="index.html"><img src="{{ asset('assets/img/brand/favicon6.png') }}" class="logo-2 logo-color6" alt="logo"></a> --}}
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/brand/favicon-axxunjurel-white.png') }}" class="dark-logo-2" alt="logo"></a>
                </div>
                <div class="app-sidebar__toggle d-md-none" data-toggle="sidebar">
                    <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
                    <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
                </div>
            </div>
            <div class="main-header-right">
                <div class="nav nav-item  navbar-nav-right ml-auto">
                    <div class="nav-link" id="bs-example-navbar-collapse-1">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button type="reset" class="btn btn-default">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <button type="submit" class="btn btn-default nav-link resp-btn">
                                        <i class="fe fe-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="main-header-search ml-0 d-sm-none d-none d-lg-block">
                        <input class="form-control" id="search-input" placeholder="Search for anything..."
                            type="text"> <button class="btn"><i
                                class="fas fa-search d-none d-md-block"></i></button>
                    </div>
                    <div class="dropdown nav-item main-header-notification">
                        <a class="new nav-link" href="#"><i class="fe fe-bell"></i><span class=" pulse"></span></a>
                        <div class="dropdown-menu shadow">
                            <div class="menu-header-content bg-primary text-left d-flex">
                                <div class="">
                                    <h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
                                </div>
                                <div class="my-auto ml-auto">
                                    <span class="badge badge-pill badge-warning float-right">Mark All Read</span>
                                </div>
                            </div>
                            <div class="main-notification-list Notification-scroll ps">
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-success-transparent">
                                        <i class="la la-shopping-basket text-success"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New Order Received</h5>
                                        <div class="notification-subtext">1 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-danger-transparent">
                                        <i class="la la-user-check text-danger"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">22 verified registrations</h5>
                                        <div class="notification-subtext">2 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-primary-transparent">
                                        <i class="la la-check-circle text-primary"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">Project has been approved</h5>
                                        <div class="notification-subtext">4 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-pink-transparent">
                                        <i class="la la-file-alt text-pink"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New files available</h5>
                                        <div class="notification-subtext">10 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom" href="#">
                                    <div class="notifyimg bg-warning-transparent">
                                        <i class="la la-envelope-open text-warning"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New review received</h5>
                                        <div class="notification-subtext">1 day ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3" href="#">
                                    <div class="notifyimg bg-purple-transparent">
                                        <i class="la la-gem text-purple"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">Updates Available</h5>
                                        <div class="notification-subtext">2 days ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <div class="dropdown-footer">
                                    <a href="#">VIEW ALL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown main-profile-menu nav nav-item nav-link">
                        <a class="profile-user d-flex" href="#"><img alt="avatar" src="{{ asset(auth('patient')->user()->avatar) }}">
                            <div class="p-text d-none">
                                <span class="p-name font-weight-bold">{{ auth()->user()->fullName }}</span>
                                <small class="p-sub-text">Premium Member</small>
                            </div>
                        </a>
                        <div class="dropdown-menu shadow">
                            <div class="main-header-profile header-img">
                                <div class="main-img-user"><img alt="avatar" src="{{ asset(auth('patient')->user()->avatar) }}"></div>
                                <h6>{{ auth()->user()->fullName }}</h6><span>Premium Member</span>
                            </div>
                            <a class="dropdown-item" href="{{ route('patient.home') }}"><i class="fas fa-tachometer-alt"></i> Tableau de board</a>
                            <a class="dropdown-item" href="{{ route('patient.profile') }}"><i class="far fa-user"></i> Mon Profil</a>
                            <a class="dropdown-item" href="#"><i class="far fa-edit"></i> Modifier mon profile</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-sliders-h"></i> Paramettres</a>
                            <a class="dropdown-item" 
                                href="{{ route('patient.logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form-patient').submit();">
                                <i class="fas fa-sign-out-alt"></i> Sign Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-header -->
    <!-- container -->
    <div class="container-fluid mg-t-20">

        @yield('breadcrumb')

        @yield('main-content')

    </div>
    <!-- Container closed -->

</div>
<!-- main-content closed -->