// call elements
const form = document.querySelector('form');
const usernameInput = document.querySelector('input[type="text"]');
const emailInput = document.querySelector('input[type="email"]');
const passwordInput = document.querySelector('input[type="password"]');
const repeatPasswordInput = document.querySelectorAll('input[type="password"]')[1];

// validate email regex
function isValidEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}

function handleSubmit(event) {
    event.preventDefault();

    const username = usernameInput.value;
    const email = emailInput.value;
    const password = passwordInput.value;
    const repeatPassword = repeatPasswordInput.value;

    
    /* لو لاسم فاضي اديله alert */
    if (username.trim() === '') {
        alert('Please enter a username.');
        /* لازم ايميل صح */
    } else if (!isValidEmail(email)) {
        alert('Please enter a valid university email.');
        /* لازم باسورد */
    } else if (password.trim() === '') {
        alert('Please enter a password.');
        /* pass == repeated pass */
    } else if (password !== repeatPassword) {
        alert('Passwords do not match.');
    } else {
    /* لو الداتا صح submit */
        alert('Form submitted successfully.');
    /* if i want to unsubmit remove the next line  */
        form.submit();
    }
}

/* to run func تشغيل  */
form.addEventListener('submit', handleSubmit);
