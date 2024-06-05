<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilízame</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="Icon" href="img/Icono.ico" as="style">
</head>
<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4 text-center">Login de Usuario</h3>
                                <!-- Sign In Form -->
                                <form method="post" action="servidor/login/logear.php">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                                        <label for="usuario">Usuario</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Entrar</button>
                                        <div class="text-center">
                                            <a class="small" href="registro.php" style="color:black; text-decoration:none;">¡Regístrate aquí!</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
