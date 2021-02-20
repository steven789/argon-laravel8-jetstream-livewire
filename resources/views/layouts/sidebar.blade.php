<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/argon/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-gray" href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ni ni-archive-2"></i>
                            <span class="nav-link-text">Widgets</span>
                        </a>
                    </li>
                </ul>
                
                <!-- Documentation -->
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">Documentation</h6>
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">{{ __('Getting started') }}</span>
                        </a>
                    </li>
                </ul>

                <!-- Logout -->
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">Logout</h6>
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="fa fa-sign-out-alt"></i>
                                <span class="nav-link-text">{{ __('Logout') }}</span>
                            </a>
                        <form action="{{ route('logout') }}" method="POST"></form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>