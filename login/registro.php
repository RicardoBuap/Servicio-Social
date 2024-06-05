<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilízame</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5>
                        <form action="servidor/registro/registrar.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="myusername" required autofocus>
                                <label for="usuario">Usuario</label>
                            </div>
                            <hr>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <!-- <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                                <label for="floatingPasswordConfirm">Confirm Password</label>
                            </div> -->
                            <div class="d-grid mb-2">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
                            </div>
                            <a class="d-block text-center mt-2 small" href="login.php" style="text-decoration: none; color:black;">¿Ya tienes una cuenta?</a>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>
