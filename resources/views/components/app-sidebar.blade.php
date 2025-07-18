<div class="sidebar" id="sidebar">
    <div class="modern-profile p-3 pb-0">
        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent"
                role="tablist">
                <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">
        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div class="me-3">
                <a href="calendar.html" class="btn btn-icon border btn-menubar">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div class="me-3">
                <a href="chat.html" class="btn btn-icon border btn-menubar position-relative">
                    <i class="ti ti-brand-hipchat"></i>
                </a>
            </div>
            <div class="me-3 notification-item">
                <a href="activities.html" class="btn btn-icon border btn-menubar position-relative me-1">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="email.html" class="btn btn-icon border btn-menubar">
                    <i class="ti ti-message"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="clinicdropdown">
                    <a href="profile.html">
                        <img src="{{ asset('images/profiles/avatar-14.jpg') }}" class="img-fluid" alt="Profile">
                        <div class="user-names">
                            <h5>{{ auth()->user()->name }}</h5>
                            <h6>{{ auth()->user()->group->name }}</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <h6 class="submenu-hdr">Menu</h6>
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'active' : '' }}">
                                <i class="ti ti-layout-2"></i><span>@lang('locale.dashboard')</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="ti ti-brand-airtable"></i><span>@lang('locale.product', ['suffix'=>'s'])</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chat.html">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Call<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="video-call.html">Video Call</a></li>
                                        <li><a href="audio-call.html">Audio Call</a></li>
                                        <li><a href="call-history.html">Call History</a></li>
                                    </ul>
                                </li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="email.html">Email</a></li>
                                <li><a href="todo.html">To Do</a></li>
                                <li><a href="notes.html">Notes</a></li>
                                <li><a href="file-manager.html">File Manager</a></li>
                                <li><a href="social-feed.html">Social Feed</a></li>
                                <li><a href="kanban-view.html">Kanban</a></li>
                                <li><a href="invoice.html">Invoices</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="ti ti-user-star"></i><span>@lang('locale.order', ['suffix'=>'s'])</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="company.html">Companies</a></li>
                                <li><a href="subscription.html">Subscriptions</a></li>
                                <li><a href="packages.html">Packages</a></li>
                                <li><a href="domain.html">Domain</a></li>
                                <li><a href="purchase-transaction.html">Purchase Transaction</a></li>
                            </ul>
                        </li>
                        <li>
							<h6 class="submenu-hdr">@lang('locale.users_management')</h6>
							<ul>
								<li>
									<a href="{{ route('groups') }}" class="{{ Route::is('groups') ? 'active' : '' }}">
										<i class="ti ti-layout-navbar"></i><span>@lang('locale.group', ['suffix'=>'s'])</span>
									</a>
								</li>
								<li>
									<a href="{{ route('users.index') }}" class="{{ Route::is('users.index') ? 'active' : '' }}">
										<i class="ti ti-layout-navbar-inactive"></i><span>@lang('locale.user', ['suffix'=>'s'])</span>
									</a>
								</li>
							</ul>
						</li>
                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="ti ti-power text-danger"></i><span>@lang('locale.logout')</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>