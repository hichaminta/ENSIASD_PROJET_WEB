    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    function ValidateLogin() {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var emailError = document.getElementById('emailError');
        var passwordError = document.getElementById('passwordError');
        emailError.innerHTML = '';
        passwordError.innerHTML = '';
        if (email.trim() === '') {
            emailError.innerHTML = 'Veuillez entrer votre email';
        } else if (!validateEmail(email)) {
            emailError.innerHTML = 'Format email invalide';
        }
        if (password.trim() === '') {
            passwordError.innerHTML = 'Veuillez entrer votre mot de passe';
        }
        return true;
    }
