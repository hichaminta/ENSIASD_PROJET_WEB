<x-compementHome title="Conatct ENSIAD">

    <link rel="stylesheet" href="assets/Home/css/contact.css">
    <section class="bg-02-a">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_head_01">

                        <h1>Contactez-nous</h1>
                        <p>Accueil<i class="fas fa-angle-right"></i><span>Contactez-nous</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== contact Form Section started====================== -->

    <section class="_pl_rt">

        <div class="container col-12">
            <div class="col-12">
                <h1 style="text-align: center;">École Nationale Supérieure de l'Intelligence Artificielle et Sciences
                    des Données</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="_lo_we_ds">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="far fa-location"></i>
                                            <h3>Adresse </h3>F4VM+7CW, Taroudant
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="far fa-envelope"></i>
                                            <h3>Email</h3>ensiasd@gmail.com
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="_ol_we_as">
                                    <ol>
                                        <li><i class="fas fa-mobile-alt"></i>
                                            <h3>Tel</h3>0000000000
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== Form started====================== -->
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
    <section class="my-pla">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 style="color:#fff;">Contactez-nous</h2>
                    </div>
                </div>
            </div>
            <form action="{{ route('contact.create') }}" method="POST" onsubmit="return Validate()">
                @csrf

                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="name">Nom <small>*</small></label>
                            <input id="nom" name="name" class="form-control _ge_de_ol" type="text"
                                placeholder="Entrer Nom" required="" aria-required="true">
                            <h6 id="Nomerror"></h6>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="name">Email <small>*</small></label>
                            <input id="email" name="email" class="form-control _ge_de_ol" type="email"
                                placeholder="Entrer Email" required="" aria-required="true">
                            <h6 id="emailerror"></h6>

                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="name">Sujet <small>*</small></label>
                            <input id="subject" name="subject" class="form-control _ge_de_ol" type="text"
                                placeholder="Entrer Sujet" required="" aria-required="true">
                            <h6 id="subjecterror"></h6>

                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label for="name">Tel <small>*</small></label>
                            <input id="phone" name="phone" class="form-control _ge_de_ol" type="text"
                                placeholder="phone nomber" required="" aria-required="true">
                            <h6 id="phoneerror"></h6>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control required" rows="5" placeholder="Ent le Message"
                                aria-required="true"></textarea>
                            <h6 id="messageerror"></h6>

                            <div class="text-right">
                                <input type="submit" class="gold-button" value="Envoyer">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </section>
    <!-- ====================== Map started====================== -->

    <section class="mab-01 mt-3 mb-2 mx-2" style="border-style: solid; border-color: #FDC800;">
        <iframe style="width:100%"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2869.459857261038!2d-8.869017925348889!3d30.493316897165617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb173001472dcc1%3A0x3f2507f09223083!2sEcole%20Nationale%20Sup%C3%A9rieure%20de%20l&#39;Intelligence%20Artificielle%20et%20Sciences%20des%20Donn%C3%A9es!5e1!3m2!1sfr!2sma!4v1706972956373!5m2!1sfr!2sma"
            height="450" frameborder="0" allowfullscreen=""></iframe>
    </section>
    <style>
        .gold-button {
            background-color: gold;
            color: #fff;
            /* Change the text color as needed */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .gold-button:hover {
            background-color: goldenrod;
            /* Change the color on hover if desired */
        }
    </style>
    <script src="/assets/Home/js/contactvalidation.js"></script>

</x-compementHome>
