<?php
     require_once(__DIR__."/auth/backend/auth.php")
?>

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="css/header.css"/>
        <link rel="stylesheet" href="css/footer.css"/>
        <link rel="stylesheet" href="css/banner_slide.css"/>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/shop.css">
        <link rel="stylesheet" href="fonts_icon/fontawesome-free-6.7.1-web/fontawesome-free-6.7.1-web/css/all.css  ">
</head>

<body>
     <header class="header">
                 <!-- Menu-->
                 <div class="menu">
                     <div class="menu-left">
                         <div class="left-text">
                             <a href="index.php">Trang chủ</a>
                             <a href="shop.php">Cửa Hàng</a>
                             <a href="aboutus.html">Giới thiệu</a>
                         </div>
                     </div>
     
                     <!-- Logo ở giữa -->
                     <div class="logo">
                         <a href="index.php"
                             ><img src="./img/w-hmp-logo-full-dark.svg" alt="Logo"
                         /></a>
                     </div>
     
                     <div class="menu-right">
                         <!-- Tác vụ bên phải -->
                         <div class="right-text">
                            <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Tìm Kiếm</a>
                            <a href="#cart"><i class="fa-solid fa-cart-shopping"></i> Giỏ Hàng</a>
                            <?php
                                require_once("auth/backend/filterWithCookie.php");
                            ?>
                         </div>
                     </div>
                 </div>
             </header>

            
             <script src="./js/menu.js"></script>
             <script src="./js/bootstrap_banner_slide.js"></script>
</body>