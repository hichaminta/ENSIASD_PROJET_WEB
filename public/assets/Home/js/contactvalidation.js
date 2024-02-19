function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    function Validate() {
        var nom = document.getElementById('nom').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;
        // Error div
        var nomError = document.getElementById('Nomerror');
        var email_error = document.getElementById('emailerror');
        var subjecterror = document.getElementById('subjecterror');
        var phoneerror = document.getElementById('phoneerror');
        var messageerror = document.getElementById('messageerror');

        nomError.innerHTML = '';
        email_error.innerHTML = '';
        subjecterror.innerHTML = '';
        phoneerror.innerHTML = '';
        messageerror.innerHTML = '';
        var i=0;
        if (nom.trim() === '') {
            nomError.innerHTML = 'Veuillez entrer votre nom';
            i=1;
        }

        if (email.trim() === '') {
            email_error.innerHTML = 'Veuillez entrer votre email';
            i=1;

        } else if (!validateEmail(email)) {
            email_error.innerHTML = 'Format email invalide';
            i=1;

        }
        if (phone.trim() === '') {
            phoneerror.innerHTML = 'Veuillez entrer votre téléphone';
            i=1;


        } else if (!/^\d{10}$/.test(phone)) {
            phoneerror.innerHTML = 'Numéro de téléphone invalide. Doit être composé de 10 chiffres';
            i=1;

        }
        if (subject.trim() === '') {
            subjecterror.innerHTML = 'Veuillez entrer votre sujet';
            i=1;

        }
        if (message.trim() === '') {
            messageerror.innerHTML = 'Veuillez entrer votre message';
            i=1;

        }
        if(i==0){
            return true;

        }
        else{
            return false;
        }
    }

