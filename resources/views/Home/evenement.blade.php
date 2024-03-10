<x-compementHome title="Evenement">
    <!-- ======================slider section started====================== -->

    <section id="carouselExampleFade" class="carousel slide carousel-fade slider" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/Home/images/slider/1.jpg" class="d-block" alt="...">
                <div class="carousel-caption">
                    <h2>Event 1</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui perspiciatis, eveniet sequi labore
                        vel itaque adipisci odio necessitatibus voluptatibus saepe, impedit enim unde velit amet rem,
                        suscipit corrupti vero ad.</p>
                    <div class="button-01">
                        <ul>
                            <li><a href="{{ route('evenement.detialls', 1) }}">Voir detailles</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/Home/images/slider/2.jpg" class="d-block" alt="...">
                <div class="carousel-caption">
                    <h2>Event 2</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui perspiciatis, eveniet sequi labore
                        vel itaque adipisci odio necessitatibus voluptatibus saepe, impedit enim unde velit amet rem,
                        suscipit corrupti vero ad.</p>
                    <div class="button-01">
                        <ul>
                            <li><a href="{{ route('evenement.detialls', 1) }}">Voir detailles</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/Home/images/slider/3.jpg" class="d-block" alt="...">
                <div class="carousel-caption">
                    <h2>Event 3</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui perspiciatis, eveniet sequi labore
                        vel itaque adipisci odio necessitatibus voluptatibus saepe, impedit enim unde velit amet rem,
                        suscipit corrupti vero ad.</p>
                    <div class="button-01">
                        <ul>
                            <li><a href="{{ route('evenement.detialls', 1) }}">Voir detailles</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

    <section class="bg-02">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>événements</h2>
                    </div>
                </div>
                @foreach ($evenements as $evenement)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-box">
                            <div class="feature-card">
                                <a href="{{ route('evenement.detialls', $evenement) }}"><i class="fa-solid fa-link"></i></a>
                                <img src="assets/image/actualite/{{$evenement->image}}">
                            </div>
                            <div class="content">
                                <h3>{{$evenement->Titreactualites}}</h3>
                                <p>{{$evenement->Descriptionactualites}}</p>
                                <ol>
                                    <li>{{$evenement->dateactualites}}</li>
                                    <li>{{$evenement->placeevenement}}</li>
                                    <li>{{$evenement->dateactualites}}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
@endforeach
            </div>
        </div>
    </section>


</x-compementHome>
