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

 // Handle form submission
 document.getElementById('addProductForm').addEventListener('submit', function(e) {
     e.preventDefault();
     // Close the modal
     const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
     modal.hide();
     
     // Reset form
     this.reset();
 });