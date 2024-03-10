<x-compementetudiant title="Espace etudiant">
    <link rel="stylesheet" href="assets/Etudiant/css/cards_annonce.css">
    @foreach ($emplois_de_temps as $emploi_de_temps)
        <div class="container">
            <div class="announcement-header">
                <h2 class="announcement-title"></h2>
            </div>
            <div class="announcement-content">
                <p> <a href="assets/pdf/emploi_de_temps/{{$emploi_de_temps->pdf}}">{{$emploi_de_temps->titre}}</a></p>
            </div>
        </div>
    @endforeach


</x-compementetudiant>
