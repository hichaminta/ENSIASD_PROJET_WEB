@php
use App\Models\filiere;

    $filiers = filiere::all();

@endphp
<header>

    <div class="my-nav">
        <div class="container">
            <div class="row">
                <div class="nav-items">
                    <div class="menu-toggle mt-4"></div>
                    <div class="logo">
                        <a href="{{route('home.index')}}" target="_self"> <img src="assets/Home/images/logo0001.png" width="80%"></a>
                    </div>
                    <div class="menu-items mt-2">
                        <div class="menu">
                            <ul>
                                <li><a href="{{route('home.index')}}">École</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Présentation</a></li>
                                        <li><a href="#">Ecosystème</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('evenement.index')}}">Evennement</a></li>
                                <li><a href="">Formation</a>

                                    <ul class="sub-menu">
                                        @foreach ($filiers as $filier )
                                        <li><a href="assets/pdf/{{$filier->pdf}}" download>{{$filier->titre}}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li><a href="{{route('contact.index')}}">Contact</a></li>
                                <li class="menu-item6">
                                    <a href="{{route('Login.index')}}">
                                        <img src="assets//Home/images/user.png" alt="login" style="width: 30px; height: 30px;">
                                        Espace étudiant
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
