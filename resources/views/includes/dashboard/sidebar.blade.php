        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">
                        <i class="fa fa-hashtag me-2"></i>DASHMIN
                    </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px" />
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">

                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('index_dashboard') }}"
                        class="nav-item nav-link {{ session('active_button') == 'dashboard' ? 'active' : '' }}"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <a href="{{ route('index_dashboard_home') }}"
                        class="nav-item nav-link {{ session('active_button') == 'home' ? 'active' : '' }}"><i
                            class="fa fa-keyboard me-2"></i>Home</a>
                    <a href="{{ route('index_dashboard_portofolio') }}"
                        class="nav-item nav-link {{ session('active_button') == 'portofolio' ? 'active' : '' }}"><i
                            class="fa fa-table me-2"></i>Portofolio</a>
                    <a href="{{ route('index_dashboard_contact') }}"
                        class="nav-item nav-link {{ session('active_button') == 'contact' ? 'active' : '' }}"><i
                            class="fa fa-table me-2"></i>Kontak</a>
                    <a href="{{ route('index_dashboard_about') }}"
                        class="nav-item nav-link {{ session('active_button') == 'about' ? 'active' : '' }}"><i
                            class="fa fa-table me-2"></i>Tentang</a>
                    <a href="{{ route('index_dashboard_article') }}"
                        class="nav-item nav-link {{ session('active_button') == 'article' ? 'active' : '' }}"><i
                            class="fa fa-table me-2"></i>Blog</a>
                    <a href="{{ route('index_dashboard_comment') }}"
                        class="nav-item nav-link {{ session('active_button') == 'comment' ? 'active' : '' }}"><i
                            class="fa fa-table me-2"></i>Komentar</a>
                </div>
            </nav>
        </div>
