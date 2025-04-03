// Menu srcoll
let lastScrollTop = 0;
const menu = document.querySelector(".menu");

window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        menu.style.top = "-100px"; 
    } else {
        menu.style.top = 0; 
    }
    lastScrollTop = scrollTop;
});

//Đánh dấu Link hiện tại
document.addEventListener("DOMContentLoaded", function () {
    let currentLocation = window.location.pathname.split("/").pop(); // Lấy tên file hiện tại
    let menuLinks = document.querySelectorAll(".left-text a");

    menuLinks.forEach(link => {
        let linkPath = link.pathname.split("/").pop(); // Lấy tên file từ href của link
        if (linkPath === currentLocation || (currentLocation === "" && linkPath === "index.html")) {
            link.classList.add("active"); // Thêm class 'active' vào link tương ứng
        }
    });
});
// lọc sản phẩm 
function updatePrice(value) {
    document.getElementById("price-value").innerText = `$${value} - $320`;
}
function applyFilter() {
    const minPrice = document.getElementById('min-price').value;
    const maxPrice = document.getElementById('max-price').value;
    alert(`Filtering products from $${minPrice} to $${maxPrice}`);
}


