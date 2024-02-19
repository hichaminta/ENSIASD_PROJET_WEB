<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Inscription </title>
    <link rel="shortcut icon" href="/assets/Home/images/uiz.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="/assets/Home/css/formulaire.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


    <div class="container">
        <div class="title">Formulaire d'inscription</div>
        <div class="content">
            <form  action="#" onsubmit="return Validate()">

                <div class="user-details">
                    <div class="input-box" id="title">
                        <span class="details">Nom </span>
                        <input type="text" id="nom" placeholder="Entrer votre nom">
                        <h6 class="error" id="nomError"></h6>

                    </div>
                    <div class="input-box">
                        <span class="details">Prénom </span>
                        <input type="text" id="prenom" placeholder="Entrer votre prénom">
                        <h6 class="error" id="prenomError"></h6>


                    </div>
                    <div class="input-box">
                        <span class="details">Date de naissance</span>
                        <input type="date" id="date_naissance" placeholder="Entrer votre date de naissance">
                        <h6 class="error" id="date_de_naissanceerror"></h6>

                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" id="email" placeholder="Entrer votre email">
                        <h6 class="error" id="email_error"></h6>
                    </div>
                    <div class="input-box">
                        <span class="details">Téléphone</span>
                        <input type="text" id="tele" placeholder="Entrer votre numéro de téléphone">
                        <h6 class="error" id="telephoneerror"></h6>

                    </div>
                    <div class="input-box">
                        <span class="details">Ville</span>
                        <input type="search" id="ville" placeholder="Entrer votre ville de Résidence">
                        <h6 class="error" id="villeerror"></h6>

                    </div>
                    <div class="input-box">
                        <span class="details">Mot de passe</span>
                        <input type="password" id="password" placeholder="Entrer votre mot de passe">
                        <h6 class="error" id="passwordeerror"></h6>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirmer le mot de passe</span>
                        <input type="password" id="confpassword" placeholder="Confirmer votre mot de passe">
                        <h6 class="error" id="confpasswordeerror"></h6>

                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Genre</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Masculin</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Féminin</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value=" S'inscrire ">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<script src="/assets/Home/js/validation_inscription.js"></script>
