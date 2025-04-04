<?php
require_once("auth.php");
$checkCookie = Auth::loginWithCookie();
if ($checkCookie != null): ?>
    <div class="dropdown">
        <a class="btn btn-light dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li class="dropdown-item text-muted"><?= htmlspecialchars($checkCookie['full_name']) ?></li>
            <li><hr class="dropdown-divider"></li>
            <?php if ($checkCookie['role_id'] == 1): ?>
                <li><a class="dropdown-item" href="./auth/admin/admin.php">Quản lý</a></li>
            <?php endif; ?>
            <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="/handicraft/auth/backend/logoutCookie.php">Đăng Xuất</a></li>
        </ul>
    </div>
<?php else: ?>
    <a href="login.php"><i class="fa-solid fa-user"></i></a>
<?php endif; ?>
