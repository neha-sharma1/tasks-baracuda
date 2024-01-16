/**
 * Checks if an Email Address is valid
 * 
 * @param {string} email 
 * @returns bool
 */
const validateEmail = (email) => {
    return (String(email)
        .toLowerCase()
        .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )) !== null;
};

/**
 * Compares if two strings are exactly the same
 * 
 * @param {string} str1 
 * @param {string} str2 
 * @returns bool
 */
const compareStrings = function (str1, str2) {
    return (str1 === str2);
}

/**
 * Check if the registration form is completely and correctly filled out.
 * 
 * @returns bool
 */
const validateForm = function () {
    // Find all Elements that were validated previously
    let validatedElements = document.querySelectorAll('.is-valid,.is-invalid');
    // Remove validations classes
    validatedElements.forEach(element => {
        element.classList.remove('is-valid', 'is-invalid');
    });

    // Validate Email Address
    let $email = document.getElementById('inputEmail');
    let isEmailValid = validateEmail($email.value);
    if (isEmailValid === false) {
        $email.classList.add('is-invalid');
        return false;
    }

    // Validate Password
    let $password = document.getElementById('inputPassword');
    let $passwordRepeat = document.getElementById('inputPasswordRepeat');
    let isPasswordSame = compareStrings($password.value, $passwordRepeat.value);

    if (isPasswordSame === false) {
        $passwordRepeat.classList.add('is-invalid');
        return false;
    }

    // If we're here, there are no errors
    return true;
}
