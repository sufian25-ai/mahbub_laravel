<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --success-color: #27ae60;
            --sidebar-width: 250px;
            --header-height: 70px;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        
        .dashboard-container {
            display: flex;
            flex-direction: column;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 600px;
        }
        
        /* Header Styles */
        .dashboard-header {
            background: linear-gradient(120deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 15px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 1.8rem;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: bold;
        }
        
        /* Main Content Area */
        .dashboard-body {
            display: flex;
            min-height: 500px;
        }
        
        /* Sidebar Styles */
        .dashboard-sidebar {
            width: var(--sidebar-width);
            background: var(--secondary-color);
            color: white;
            padding: 20px 0;
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .menu-item {
            padding: 12px 25px;
            display: flex;
            align-items: center;
            transition: all 0.3s;
            cursor: pointer;
            border-left: 4px solid transparent;
        }
        
        .menu-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 4px solid var(--primary-color);
        }
        
        .menu-item.active {
            background-color: rgba(255, 255, 255, 0.15);
            border-left: 4px solid var(--primary-color);
        }
        
        .menu-item i {
            margin-right: 12px;
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
        }
        
        /* Content Area */
        .dashboard-content {
            flex: 1;
            padding: 25px;
            background-color: #f9fafb;
        }
        
        .content-header {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eaeaea;
        }
        
        .content-header h2 {
            color: var(--secondary-color);
            margin: 0;
            font-weight: 600;
        }
        
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.5rem;
        }
        
        .stat-info {
            flex: 1;
        }
        
        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
        }
        
        .stat-title {
            color: #6c757d;
            margin: 0;
            font-size: 0.9rem;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            border: none;
        }
        
        .card-header {
            background: transparent;
            border-bottom: 1px solid #eaeaea;
            padding: 15px 20px;
            font-weight: 600;
            color: var(--secondary-color);
        }
        
        .card-body {
            padding: 20px;
        }
        
        /* Footer */
        .dashboard-footer {
            background: var(--secondary-color);
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 0.9rem;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .dashboard-body {
                flex-direction: column;
            }
            
            .dashboard-sidebar {
                width: 100%;
                padding: 10px 0;
            }
            
            .sidebar-menu {
                display: flex;
                overflow-x: auto;
            }
            
            .menu-item {
                padding: 10px 15px;
                border-left: none;
                border-bottom: 3px solid transparent;
                white-space: nowrap;
            }
            
            .menu-item:hover,
            .menu-item.active {
                border-left: none;
                border-bottom: 3px solid var(--primary-color);
            }
        }
        
        @media (max-width: 576px) {
            .dashboard-header {
                flex-direction: column;
                text-align: center;
                padding: 15px;
            }
            
            .user-info {
                margin-top: 10px;
                margin-right: 0;
            }
            
            .stats-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Header -->
        <header class="dashboard-header">
            <div class="logo">
                <i class="fas fa-rocket"></i>
                <span>Dashboard Pro</span>
            </div>
            <div class="user-menu">
                <div class="user-info">
                    <div class="user-avatar">JD</div>
                    <div class="user-name">John Doe</div>
                </div>
                <div class="notifications">
                    <i class="fas fa-bell"></i>
                </div>
            </div>
        </header>

        <div class="dashboard-body">
            <!-- Sidebar -->
            <div class="dashboard-sidebar">
                <ul class="sidebar-menu">
                    <li class="menu-item active">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </li>
                    <li class="menu-item">
                        <i class="fas fa-chart-line"></i>
                        <span>Analytics</span>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="{{ route('customer.index') }}" style="color: white; text-decoration: none;">
                        <i class="fas fa-users"></i>Customers
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="/students" style="color: white; text-decoration: none;">
                        <i class="fas fa-graduation-cap"></i>Students
                        </a>
                       
                    </li>
                    <li class="menu-item">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Orders</span>
                    </li>
                    <li class="menu-item">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </li>
                    <li class="menu-item">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="dashboard-content">
                <div class="content-header">
                    <h2>Dashboard Overview</h2>
                </div>
                
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: rgba(52, 152, 219, 0.2); color: #3498db;">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3 class="stat-value">1,254</h3>
                            <p class="stat-title">Total Customers</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: rgba(46, 204, 113, 0.2); color: #2ecc71;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="stat-info">
                            <h3 class="stat-value">3,542</h3>
                            <p class="stat-title">Total Students</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: rgba(155, 89, 182, 0.2); color: #9b59b6;">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-info">
                            <h3 class="stat-value">586</h3>
                            <p class="stat-title">New Orders</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon" style="background-color: rgba(241, 196, 15, 0.2); color: #f1c40f;">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3 class="stat-value">$12,865</h3>
                            <p class="stat-title">Revenue</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                Monthly Revenue
                            </div>
                            <div class="card-body">
                                <div style="height: 250px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center;">
                                    <p>Revenue chart would be displayed here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Activity Feed
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">New order received #345</li>
                                    <li class="list-group-item">Customer John Doe registered</li>
                                    <li class="list-group-item">Student Jane Smith completed course</li>
                                    <li class="list-group-item">New blog post published</li>
                                    <li class="list-group-item">System updated to v2.3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="dashboard-footer">
            <p>&copy; 2023 Dashboard Pro. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>