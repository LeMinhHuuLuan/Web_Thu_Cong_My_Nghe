<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin Dashboard - Handicraft</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"
        />
        <style>
            .sidebar {
                min-height: 100vh;
                background-color: #343a40;
                color: white;
            }
            .logo-container {
                padding: 20px;
                text-align: center;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            .logo-container img {
                max-width: 150px;
                height: auto;
            }
            .sidebar .nav-link {
                color: rgba(255, 255, 255, 0.8);
                padding: 15px 20px;
                margin: 5px 0;
                border-radius: 5px;
            }
            .sidebar .nav-link:hover {
                background-color: rgba(238, 232, 232, 0.1);
                color: white;
            }
            .sidebar .nav-link.active {
                background-color: #0d6efd;
                color: white;
            }
            .sidebar .nav-link i {
                margin-right: 10px;
            }
            .main-content {
                padding: 20px;
            }
            .content-section {
                display: none;
            }
            .content-section.active {
                display: block;
            }

            .p-3 h4{
               text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-3 col-lg-2 px-0 sidebar">
                    <div class="logo-container">
                        <a href="../../index.php"> 
                             <img
                                 src="../../img/w-hmp-logo-full-dark.svg"
                                 alt="Admin Logo"
                                 id="adminLogo"
                             />
                        </a>
                    </div>
                    <div class="p-3">
                        <h4 class="text-white">Admin Panel</h4>
                    </div>
                    <nav class="nav flex-column px-3">
                        <a class="nav-link active" href="#" data-section="products">
                            <i class="bi bi-box-seam"></i> Quản lý sản phẩm
                        </a>
                        <a class="nav-link" href="#" data-section="orders">
                            <i class="bi bi-cart3"></i> Quản lý đơn hàng
                        </a>
                        <a class="nav-link" href="#" data-section="users">
                            <i class="bi bi-people"></i> Quản lý người dùng
                        </a>
                    </nav>
                </div>

                <!-- Main Content -->
                <div class="col-md-9 col-lg-10 main-content">
                    <!-- Products Section -->
                    <div id="products" class="content-section active">
                        <h2>Quản lý sản phẩm</h2>
                        <div class="card mt-3">
                            <div class="card-body">
                                <button class="btn btn-primary mb-3">
                                    <i class="bi bi-plus-circle"></i> Thêm sản
                                    phẩm mới
                                </button>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Danh mục</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá</th>
                                                <th>Mô tả</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Product data will be loaded here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Orders Section -->
                    <div id="orders" class="content-section">
                        <h2>Quản lý đơn hàng</h2>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Mã đơn hàng</th>
                                                <th>Khách hàng</th>
                                                <th>Tổng tiền</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Order data will be loaded here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Users Section -->
                    <div id="users" class="content-section">
                        <h2>Quản lý người dùng</h2>
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên người dùng</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Vai trò</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- User data will be loaded here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Handle navigation
            document.querySelectorAll(".nav-link").forEach((link) => {
                link.addEventListener("click", (e) => {
                    e.preventDefault();

                    // Remove active class from all links and sections
                    document
                        .querySelectorAll(".nav-link")
                        .forEach((l) => l.classList.remove("active"));
                    document
                        .querySelectorAll(".content-section")
                        .forEach((s) => s.classList.remove("active"));

                    // Add active class to clicked link and corresponding section
                    link.classList.add("active");
                    const sectionId = link.getAttribute("data-section");
                    document.getElementById(sectionId).classList.add("active");
                });
            });

            // Function to update logo
            function updateLogo(logoPath) {
                const logoElement = document.getElementById("adminLogo");
                if (logoElement) {
                    logoElement.src = logoPath;
                }
            }
        </script>
    </body>
</html>
