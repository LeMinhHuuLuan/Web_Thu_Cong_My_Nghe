<?php
     header('Content-Type: application/json');
     require_once("ProductController.php");

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         try {
             $productController = new ProductController();

             if (isset($_POST['action'])) {
                 if ($_POST['action'] == 'add_product') {
                     if (empty($_POST['category_id']) || empty($_POST['name']) || empty($_POST['price']) || empty($_FILES['product_image'])) {
                         echo json_encode(['success' => false, 'message' => 'Vui lòng điền đầy đủ thông tin sản phẩm.']);
                         exit;
                     }

                     if (!isset($_FILES['product_image']) || $_FILES['product_image']['error'] !== UPLOAD_ERR_OK) {
                         echo json_encode(['success' => false, 'message' => 'Vui lòng chọn ảnh sản phẩm hợp lệ.']);
                         exit;
                     }
 
                     $image_path = $productController->uploadImage($_FILES['product_image']);
                     
                     if($image_path) {
                         $product_id = $productController->insert(
                             $_POST['category_id'],
                             $_POST['name'],
                             $_POST['price'],
                             $_POST['sale_price'],
                             $image_path,
                             $_POST['description']
                         );
                         
                         if($product_id) {
                             echo json_encode(['success' => true, 'message' => 'Thêm sản phẩm thành công.']);
                         } else {
                             echo json_encode(['success' => false, 'message' => 'Lỗi khi thêm sản phẩm vào cơ sở dữ liệu.']);
                         }
                     } else {
                         echo json_encode(['success' => false, 'message' => 'Lỗi khi upload ảnh.']);
                     }
                     exit;
                 } elseif ($_POST['action'] == 'delete_product') {
                     $id = $_POST['id'];
                     if ($productController->deleteById($id)) {
                         echo json_encode(['success' => true, 'message' => 'Xóa sản phẩm thành công']);
                     } else {
                         echo json_encode(['success' => false, 'message' => 'Lỗi khi xóa sản phẩm. Vui lòng thử lại.']);
                     }
                     exit;
                 } else {
                     echo json_encode(['success' => false, 'message' => 'Hành động không hợp lệ']);
                     exit;
                 }
             } else {
                 echo json_encode(['success' => false, 'message' => 'Hành động không được chỉ định']);
                 exit;
             }
         } catch (Exception $e) {
             echo json_encode(['success' => false, 'message' => 'Lỗi: ' . $e->getMessage()]);
             exit;
         }
     }

     echo json_encode(['success' => false, 'message' => 'Phương thức không được hỗ trợ']);
?>