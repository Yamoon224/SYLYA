<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-end mb-0">
        <li class="d-none d-lg-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h5 class="text-overflow mb-2">Found 22 results</h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-home me-1"></i>
                            <span>Analytics Report</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-aperture me-1"></i>
                            <span>How can I help you?</span>
                        </a>
            
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings me-1"></i>
                            <span>User profile settings</span>
                        </a>

                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                        </div>

                        <div class="notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex align-items-start">
                                    <img class="d-flex me-2 rounded-circle" src="{{ asset('images/users/user-2.jpg') }}" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                        <span class="font-12 mb-0">UI Designer</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex align-items-start">
                                    <img class="d-flex me-2 rounded-circle" src="{{ asset('images/users/user-5.jpg') }}" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                        <span class="font-12 mb-0">Developer</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </form>
        </li>

        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-lg">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-end">
                            <a href="" class="text-dark">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>

                <div class="noti-scroll" data-simplebar>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                        <div class="notify-icon">
                            <img src="{{ asset('images/users/user-1.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                        <p class="notify-details">Cristina Pride</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Hi, How are you? What about our next meeting</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">1 min ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="{{ asset('images/users/user-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                        <p class="notify-details">Karen Robinson</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Wow ! this admin looks good and awesome design</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-warning">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <p class="notify-details">New user registered.
                            <small class="text-muted">5 hours ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">4 days ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-secondary">
                            <i class="mdi mdi-heart"></i>
                        </div>
                        <p class="notify-details">Carlos Crouch liked
                            <b>Admin</b>
                            <small class="text-muted">13 days ago</small>
                        </p>
                    </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    View all <i class="fe-arrow-right"></i>
                </a>
            </div>
        </li>

        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('images/profile.png') }}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ms-1">
                    {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                <a href="{{ route('profile') }}" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>@lang('locale.my_profile')</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item notify-item text-danger">
                    <i class="mdi mdi-power"></i>
                    <span>@lang('locale.logout')</span>
                </a>
            </div>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="{{ asset('images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('images/logo/white.png') }}" alt="" height="40">
            </span>
        </a>
        <a href="index.html" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="{{ asset('images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('images/logo/black.png') }}" alt="LOGO" height="40">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect"><i class="fe-menu"></i></button>
        </li>
        <li><h4 class="page-title-main">APP DE GESTION DES COMMANDES</h4></li>
    </ul>

    <div class="clearfix"></div> 
</div>