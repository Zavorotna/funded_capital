document.addEventListener("DOMContentLoaded", function () {
    const emailInputs = document.querySelectorAll("input[name='email']"),
        emailPattern = /^[a-zA-Z][a-zA-Z0-9_-]+[a-zA-Z0-9]@([a-z_-]+(\.\w+)?(\.\w{2,3}))$/;

    emailInputs.forEach(input => {
        input.addEventListener("input", function (e) {
            const emailValue = input.value.trim();
            if (!emailPattern.test(emailValue)) {
                input.style.borderColor = '#EB4242';
                input.style.color = '#EB4242';
                return false;
            } else {
                input.style.borderColor = 'green';
                input.style.color = '#121212';
            }
        })
    })
    if(document.querySelector("#loginForm")) {
        const loginForm = document.querySelector("#loginForm"),
            signupForm = document.querySelector("#signupForm"),
            bottomText = document.querySelector("#bottomText"),
            loginBtn = document.querySelector("#loginBtn"),
            signupBtn = document.querySelector("#signupBtn"),
            switchToSignup = document.querySelector("#switchToSignup"),
            switchToLogin = document.querySelector("#switchToLogin")
            
        function showLoginForm(e) {
            e.preventDefault()
            loginForm.classList.remove("hidden")
            loginBtn.classList.add("black_cta")
            signupBtn.classList.remove("black_cta")
            signupForm.classList.add("hidden")
            bottomText.classList.add("hidden")
        }
        
        function showSignupForm(e) {
            e.preventDefault()
            signupForm.classList.remove("hidden")
            loginBtn.classList.remove("black_cta")
            signupBtn.classList.add("black_cta")
            loginForm.classList.add("hidden")
            bottomText.classList.remove("hidden")
        }
        
        loginBtn.addEventListener("click", showLoginForm)
        signupBtn.addEventListener("click", showSignupForm)
        switchToSignup.addEventListener("click", showSignupForm)
        switchToLogin.addEventListener("click", showLoginForm)
    }

})