// Show/Hide Password Functionality
document.addEventListener("DOMContentLoaded", function () {
  const togglePassword = document.querySelector("#togglePassword");
  const passwordField = document.querySelector("#password");

  if (togglePassword) {
    togglePassword.addEventListener("click", function () {
      // Toggle the type attribute
      const type =
        passwordField.getAttribute("type") === "password" ? "text" : "password";
      passwordField.setAttribute("type", type);

      // Change the eye icon based on password visibility
      if (type === "text") {
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
        // Closed eye when password is visible
      } else {
        this.classList.add("fa-eye-slash");
        this.classList.remove("fa-eye"); // Open eye when password is hidden
      }
    });
  }

  // Form validation
  const loginForm = document.getElementById("login-form");

  if (loginForm) {
    loginForm.addEventListener("submit", function (event) {
      const username = document.getElementById("username").value.trim();
      const password = document.getElementById("password").value.trim();

      if (!username || !password) {
        event.preventDefault(); // Prevent form submission if fields are empty
        alert("Please fill in both the username and password fields.");
      }
    });
  }
});
