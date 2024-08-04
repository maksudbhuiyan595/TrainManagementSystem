
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
        }

        .header {
            background: linear-gradient(135deg, #6c63ff, #3a3f5c);
            color: #fff;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header .logo {
            display: flex;
            align-items: center;
        }

        .header .logo img {
            border-radius: 50%;
            margin-right: 15px;
        }

        .header .logo span {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .header .toggle-sidebar-btn {
            font-size: 1.5rem;
            cursor: pointer;
            margin-left: 20px;
            color: #fff;
        }

        .header-nav {
            margin-left: auto;
        }

        .header-nav .nav-item {
            position: relative;
        }

        .header-nav .nav-link {
            color: #fff;
            padding: 0 15px;
            display: flex;
            align-items: center;
        }

        .header-nav .nav-link:hover,
        .header-nav .nav-link:focus {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }

        .header-nav .dropdown-menu {
            background: #fff;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header-nav .dropdown-menu .dropdown-item {
            color: #333;
        }

        .header-nav .dropdown-menu .dropdown-item:hover,
        .header-nav .dropdown-menu .dropdown-item:focus {
            background: rgba(0, 0, 0, 0.05);
        }

        .header-nav .dropdown-header {
            background: #f8f9fa;
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 15px;
        }

        .header-nav .dropdown-header h6 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
        }

        .header-nav .dropdown-header span {
            font-size: 0.875rem;
            color: #777;
        }
    </style>


<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
                <img src="{{ url('/avatar/avatar.png') }}" alt="" width="60" height="60" class="rounded">
                <span class="d-none d-lg-block">{{ auth()->user()->name }}</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name ?? 'no user' }}</span>
                    </a><!-- End Profile Image Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->user()->email ?? '' }}</h6>
                            <span>{{ auth()->user()->name ?? '' }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->
</body>

</html>
