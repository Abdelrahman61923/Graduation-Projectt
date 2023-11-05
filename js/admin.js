// admin.js
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector("form");
    const emailInput = document.querySelector('input[type="email"]');
    const passwordInput = document.querySelector('input[type="password"]');
    const loginButton = document.querySelector("button");

    loginForm.addEventListener("submit", function (event) {
        event.preventDefault(); 

        const email = emailInput.value;
        const password = passwordInput.value;

        /*  ### مش هيدخل غير الاكونت ده بس   ###*/
        const storedEmail = "admin@example.com";
        const storedPassword = "admin123";

        if (email === storedEmail && password === storedPassword) {
            alert("Admin login successful!");

            /* تحويل للادمن كنترول */
            window.location.href = "../admin";
        } else {
            /* اكتب الاكونت اللي فوق بس  or it will give you error */
            alert("Admin login failed. Please check your credentials.");
        }
    });
});















