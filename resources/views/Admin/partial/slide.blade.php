<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">
            <img src="../assets/Home/images/logo0001.png" alt="" style="width: 100%;">

        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Gestion des evenement/article
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.evnement.index')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Gestion des evenement</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.actualite.index')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Gestion des article</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Gestion des filiere
    </div>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>Gestion des filieres</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-book"></i>
            <span>Gestion des emploi de temps</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->


    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
