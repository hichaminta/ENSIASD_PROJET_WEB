<x-compementHome title="ENSIASD">
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
                            <li><a href="#">Voir detailles</a></li>
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
                            <li><a href="#">Voir detailles</a></li>
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
                            <li><a href="#">Voir detailles</a></li>
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

    <!-- ====================== section started====================== -->

    <section class="bg-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="content">
                            <h3>Nos prochains projets</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-globe-americas"></i>
                        </div>
                        <div class="content">
                            <h3>E-learning</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <h3>Nos lauréats </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="se-box">
                        <div class="icon">
                            <i class="fal fa-backpack"></i>
                        </div>
                        <div class="content">
                            <h3>Bourses et Partenaires </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Featured started======================-->


    <section class="bg-03">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-users"></i>
                        <div class="counting" data-count="{{$nombre_etudiants}}">0</div>
                        <h5>Etudiants</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-graduation-cap"></i>
                        <div class="counting" data-count="{{$nombre_fil}}">0</div>
                        <h5>Filières</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="_lk_bg_cd">
                        <i class="fal fa-chalkboard-teacher"></i>
                        <div class="counting" data-count="10">0</div>
                        <h5>Enseignants</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ====================== Blog Section started====================== -->

    <section class="bg-04">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>les dernières actualités
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($actualites as $actualite)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <article class="_lk_bg_sd_we">
                            <div class="_bv_xs_we" style="background:url(assets/image/actualite/{{$actualite->image}}"></div>
                            <div class="_xs_we_er">
                                <div class="_he_w">
                                    <h3>{{$actualite->Titreactualites}}</h3>
                                    <ol>
                                        <li>{{$actualite->Createur}}<span class="_mn_cd_xs">{{$actualite->dateactualites}}</span></li>
                                    </ol>
                                    <p>{{$actualite->Descriptionactualites}}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-compementHome>
