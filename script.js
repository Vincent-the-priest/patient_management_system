script.js
const registrationForm = document.getElementById('registrationForm');

registrationForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    const formData = new FormData(registrationForm);

    // TODO: Send form data to server for processing
    console.log(formData); // For now, just log the form data
});
