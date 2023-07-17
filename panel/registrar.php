<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>7S Registrar</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style ="background-color:#ffb03b">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5"><img src="img/mesas.jpg" width="500" ></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">¡Crea una cuenta!</h1>
                            </div>
                            <form action="controlador/guardarUsuario.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="nombres" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombres">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="apellidos"class="form-control form-control-user" id="exampleLastName" placeholder="Apellidos">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <input type="date" name="fecha" class="form-control form-control-user" placeholder="Fecha Nacimiento">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" name="dni" class="form-control form-control-user" placeholder="N° Documento">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" name="celular" class="form-control form-control-user" placeholder="N° Celular">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="direccion" class="form-control form-control-user" id="exampleLastName" placeholder="Dirección">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Correo electrónico">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                                    </div>
                                    <input type="text" name="estado" value="ACTIVO" style="display:none">
                                    <input type="text" name="tipo" value="2" style="display:none">
                                </div>
                                <button type="submit" name="guardar" class="btn btn-warning btn-user btn-block">Registrar Cuenta</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">¿Has olvidado tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="iniciar-sesion.php">¿Ya tienes una cuenta? ¡Acceso!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>