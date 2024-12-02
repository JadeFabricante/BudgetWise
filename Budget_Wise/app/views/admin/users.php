<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <style>
      /* Table Styling */
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    border-collapse: collapse;
    font-family: 'Inter', sans-serif;
}

.table th, .table td {
    padding: 12px;
    vertical-align: middle;
    text-align: left;
    border: 1px solid #ddd;
}

.table th {
    background-color: #f8f9fa;
    font-weight: bold;
    text-align: center;
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tbody tr:hover {
    background-color: #e9ecef;
    cursor: pointer;
}

.table td:first-child, .table th:first-child {
    text-align: center; /* Center-align User ID */
}

.table td {
    max-width: 250px; /* Limit the width of cells */
    overflow: hidden;
    text-overflow: ellipsis; /* Add ellipsis for overflow text */
    white-space: nowrap; /* Prevent text from wrapping */
}

/* Responsive Table (For Mobile Devices) */
@media (max-width: 768px) {
    .table th, .table td {
        padding: 8px;
    }

    .table thead {
        display: none; /* Hide headers on small screens */
    }

    .table, .table tbody, .table tr, .table td {
        display: block;
        width: 100%;
    }

    .table td {
        position: relative;
        padding-left: 50%;
    }

    .table td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        font-weight: bold;
        padding-left: 10px;
    }
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://via.placeholder.com/40" alt="Logo"> Admin Panel
        </a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notifications</a>
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
            <h1>Users Management</h1>
            <p>View and manage all users registered in the system.</p>
            <a href="add-user.html" class="btn btn-primary">Add New User</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Users List</div>
                    <div class="card-body">
                        <!-- Responsive Scrollable Table -->
                        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Email Verified at</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $u): ?>
                                    <tr>
                                        <td><?= $u['user_id'] ?></td>
                                        <td><?= $u['firstname'] ?></td>
                                        <td><?= $u['lastname'] ?></td>
                                        <td><?= $u['gender'] ?></td>
                                        <td><?= $u['email'] ?></td>
                                        <td><?= $u['password_'] ?></td>
                                        <td><?= $u['email_verified_at'] ?></td>
                                        <td><?= $u['created_at'] ?></td>
                                        <td><?= $u['updated_at'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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
                    <td>User John Doe added by Admin.</td>
                    <td>2024-11-21</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>User Jane Smith updated by Admin.</td>
                    <td>2024-11-22</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>User Emily Johnson deleted by Admin.</td>
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
