<body>
    <div id="app">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h4>Admin Dashboard</h4>
            </div>
            <nav id="sidebar-nav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/manage_user">Manage Users</a>
                    </li>
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#" data-toggle="submenu">Habit Categories</a>
                        <ul class="submenu">
                            <li><a href="/habit/health">Health Habits</a></li>
                            <li><a href="/habit/productivity">Productivity Habits</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/notifications">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reports">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/settings">Settings</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="content">
            <header class="dashboard-header">
                <h2>Dashboard Overview</h2>
            </header>

            <div class="cards-wrapper">
                <div class="card">
                    <h5>User Activity</h5>
                    <canvas id="userActivityChart"></canvas>
                </div>
                <div class="card">
                    <h5>Habit Completion Rate</h5>
                    <canvas id="habitCompletionChart"></canvas>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add active state on click
            $('#sidebar-nav .nav-link').on('click', function () {
                $('#sidebar-nav .nav-link').removeClass('active');
                $(this).addClass('active');
            });

            // Handle submenu toggle
            $('[data-toggle="submenu"]').on('click', function (e) {
                e.preventDefault();
                $(this).next('.submenu').slideToggle(300);
            });
        });
    </script>

    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            color: #ecf0f1;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
            background: #34495e;
            font-size: 1.2em;
        }

        #sidebar-nav {
            padding: 0;
            list-style: none;
        }

        #sidebar-nav .nav-item {
            position: relative;
        }

        #sidebar-nav .nav-link {
            display: block;
            padding: 15px 20px;
            color: #bdc3c7;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        #sidebar-nav .nav-link:hover {
            background-color: #1abc9c;
            color: #ffffff;
        }

        #sidebar-nav .nav-link.active {
            background-color: #16a085;
            color: #ffffff;
        }

        /* Submenu */
        .submenu {
            display: none;
            padding-left: 20px;
            background-color: #34495e;
        }

        .submenu a {
            color: #bdc3c7;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .submenu a:hover {
            background-color: #1abc9c;
            color: #ffffff;
        }

        /* Main Content */
        .content {
            margin-left: 270px;
            padding: 30px;
        }

        .cards-wrapper {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            flex: 1;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</body>
