<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <style>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="https://via.placeholder.com/40" alt="Logo"> User Panel
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
                    <i class="fas fa-tachometer-alt icon"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="budgets">
                    <i class="fas fa-wallet icon"></i> <span>Budgets</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="categories">
                    <i class="fas fa-tags icon"></i> <span>Categories</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="transactions.html">
                    <i class="fas fa-exchange-alt icon"></i> <span>Transactions</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="users">
                    <i class="fas fa-bullseye icon"></i> <span>Goals</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="user_feedback">
                    <i class="fas fa-comments icon"></i> <span>User Feedback</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="logout">
                    <i class="fas fa-sign-out-alt icon"></i> <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>

    <main class="content">
        <h1>Dashboard</h1>
        <p>Welcome back! Here's an overview of your application.</p>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Budget Overview</div>
                    <div class="card-body">
                        <?php if (!empty($budget_overview)) : ?>
                            <?php foreach ($budget_overview as $row) : ?>
                                <p><strong>Budget ID:</strong> <?= $row['budget_id'] ?></p>
                                <p><strong>Category:</strong> <?= $row['category_name'] ?></p>
                                <p><strong>Limit:</strong> <?= number_format($row['amount_limit'], 2) ?></p>
                                <p><strong>Spent:</strong> <?= number_format($row['total_spent'], 2) ?></p>
                                <p><strong>Remaining:</strong> <?= number_format($row['remaining_budget'], 2) ?></p>
                                <hr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No budget data available.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Goal Progress</div>
                    <div class="card-body">
                        <?php if (!empty($goal_progress)) : ?>
                            <?php foreach ($goal_progress as $row) : ?>
                                <p><strong>Goal:</strong> <?= $row['goal_name'] ?></p>
                                <p><strong>Target:</strong> <?= number_format($row['target_amount'], 2) ?></p>
                                <p><strong>Saved:</strong> <?= number_format($row['saved_amount'], 2) ?></p>
                                <p><strong>Duration:</strong> <?= $row['start_date'] ?> to <?= $row['end_date'] ?></p>
                                <hr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No goal data available.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Recent Transactions</div>
                    <div class="card-body">
                        <?php if (!empty($recent_transactions)) : ?>
                            <?php foreach ($recent_transactions as $row) : ?>
                                <p><strong>Transaction ID:</strong> <?= $row['transaction_id'] ?></p>
                                <p><strong>Category:</strong> <?= $row['category_name'] ?></p>
                                <p><strong>Amount:</strong> <?= number_format($row['amount'], 2) ?></p>
                                <p><strong>Date:</strong> <?= $row['date'] ?></p>
                                <hr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No recent transactions available.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Notifications</div>
                    <div class="card-body">
                        <?php if (!empty($spending_notifications)) : ?>
                            <?php foreach ($spending_notifications as $row) : ?>
                                <p><strong>Notification:</strong> <?= $row['message'] ?></p>
                                <p><strong>Status:</strong> <?= $row['is_sent'] ? 'Sent' : 'Not Sent' ?></p>
                                <hr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No notifications available.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-4">Feedback and Ratings</h2>
        <div class="card">
            <div class="card-header">User Feedback</div>
            <div class="card-body">
                <?php if (!empty($feedbacks_and_ratings)) : ?>
                    <p><strong>Average Rating:</strong> <?= $feedbacks_and_ratings[0]['average_rating'] ?></p>
                    <?php foreach ($feedbacks_and_ratings as $row) : ?>
                        <p><strong>Feedback:</strong> <?= $row['feedback_text'] ?></p>
                        <p><strong>Rating:</strong> <?= $row['rating'] ?></p>
                        <hr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No feedback available.</p>
                <?php endif; ?>
            </div>
        </div>

        <h2 class="mt-4">Login History</h2>
        <div class="card">
            <div class="card-header">User Login Records</div>
            <div class="card-body">
                <?php if (!empty($login_history)) : ?>
                    <?php foreach ($login_history as $row) : ?>
                        <p><strong>Login:</strong> <?= $row['login_time'] ?> - <strong>Logout:</strong> <?= $row['logout_time'] ?></p>
                        <hr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No login history available.</p>
                <?php endif; ?>
            </div>
        </div>

        <h2 class="mt-4">Profile Summary</h2>
        <div class="card">
            <div class="card-header">User Profile Information</div>
            <div class="card-body">
                <?php if (!empty($profile_summary)) : ?>
                    <?php foreach ($profile_summary as $row) : ?>
                        <p><strong>First Name:</strong> <?= $row['firstname'] ?></p>
                        <p><strong>Last Name:</strong> <?= $row['lastname'] ?></p>
                        <p><strong>Email:</strong> <?= $row['email'] ?></p>
                        <p><strong>Gender:</strong> <?= $row['gender'] ?></p>
                        <hr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No profile summary available.</p>
                <?php endif; ?>
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