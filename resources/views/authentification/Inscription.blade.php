@php
    use App\Models\filiere;

    $filiers = filiere::all();

@endphp
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Inscription </title>
    <link rel="shortcut icon" href="/assets/Home/images/uiz.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="/assets/Home/css/formulaire.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .user-details .input-box select {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>


    <div class="container">
        @if (session('success'))
        <x-alertement type="success">
            {{ session('success') }}
        </x-alertement>
    @endif
    @if ($errors->any())
        <ul>
            <x-alertement type="danger">

                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
        </ul>
        </x-alertement>

 @endif
        <div class="title">Formulaire d'inscription</div>
        <div class="content">
            <form action="{{ route('Inscription.creation') }}"  method="POST"
            onsubmit="return Validate()">
                @csrf
                <div class="user-details">
                    <div class="input-box" id="title">
                        <span class="details">Nom </span>
                        <input type="text" name="nom" id="nom" NAMplaceholder="Entrer votre nom">
                        <h6 class="error" id="nomError"></h6>

                    </div>
                    <div class="input-box">
                        <span class="details">Prénom </span>
                        <input type="text"  name="prenom" id="prenom" placeholder="Entrer votre prénom">
                        <h6 class="error" id="prenomError"></h6>


                    </div>
                    <div class="input-box">
                        <span class="details">Date de naissance</span>
                        <input type="date" name="date_naissance" id="date_naissance" placeholder="Entrer votre date de naissance">
                        <h6 class="error" id="date_de_naissanceerror"></h6>

                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" id="email" placeholder="Entrer votre email">
                        <h6 class="error" id="email_error"></h6>
                    </div>

                    <div class="input-box">
                        <span class="details">Téléphone</span>
                        <input type="text" name="tele" id="tele" placeholder="Entrer votre numéro de téléphone">
                        <h6 class="error" id="telephoneerror"></h6>

                    </div>
                    <div class="input-box">
                        <span class="details" >Ville di residance</span>
                        <select required name="ville">
                            <option value="Casablanca" selected>Casablanca</option>
                            <option value="Rabat">Rabat</option>
                            <option value="tanja">Tanja</option>
                            <option value="safi">Safi</option>
                            <option value="taroudant">Taroudant</option>
                        </select>

                    </div>
                    <div class="input-box">
                        <span class="details">Filiere</span>
                        <select required name="filiere">
                            @foreach ($filiers as $filier)
                                <option value="{{ $filier->id }}">{{ $filier->titre }}</option>
                            @endforeach
                        </select>

                        </select>

                    </div>
                    <div class="input-box">
                        <span class="details">Mot de passe</span>
                        <input type="password"  name="pass" id="password" placeholder="Entrer votre mot de passe">
                        <h6 class="error" id="passwordeerror"></h6>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirmer le mot de passe</span>
                        <input type="password" name="confpass" id="confpassword" placeholder="Confirmer votre mot de passe">
                        <h6 class="error" name="confpass" id="confpasswordeerror"></h6>
                    </div>
                    <div class="input-box">
                        <span class="details">CNE</span>
                        <input type="text" id="CNE" name="CNE" >
                        <h6 class="error"  id="CNE"></h6>
                    </div>
                </div>

                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="M">
                    <input type="radio" name="gender" id="dot-2"  value="F">
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
