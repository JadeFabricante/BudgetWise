<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="https://via.placeholder.com/40" alt="Logo"> Admin Panel
        </a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notifications</a>
            <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Profile</a>
        </div>
    </nav>

    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-bars toggle-btn" id="toggleMenu"></i>
            <span class="admin-menu-text">Admin Menu</span>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-item">
                <a href="dashboard">
                    <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="budgets">
                    <i class="fas fa-wallet"></i> <span>Budgets</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="categories">
                    <i class="fas fa-tags"></i> <span>Categories</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="transactions">
                    <i class="fas fa-exchange-alt"></i> <span>Transactions</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="users">
                    <i class="fas fa-users"></i> <span>Users</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="user_feedback">
                    <i class="fas fa-comments"></i> <span>User Feedback</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="logout">
                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>

    <main class="content">
        <div class="content-header">
            <h1>Categories Management</h1>
            <p>Manage categories used for budgeting.</p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Categories List</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php foreach ($category as $u): ?>
                        <tr>
                            <td><?= $u['category_id'] ?></td>
                            <td><?= $u['user_id'] ?></td>
                            <td><?= $u['name'] ?></td>
                            <td><?= $u['type'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-4">Recent Activity</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Category "Groceries" added by Admin.</td>
                    <td>2024-11-21</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>Category "Salary" updated by Admin.</td>
                    <td>2024-11-22</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>Category "Utilities" deleted by Admin.</td>
                    <td>2024-11-23</td>
                    <td>Completed</td>
                </tr>
            </tbody>
        </table>
    </main>

    <!-- Bootstrap 5 JS & jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle Sidebar Menu
        document.getElementById('toggleMenu').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
    </script>
</body>

</html>