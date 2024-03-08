<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>login</title>

    <link rel="shortcut icon" href="/assets/Home/images/fav.jpg">
    <link rel="stylesheet" href="/assets/Home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/Home/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/Login/css/style.css" />
</head>

<body>
    <div class="container-fluid ">

        <div class=" no-pdding login-box">
            <div class="row no-margin w-100 bklmj">
                <div class="col-lg-6 col-md-6 log-det">

                    <h2>Connexion</h2>


                    <div class="row no-margin past">
                        <p>N'avez-vous pas de compte ?<span> Créez votre compte</span> </p>
                    </div>

                    <form action="#" onsubmit="ValidateLogin()" >

                        <div class="text-box-cont">
                            <div class="input-group mb-3">

                                <input type="email" class="form-control" placeholder="email" aria-label="Username"
                                    aria-describedby="basic-addon1" id="email">
                            </div>
                            <div class="input-group mb-3">
                                <h6 class="error" id="emailError"></h6>
                                </div>
                            <div class="input-group mb-3">

                                <input type="password" id="password" class="form-control" placeholder="mot de passe"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="row no-margin">
                                <a href="#">
                                    <p class="forget-p">Mot de passe oublié ?</p>
                                </a>
                            </div>
                            <div class="input-group mb-3">
                                <h6 class="error"  id="passwordError"></h6>
                            </div>

                            <div class="right-bkij mb-3">
                                <button type="submit" class="btn btn-success btn-round">Connexion</button>
                            </div>
                            <br>
                        </div>

                    </form>

                </div>
                <div class="col-lg-6 col-md-6 box-de">
                    <a class="ditk-inf">
                        <h2 class="w-100">Bienvenue A  ENSIASD</h2>
                        <p>Créez simplement votre compte en <br>cliquant sur le bouton S'inscrire</p>
                        <a href="{{route('Inscription.index')}}"><button type="button"
                                class="btn btn-outline-light">S'inscrire</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<script src="/assets/Home/js/jquery-3.2.1.min.js"></script>
<script src="/assets/Home/js/popper.min.js"></script>
<script src="/assets/Home/js/bootstrap.min.js"></script>
<script src="/assets/Home/js/script.js"></script>
<script src="/assets/Login/js/validation.js"></script>


</html>
