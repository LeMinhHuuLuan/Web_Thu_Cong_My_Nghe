
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Vai Trò (Role): Admin, User
CREATE TABLE `Role` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL
);

INSERT INTO `Role`(`id`, `name`) VALUES
(1, 'admin'),
(0, 'user');



-- Người dùng 
CREATE TABLE `User` (
  `id` int PRIMARY KEY AUTO_INCREMENT, -- ID người dùng
  `user_name` varchar(255) NOT NULL,  -- Tên đăng nhập
  `full_name` varchar(255) NOT NULL, -- Họ và tên
  `email` varchar(255) NOT NULL, -- Email
  `phone_number` varchar(255) NOT NULL, -- Số điện thoại
  `address` varchar(255) NOT NULL, -- Địa chỉ
  `password` varchar(255) NOT NULL, -- Mật khẩu
  `role_id` int NOT NULL DEFAULT 0 -- Vai trò (Người dùng, Admin)
);

INSERT INTO `User`(`id`, `user_name`, `full_name`, `email`, `phone_number`, `address`, `password`, `role_id`) VALUES
(1, 'admin', 'Administrator', 'adminwebsite@gmail.com', '+84 12345678', 'Viet Nam', '25d55ad283aa400af464c76d713c07ad', 1);



-- Danh mục sản phẩm
CREATE TABLE `Category` (
  `id` int PRIMARY KEY AUTO_INCREMENT,  -- ID danh mục
  `name` varchar(255) NOT NULL,   -- Tên danh mục
  `thumbnail` varchar(500) NOT NULL  -- Ảnh đại diện của loại sản phẩm danh mục
);

INSERT INTO `Category`(`id`, `name`, `thumbnail`) VALUES
(1, 'Mugs', '../img/menu_Mugs.jpg'),
(2, 'Pots', '../img/menu_Pots.jpg'),
(3, 'Plates', '../img/menu_Plates.jpg'),
(4, 'Decor', '../img/menu_Decor.jpg'),
(5, 'Bowls', '../img/menu_Bowls.jpg');


-- Sản phẩm
CREATE TABLE `Product` (
  `id` int PRIMARY KEY AUTO_INCREMENT,  -- ID sản phẩm
  `category_id` int NOT NULL, -- ID danh mục sản phẩm
  `name` varchar(255) NOT NULL, -- Tên sản phẩm
  `price` int NOT NULL, -- Giá sản phẩm
  `sale_price` int NOT NULL, -- Giá khuyến mãi
  `product_image` varchar(500) NOT NULL, -- Ảnh sản phẩm
  `description` longtext NULL,  -- Mô tả sản phẩm
  `created_at` datetime NOT NULL, -- Ngày tạo sản phẩm
  `updated_at` datetime NOT NULL -- Ngày cập nhật sản phẩm
);

-- Đơn hàng
CREATE TABLE `Order_Management` (
  `id` int PRIMARY KEY AUTO_INCREMENT, -- ID đơn hàng
  `user_id` int NOT NULL, -- ID người dùng
  `full_name` varchar(255) NOT NULL, -- Họ và tên
  `email` varchar(255) NOT NULL, -- Email 
  `phone_number` varchar(255) NOT NULL,   -- Số điện thoại
  `address` varchar(255) NOT NULL, -- Địa chỉ
  `ordered_date` datetime NOT NULL, -- Ngày đặt hàng
  status ENUM('Pending', 'Approved') NOT NULL DEFAULT 'Pending' -- Trạng thái đơn hàng (Pending-Chờ xác nhận, Approved Đã xác nhận)
);

-- Chi tiết đơn hàng
CREATE TABLE `Detail_Order` (
  `id` int PRIMARY KEY AUTO_INCREMENT, -- ID chi tiết đơn hàng
  `order_id` int NOT NULL, -- ID đơn hàng
  `product_id` int NOT NULL, -- ID sản phẩm
  `price` int NOT NULL, -- Giá sản phẩm
  `quantity` int NOT NULL,  -- Số lượng sản phẩm
  `total_money` int NOT NULL -- Tổng tiền
);

-- Giỏ hàng
CREATE TABLE `Cart` (
  `id` int PRIMARY KEY AUTO_INCREMENT,  -- ID giỏ hàng
  `user_id` int NOT NULL,   -- ID người dùng
  `product_id` int NOT NULL, -- ID sản phẩm
  `quantity` int NOT NULL, -- Số lượng sản phẩm
  `price` int NOT NULL, -- Giá sản phẩm
  `craeted_at` datetime NOT NULL -- Ngày tạo giỏ hàng
);

-- Khóa Foreign Key

ALTER TABLE `User` ADD FOREIGN KEY (`role_id`) REFERENCES `Role` (`id`);

ALTER TABLE `Product` ADD FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`);

ALTER TABLE `Detail_Order` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Cart` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Detail_Order` ADD FOREIGN KEY (`order_id`) REFERENCES `Order_Management` (`id`);

ALTER TABLE `Order_Management` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);

ALTER TABLE `Cart` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);


