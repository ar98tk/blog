<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Top bar Search -->
<!--    <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>-->

    <!-- Top bar Navbar -->
    <ul class="navbar-nav ml-auto">

        @if(auth()->user()->ability('admin', 'manage_supervisors,show_supervisors'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.supervisors.index') }}">
                    Supervisors
                </a>
            </li>
        @endif


        @if(auth()->user()->ability('admin', 'manage_settings,show_settings'))
            <li class="nav-item">
                <a class="nav-link nav-fill" href="{{ route('admin.settings.index') }}">
                    Settings
                </a>
            </li>
        @endif

<!--            <div class="topbar-divider d-none d-sm-block"></div>

            <admin-notification></admin-notification>-->



        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
<!--        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            &lt;!&ndash; Dropdown - Messages &ndash;&gt;
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated&#45;&#45;grow-in"
                 aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                               placeholder="Search for..." aria-label="Search"
                               aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>-->



        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                @if(auth()->user()->user_image != '')
                    <img class="img-profile rounded-circle"
                         src="{{asset('assets/users/' . auth()->user()->user_image)}}">
                @else
                <img class="img-profile rounded-circle"
                     src="{{asset('assets/users/default.png')}}">
                @endif

            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ url('admin/users') }}{{ '/'.auth()->user()->id}}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                @if(auth()->user()->ability('admin', 'manage_settings,show_settings'))
                <a class="dropdown-item" href="{{route('admin.settings.index')}}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                @endif
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
