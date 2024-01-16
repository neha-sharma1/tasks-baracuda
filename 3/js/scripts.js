(
    /**
     * Handle form submit on button click
     *
     * Calls Validation for the form and allows submission only if all fields are valid
     *
     * @returns void
     */
    function handleSubmit()  {
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevents the default form submission behavior

            let isFormValid = validateForm();
            if (isFormValid === true) {
                document.getElementById("registerForm").submit();
            }
        });
    }
)()
