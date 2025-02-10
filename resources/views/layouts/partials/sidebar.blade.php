<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{ asset('build/assets/images/users/4.jpg') }}" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown"
                    role="button" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }}<span
                        class="caret"></span></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i
                            class="ti-settings"></i> Account Setting</a>

                    <div class="dropdown-divider"></div>
                    <!-- Logout form -->
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                    <a href="javascript:void(0);" class="dropdown-item"
                        onclick="document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">PERSONAL</li>
                <li>
                    {{-- <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span
                            class="hide-menu">Dashboard
                            <span class="label label-rounded label-success">5</span></span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index.html">Modern Dashboard</a></li>
                        <li><a href="index2.html">Awesome Dashboard</a></li>
                        <li><a href="index3.html">Classy Dashboard</a></li>
                        <li><a href="index4.html">Analytical Dashboard</a></li>
                        <li><a href="index5.html">Minimal Dashboard</a></li>
                    </ul> --}}
                    <a href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span
                            class="hide-menu">Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow " href="" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span
                            class="hide-menu">Calendar</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('index') }}">Calendar</a></li>
                        <li><a href="app-chat.html">Chat app</a></li>
                        <li><a href="app-ticket.html">Support Ticket</a></li>
                        <li><a href="app-contact.html">Contact / Employee</a></li>
                        <li><a href="app-contact2.html">Contact Grid</a></li>
                        <li><a href="app-contact-detail.html">Contact Detail</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
