<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{url('/')}}/admin" style="color: #2b4cda">ADMIN PANEL</a>
        <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}/admin">A</a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        @if (Auth::user()->profile_photo_path)
                            <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                        @endif
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        @auth
                            <a href="{{url('/')}}/admin" class="d-block" style="font-size:15px; color:#cbd5e0">{{ Auth::user()->name }}</a>
                            <a style="font-size:15px; color:#cbd5e0" href="{{ route('logout') }}" class="d-block">Logout</a>
                        @endauth
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="{{route('admin_setting')}}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Home</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin_category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin_products')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Homes</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin_setting')}}">
              <span class="menu-icon">
                <i class="mdi mdi-settings text-primary"></i>
              </span>
                <span class="menu-title">Settings</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin_message')}}">
              <span class="menu-icon">
                <i class="mdi mdi-message-text"></i>
              </span>
                <span class="menu-title">Contact Messages</span>
                <i class="menu-arrow"></i>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin_faq')}}">
              <span class="menu-icon">
                <i class="mdi mdi-comment-question-outline"></i>
              </span>
                <span class="menu-title">FAQ</span>
                <i class="menu-arrow"></i>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin_users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin_review')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Reviews</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->
