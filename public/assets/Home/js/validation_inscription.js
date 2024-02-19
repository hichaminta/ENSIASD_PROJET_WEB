function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function Validate() {
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var date = document.getElementById('date_naissance').value;
    var email = document.getElementById('email').value;
    var tele = document.getElementById('tele').value;
    var ville = document.getElementById('ville').value;
    var password = document.getElementById('password').value;
    var confpassword = document.getElementById('confpassword').value;
    // Error div
    var nomError = document.getElementById('nomError');
    var prenomError = document.getElementById('prenomError');
    var Date_de_naissanceerror = document.getElementById('date_de_naissanceerror');
    var email_error = document.getElementById('email_error');
    var telephoneerror = document.getElementById('telephoneerror');
    var villeerror = document.getElementById('villeerror');
    var passwordeerror = document.getElementById('passwordeerror');
    var confpasswordeerror = document.getElementById('confpasswordeerror');
    nomError.innerHTML = '';
    prenomError.innerHTML = '';
    Date_de_naissanceerror.innerHTML = '';
    email_error.innerHTML = '';
    villeerror.innerHTML = '';
    telephoneerror.innerHTML = '';
    passwordeerror.innerHTML = '';
    confpasswordeerror.innerHTML = '';
    if (nom.trim() === '') {
        nomError.innerHTML = 'Veuillez entrer votre nom';
    }
    if (prenom.trim() === '') {
        prenomError.innerHTML = 'Veuillez entrer votre prénom';
    }

    if (date.trim() === '') {
        Date_de_naissanceerror.innerHTML = 'Veuillez entrer votre date naissance';
    }
    if (email.trim() === '') {
        email_error.innerHTML = 'Veuillez entrer votre email';
    } else if (!validateEmail(email)) {
        email_error.innerHTML = 'Format email invalide';
    }

    if (ville.trim() === '') {
        villeerror.innerHTML = 'Veuillez entrer votre ville';
    }
    if (tele.trim() === '') {
        telephoneerror.innerHTML = 'Veuillez entrer votre telephone';

    }else if (!/^\d{10}$/.test(tele)) {
    telephoneerror.innerHTML = 'Numéro de téléphone invalide ET Doit etre 10 chifre';
       }
console.log(tele.length);
    if (password.trim() === '') {
        passwordeerror.innerHTML = 'Veuillez entrer votre password';
    }else if (password.length < 8) {
    passwordeerror.innerHTML = 'Le mot de passe doit contenir au moins 8 caractères';

}else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}/.test(password)) {
passwordeerror.innerHTML = 'Le mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre, et être d\'au moins 8 caractères';

}
    if (confpassword.trim() === '') {
        confpasswordeerror.innerHTML = 'Veuillez confirmer votre password';
    }
    // You may also want to add a check to see if the passwords match
    if (password !== confpassword) {
        confpasswordeerror.innerHTML = 'Les mots de passe ne correspondent pas';
    }
    return true;
}
