<style>
    .icono-texto {
        display: flex;
        align-items: center;
    }
</style>
<body>
    <nav class="navbar fixed-top">
        <div class="container-fluid justify-content-start">
            <!-- <a class="navbar-brand" href="#">Visibilízame®</a> -->
            <button class="navbar-toggler justify-content-center align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start background-color-dbd3f4" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="Actores.php">Actores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Periodico.php">Periódico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Violencia.php">Violencia</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Acerca de
                            </a>
                            <ul class="dropdown-menu m-0 p-0">
                                <li><a class="dropdown-item dropdown-item-dbd3f4" href="Visibilízame.php">Visibilízame</a></li>
                                <li><a class="dropdown-item dropdown-item-dbd3f4" href="manual-de-usuario.php">Guía</a></li>
                                <li><hr class="dropdown-divider m-0 p-0"></li>
                                <li><a class="dropdown-item disabled" href="#">We are  working to future options!</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <div class="contacto d-flex flex-column justify-content-center align-items-center mt-3">
                        <p class="roboto-bold text-center" style="color: #807b91;">!Contáctanos por los siguientes medios!</p>
                        <div class="iconos">
                            <!-- <div class="icono-texto d-flex align-items-cente">
                                <i class="bi bi-telephone-fill"></i>
                                <span class="ms-2 roboto-light" style="color: #807b91;">Teléfono: 222-123-4567</span>
                            </div> -->
                            <div class="icono-texto d-flex align-items-center mt-2">
                                <i class="bi bi-image"></i>
                                <span class="ms-2 roboto-light" style="color: #807b91;">Email: visibiliza_me@gmail.com</span>
                            </div>
                            <!-- <div class="icono-texto d-flex align-items-center mt-4">
                                <i class="bi bi-instagram"></i>
                                <span class="ms-2 roboto-light" style="color: #807b91;">Instagram: @VisibilizaMe</span>
                            </div> -->
                            <!-- <div class="icono-texto d-flex align-items-center mt-4 mb-4">
                                <i class="bi bi-facebook"></i>
                                <span class="ms-2 roboto-light" style="color: #807b91;">Facebook: @VisibilizaMe</span>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-12 mt-4 d-flex flex-column align-items-center justify-content-center">
                        <form method="post" action="../login/servidor/login/logear.php" autocomplete="off">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                                <label for="usuario">Usuario</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-login text-uppercase fw-bold mb-2" type="submit">Entrar</button>
                                <!-- <div class="text-center">
                                    <a class="small" href="registro.php" style="color:black; text-decoration:none;">¡Regístrate aquí!</a>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>


