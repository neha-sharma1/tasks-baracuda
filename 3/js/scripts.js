document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevents the default form submission behavior

    let isFormValid = validateForm();
    if (isFormValid === true) {
        document.getElementById("registerForm").submit();
    }
});
