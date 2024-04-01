<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle"
                    src="/assets/Home/images/user.png">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <button class="dropdown-item" data-toggle="modal" data-target="#motdpass_modale">
                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                    Changer le mot de passe
                </button>



                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal"
                    data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>


            </div>
        </li>

    </ul>

</nav>
<div class="modal fade" id="motdpass_modale" tabindex="-1" role="dialog"
            aria-labelledby="motdpass_modaleLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="motdpass_modaleLabel">changer password </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">

                            <div class="form-group">
                                <label for="categoryName"> Ancienne password :</label>
                                <input type="text" class="form-control"name="Ancienne_password"
                              required>
                            </div>

                            <div class="form-group">
                                <label for="categoryName"> password :</label>
                                <input type="text" class="form-control"name="password"
                              required>
                            </div>
                            <div class="form-group">
                                <label for="categoryName">Confirmer password :</label>
                                <input type="text" class="form-control"name="password_confirmation"
                              required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

