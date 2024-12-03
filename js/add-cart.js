// // JavaScript to toggle cart
// document.addEventListener("DOMContentLoaded", () => {
//   const cartIcon = document.getElementById("cart-icon");
//   const cartOverlay = document.getElementById("cart-overlay");
//   const closeCartBtn = document.getElementById("close-cart-btn");
//   const cartMessage = document.getElementById("cart-message");
//   const continueShoppingBtn = document.getElementById("continue-shopping");
//   const checkoutBtn = document.getElementById("checkout-btn");

//   // Example cart state - change this as needed
//   const cartItems = []; // This should reflect your actual cart items

//   // Function to update cart message and button visibility
//   function updateCartDisplay() {
//     if (cartItems.length === 0) {
//       checkoutBtn.style.display = "none"; // Hide Checkout button if empty
//       cartMessage.textContent = "Your cart is currently empty.";
//     } else {
//       checkoutBtn.style.display = "block"; // Show Checkout button if items exist
//       cartMessage.textContent = "You have items in your cart.";
//     }
//   }

//   // Open cart when cart icon is clicked
//   cartIcon.addEventListener("click", () => {
//     cartOverlay.classList.add("active");
//     updateCartDisplay(); // Update cart display when opened
//   });

//   // Close cart when close button is clicked
//   closeCartBtn.addEventListener("click", () => {
//     cartOverlay.classList.remove("active");
//   });

//   // Event listener for continue shopping
//   continueShoppingBtn.addEventListener("click", () => {
//     window.location.href = "all-products.html"; // Navigate to all products
//   });

//   // Event listener for checkout
//   checkoutBtn.addEventListener("click", () => {
//     alert("Proceeding to checkout...");
//     // Add your checkout logic here
//   });

//   // Initialize cart display on page load
//   updateCartDisplay();
// });
