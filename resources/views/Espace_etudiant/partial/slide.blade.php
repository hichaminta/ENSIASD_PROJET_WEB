<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">
            <img src="/assets/Home/images/logo0001.png" alt="" style="width: 100%;">
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Examan
    </div>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-book"></i> <!-- Changed icon here -->
            <span>Examen</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-user"></i>
            <span>Notes</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Emplois de temps
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('espace_etudiant.emploi_de_temps')}}">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>Emplois de temps</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        Actualités
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('home.index')}}">
            <i class="fas fa-fw fa-bookmark"></i>
            <span> Actualités
            </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('evenement.index')}}">
            <i class="fas fa-fw fa-bookmark"></i>
            <span> Evenement
            </span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
