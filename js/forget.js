document.addEventListener("DOMContentLoaded", function () {
    const emailInput = document.querySelector('input[type="email"]');
    const passwordInput = document.querySelector('input[type="password"]');
    const submitButton = document.querySelector('button');

    submitButton.addEventListener('click', function (event) {
        event.preventDefault(); 

        const email = emailInput.value;
        const password = passwordInput.value;
        
        /* لما يتعمل api */
        // Simulate a  request
        setTimeout(function () {
            alert('Password recovery email sent to ' + email);
        }, 2000); 
/*         window.location.href = 'confirmation.html';
 */        
        alert('Password recovery initiated for ' + email);

        // You can add further logic for password recovery here.
    });
});
