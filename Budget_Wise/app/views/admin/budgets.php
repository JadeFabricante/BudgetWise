<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budgets - Admin Dashboard</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
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
            <h1>Budgets</h1>
            <p>Manage your budgets effectively.</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Current Budgets</div>
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>Budget ID</th>
                                    <th>User ID</th>
                                    <th>Category ID</th>
                                    <th>Amount Limit</th>
                                    <th>Duration</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($budgets as $u): ?>
                        <tr>
                            <td><?= $u['budget_id'] ?></td>
                            <td><?= $u['user_id'] ?></td>
                            <td><?= $u['category_id'] ?></td>
                            <td><?= $u['amount_limit'] ?></td>
                            <td><?= $u['duration'] ?></td>
                            <td><?= $u['created_at'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Budget</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="userId" class="form-label">User ID</label>
                                <input type="number" class="form-control" id="userId" placeholder="Enter User ID">
                            </div>
                            <div class="mb-3">
                                <label for="categoryId" class="form-label">Category ID</label>
                                <input type="number" class="form-control" id="categoryId" placeholder="Enter Category ID">
                            </div>
                            <div class="mb-3">
                                <label for="amountLimit" class="form-label">Amount Limit</label>
                                <input type="number" step="0.01" class="form-control" id="amountLimit" placeholder="Enter Amount Limit">
                            </div>
                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <select class="form-select" id="duration">
                                    <option value="monthly">Monthly</option>
                                    <option value="weekly">Weekly</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Budget</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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