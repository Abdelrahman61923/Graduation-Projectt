const emailInput = document.querySelector('input[type="email"]');
const passwordInput = document.querySelector('input[type="password"]');
const loginButton = document.querySelector('button');

loginButton.addEventListener('click', async (event) => {
    event.preventDefault();

    const email = emailInput.value;
    const password = passwordInput.value;

  // Check if the email and password are empty
    if (email === '' || password === '') {
    alert('Please enter your email and password.');
    return;
    }

          /* لازم نعمل كام حساب ونجرب بعد التشغيل */
          /*   هنا المفروض نتاكد المستخد موجود قبل كده ولا لا    */

    alert('Login successful!');
    // window.location.href = '../students';    /* المفروض نعمل هنا اول صفحه للطالب في الموقع  */
    /* اسم صفحة الطالب */
});





























  // Check if the account exists
  // You can send a request to your server here to check if the account exists
  // If the account does not exist, display an error message
  // If the account exists, continue with the login process

  // Login the user
  // You can send a request to your server to log in the user
  // If the login is successful, redirect the user to the main page
  // If the login is not successful, display an error message

  // The following code is just a placeholder











