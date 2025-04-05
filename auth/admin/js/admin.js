// Handle navigation
document.querySelectorAll(".nav-link[data-section]").forEach((link) => {  // Thêm [data-section] để chỉ bắt các link trong menu
    link.addEventListener("click", (e) => {
        e.preventDefault();

        // Remove active class from all links and sections
        document.querySelectorAll(".nav-link").forEach((l) => l.classList.remove("active"));
        document.querySelectorAll(".content-section").forEach((s) => s.classList.remove("active"));

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

// Xử lý submit form thêm sản phẩm
 document.getElementById('addProductForm').addEventListener('submit', function(e) {
    e.preventDefault();

    if (typeof BASE_URL === 'undefined') {
        alert('BASE_URL không được định nghĩa. Vui lòng kiểm tra cấu hình.');
        return;
    }
    
    let formData = new FormData(this);
    
    // Sử dụng BASE_URL từ biến global
    fetch(BASE_URL + 'controller/handle_product.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Lỗi mạng: ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            // Đóng modal và reset form
            const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
            modal.hide();
            this.reset();
            
            alert(data.message);
            window.location.reload();
        } else {
            alert(data.message || 'Có lỗi xảy ra khi thêm sản phẩm.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Có lỗi xảy ra khi kết nối đến server. Vui lòng thử lại.');
    });
});

// Sửa lại hàm deleteProduct
function deleteProduct(id) {
    if(confirm('Bạn có chắc muốn xóa sản phẩm này?')) {
        fetch(BASE_URL + 'controller/handle_product.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=delete_product&id=' + id
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                alert(data.message);
                location.reload();
            } else {
                alert('Lỗi: ' + data.message);
            }
        });
    }
}
// Hàm sửa sản phẩm (có thể thêm sau)
function editProduct(id) {
    // Code xử lý sửa sản phẩm
}