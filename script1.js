// Function to toggle password visibility
/*const togglePassword = () => {
    const passwordField = document.getElementById("password");
    const eyeIcon = document.getElementById("togglePassword");
  
    if (passwordField.type === "password") {
      passwordField.type = "text";
      eyeIcon.classList.add("fa-eye-slash"); // Change icon to eye-slash
    } else {
      passwordField.type = "password";
      eyeIcon.classList.remove("fa-eye-slash"); // Change icon back to eye
    }
  };
  
  // Attach event listener to the eye icon
  const eyeIcon = document.getElementById("togglePassword");
  eyeIcon.addEventListener("click", togglePassword);*/
  // script.js
document.addEventListener("DOMContentLoaded", function () {
  loadPage("home"); // Load the home page by default

  const navLinks = document.querySelectorAll("nav a");
  navLinks.forEach(link => {
      link.addEventListener("click", function (event) {
          event.preventDefault();
          const pageId = this.getAttribute("href").substring(1);
          loadPage(pageId);
      });
  });
});

function loadPage(pageId) {
  const contentSection = document.getElementById("content");
  const xhr = new XMLHttpRequest();
  xhr.open("GET", `${pageId}.html`, true);
  xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
          contentSection.innerHTML = xhr.responseText;
      }
  };
  xhr.send();
}
