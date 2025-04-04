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

 // Handle form submission
 document.getElementById('addProductForm').addEventListener('submit', function(e) {
     e.preventDefault();
     
     // Collect form data
     const formData = {
         name: document.getElementById('productName').value,
         category: document.getElementById('productCategory').value,
         price: document.getElementById('productPrice').value,
         quantity: document.getElementById('productQuantity').value,
         description: document.getElementById('productDescription').value,
         images: document.getElementById('productImages').files
     };

     // Here you can add your code to send the data to the server
     console.log('Form data:', formData);
     
     // Close the modal
     const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
     modal.hide();
     
     // Reset form
     this.reset();
 });