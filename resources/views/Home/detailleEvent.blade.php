<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/Home/css/event.css">


    <link rel="shortcut icon" href="/assets/Home/images/uiz.png" type="image/vnd.microsoft.icon">
    <title>evenement 1| description </title>
</head>
<body>

<div class="container">
    <img src="/assets/Home/images/featured/events.jpg" alt="Image descriptive de l'événement" class="event-image">
    <div class="details">
        <h1>{{$evenement->Titreactualites}}</h1>
        <div class=" engra">
        <p>Date: {{$evenement->dateactualites}}</p>
        <p>Lieu: {{$evenement->placeevenement}}</p>
    </div>
        <p>{{$evenement->Descriptionactualites}}</p>
    </div>
</div>
</body>
</html>
