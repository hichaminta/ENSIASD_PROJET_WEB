<x-compementetudiant title="Espace etudiant">
<link rel="stylesheet" href="assets/Etudiant/css/cards_annonce.css">
 @foreach ($annonces as $annonce )
 <div class="container">
    <div class="announcement-header">
        <h2 class="announcement-title">{{$annonce->titre}}</h2>
    </div>
    <div class="announcement-content">
        <p>Bonjour  Etudiants</p>
        <p>{{$annonce->Description}}</p>
        <ul>
            <li>Date: {{$annonce->date_annonce}}</li>
        </ul>
        <p>Best regards,<br>Directeur</p>
    </div>
</div>
 @endforeach


</x-compementetudiant>
