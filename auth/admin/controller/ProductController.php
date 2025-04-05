<?php
     require_once(__DIR__."/../../../database/connect.php");
     class ProductController {
          // Thêm sản phẩm mới
          public function insert($category_id, $name, $price, $sale_price, $product_image, $description) {
              global $conn;

              if (empty($category_id) || empty($name) || empty($price) || empty($product_image)) {
                  return false; // Thiếu thông tin bắt buộc
              }

              $created_at = date('Y-m-d H:i:s');
              $updated_at = date('Y-m-d H:i:s');
              
              $sql = "INSERT INTO Product(category_id, name, price, sale_price, product_image, description, created_at, updated_at) 
                      VALUES($category_id, '$name', $price, $sale_price, '$product_image', '$description', '$created_at', '$updated_at')"; 
              
              if (!mysqli_query($conn, $sql)) {
                  error_log("SQL Error: " . mysqli_error($conn));
                  return false;
              }

              return mysqli_insert_id($conn);
          }
      
          // Lấy tất cả sản phẩm
          public function getAll($limit = null) {
              global $conn;
              $sql = "SELECT p.*, c.name as category_name 
                      FROM Product p 
                      JOIN Category c ON c.id = p.category_id 
                      ORDER BY p.created_at DESC"; 
              
              if($limit != null) {
                  $sql .= " LIMIT 0," . $limit;
              }
              return mysqli_query($conn, $sql);     
          }
      
          // Lấy sản phẩm theo ID
          public function getById($id) {
              global $conn;
              $sql = "SELECT p.*, c.name as category_name 
                      FROM Product p 
                      JOIN Category c ON c.id = p.category_id 
                      WHERE p.id = $id"; 
              return mysqli_query($conn, $sql);
          }
      
          // Xóa sản phẩm
          public function deleteById($id) {
              global $conn;

              // Lấy thông tin sản phẩm để xóa file ảnh
              $product = mysqli_fetch_assoc($this->getById($id));
              if ($product) {
                  $image_path = "../../" . $product['product_image'];
                  if (file_exists($image_path)) {
                      if (!unlink($image_path)) {
                          return false; // Lỗi khi xóa file ảnh
                      }
                  }
              } else {
                  return false; // Không tìm thấy sản phẩm
              }

              // Xóa sản phẩm khỏi database
              $sql = "DELETE FROM Product WHERE id = $id";
              return mysqli_query($conn, $sql);
          }
      
          // Cập nhật sản phẩm
          public function update($id, $category_id, $name, $price, $sale_price, $product_image, $description) {
              global $conn;
              $updated_at = date('Y-m-d H:i:s');
              
              $image_update = "";
              if($product_image != "") {
                  $image_update = ", product_image = '$product_image'";
              }
      
              $sql = "UPDATE Product 
                      SET category_id = $category_id,
                          name = '$name',
                          price = $price,
                          sale_price = $sale_price,
                          description = '$description',
                          updated_at = '$updated_at'
                          $image_update
                      WHERE id = $id"; 
              mysqli_query($conn, $sql);
          }
      
          // Đếm số sản phẩm theo danh mục
          public function countProductByCategory($category_id = null) {
              global $conn;
              $sql = "SELECT COUNT(*) as total FROM Product";
              if($category_id != null) {
                  $sql .= " WHERE category_id = $category_id"; 
              }
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              return $row['total'];
          }
      
          // Lấy sản phẩm theo danh mục
          public function getByCategory($category_id, $limit = null) {
              global $conn;
              $sql = "SELECT p.*, c.name as category_name 
                      FROM Product p 
                      JOIN Category c ON c.id = p.category_id 
                      WHERE p.category_id = $category_id 
                      ORDER BY p.created_at DESC";
              
              if($limit != null) {
                  $sql .= " LIMIT 0," . $limit;
              }
              return mysqli_query($conn, $sql);
          }
      
          // Upload ảnh sản phẩm
          public function uploadImage($file) {
              $target_dir = "../../uploads/products/";
              if (!file_exists($target_dir)) {
                  mkdir($target_dir, 0777, true);
              }
      
              $file_extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
              $file_name = time() . '_' . uniqid() . '.' . $file_extension;
              $target_file = $target_dir . $file_name;
              
              if (move_uploaded_file($file["tmp_name"], $target_file)) {
                  return "uploads/products/" . $file_name;
              }
              return false;
          }
      }
?>