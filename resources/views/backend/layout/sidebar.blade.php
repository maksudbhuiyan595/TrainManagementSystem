
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 300px;
            background: linear-gradient(135deg, #6c63ff, #3a3f5c);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-nav .nav-item {
            width: 100%;
        }

        .sidebar-nav .nav-link {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar-nav .nav-link i {
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .sidebar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        .sidebar-nav .nav-link.active {
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        .sidebar-nav .nav-link span {
            flex-grow: 1;
        }

        .sidebar .sidebar-header {
            text-align: center;
            color: #fff;
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .sidebar-footer {
            margin-top: auto;
            padding: 20px;
            text-align: center;
            color: #fff;
            background: rgba(0, 0, 0, 0.1);
        }
    </style>



    <aside id="sidebar" class="sidebar">
        {{-- <div class="sidebar-header">

        </div> --}}
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item mt-5">
                <a class="nav-link active" href="{{ route('dashboard') }}">
                    <i class="bi bi-speedometer"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('train-services.index') }}">
                    <i class="bi bi-blockquote-left"></i><span>Train Services</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('stations.index') }}">
                    <i class="bi bi-list"></i><span>Stations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('wallets.index') }}">
                    <i class="bi bi-fan"></i><span>Wallets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('tickets.index') }}">
                    <i class="bi bi-segmented-nav"></i><span>Tickets</span>
                </a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-left"></i><span>Logout</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            &copy; 2024 Train Management System
        </div>
    </aside>

</html>
