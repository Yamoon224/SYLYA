<div class="left-side-menu">
    <div class="h-100" data-simplebar>
         <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('images/profile.png') }}" alt="user-img" title="{{ auth()->user()->name }}" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</a>
                <div class="dropdown-menu user-pro-dropdown">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>@lang('locale.my_profile')</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>@lang('locale.logout')</span>
                    </a>

                </div>
            </div>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="{{ route('profile') }}" title="@lang('locale.my_profile')">
                        <i class="fe-user"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="{{ route('logout') }}" title="@lang('locale.logout')" class="text-danger">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> @lang('locale.dashboard') </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.index') }}">
                        <i class="mdi mdi-basket-outline"></i>
                        <span> @lang('locale.order', ['suffix'=>'s']) </span>
                    </a>
                </li>
                
                <li>
                    <a href="#product" data-bs-toggle="collapse">
                        <i class="mdi mdi-archive-alert"></i>
                        <span> @lang('locale.product', ['suffix'=>'s']) </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="product">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('categories.index') }}">@lang('locale.category', ['suffix'=>app()->getLocale() == 'en' ? 'ies' : 's'])</a>
                            </li>
                            <li>
                                <a href="{{ route('products.index') }}">@lang('locale.product', ['suffix'=>'s'])</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#users" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-group"></i>
                        <span> @lang('locale.user', ['suffix'=>'s']) </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('groups') }}"> @lang('locale.group', ['suffix'=>'s'])</a>
                            </li>
                            <li>
                                <a href="{{ route('users.index') }}">@lang('locale.user', ['suffix'=>'s'])</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#others" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-details"></i>
                        <span> @lang('locale.others') </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="others">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('whitelists.index') }}"> @lang('locale.whitelist', ['suffix'=>'s'])</a>
                            </li>
                            <li>
                                <a href="{{ route('rates.index') }}">@lang('locale.rate', ['suffix'=>'s'])</a>
                            </li>
                            <li>
                                <a href="{{ route('comments.index') }}">@lang('locale.comment', ['suffix'=>'s'])</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('logout') }}" class="text-danger">
                        <i class="mdi mdi-power"></i> <span> @lang('locale.logout') </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>