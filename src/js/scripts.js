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
})