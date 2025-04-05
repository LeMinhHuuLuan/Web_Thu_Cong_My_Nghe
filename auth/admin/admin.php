<?php
    require_once("../backend/filterAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin - Handicraft</title>
        <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./css/admin.css">
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"
        />
        <script>
            const BASE_URL = '<?php echo "/handicraft/auth/admin/"; ?>';
        </script>
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
                        <hr class="border-light my-3">
        
                        <!-- Thêm link trở về trang chủ -->
                        <a class="nav-link external-link" href="../../index.php">
                            <i class="bi bi-house-door"></i> Trở về trang chủ
                        </a>
                        <!-- Thêm link đăng xuất -->
                        <a class="nav-link external-link text-danger" href="../backend/logoutCookie.php">
                            <i class="bi bi-box-arrow-right"></i> Đăng xuất
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
                                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">
                                    <i class="bi bi-plus-circle"></i> Thêm sản phẩm mới
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
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Product data will be loaded here -->
                                            <?php
                                                require_once("controller/ProductController.php");
                                                $productController = new ProductController();
                                                $products = $productController->getAll();
                                                
                                                while($product = mysqli_fetch_assoc($products)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $product['id']; ?></td>
                                                    <td><?php echo $product['category_name']; ?></td>
                                                    <td>
                                                        <?php echo $product['name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            echo number_format($product['price']) . ' VNĐ';
                                                            if($product['sale_price'] > 0) {
                                                                echo '<br><span class="text-danger">Sale: ' . number_format($product['sale_price']) . ' VNĐ</span>';
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $product['description']; ?></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary mb-1" onclick="editProduct(<?php echo $product['id']; ?>)">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-danger" onclick="deleteProduct(<?php echo $product['id']; ?>)">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
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
                                                <th>Thao tác</th>
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
                                                <th>Thao tác</th>
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

        <!-- Add Product Modal -->
        <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Thêm sản phẩm mới</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addProductForm" action="controller/handle_product.php" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="productName" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="productName" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="productCategory" class="form-label">Danh mục</label>
                                    <select class="form-select" id="productCategory" name="category_id" required>
                                        <option value="">Chọn danh mục</option>
                                        <?php
                                            require_once("../../database/connect.php");
                                            $sql = "SELECT * FROM Category";
                                            $result = mysqli_query($conn, $sql);
                                            while($category = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $category['id']; ?>">
                                                <?php echo $category['name']; ?>
                                            </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="productPrice" class="form-label">Giá</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="productPrice" name="price" required>
                                        <span class="input-group-text">VNĐ</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="productSale" class="form-label">Giá khuyến mãi</label>
                                    <input type="number" class="form-control" id="productSale" name="sale_price" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="productDescription" class="form-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" id="productDescription" name="description" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="productImages" class="form-label">Hình ảnh sản phẩm</label>
                                <input type="file" class="form-control" id="productImages" name="product_image" multiple accept="image/*">
                            </div>
                            <input type="hidden" name="action" value="add_product">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" form="addProductForm" name="submit" class="btn btn-primary">Lưu sản phẩm</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="./js/bootstrap.js"></script>
        <script src="./js/admin.js"></script>
    </body>
</html>
