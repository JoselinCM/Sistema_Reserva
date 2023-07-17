
<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: iniciar-sesion.php");
	}
	
	$nombres = $_SESSION['nombres'];
    $id = $_SESSION['id'];
	$cargo_idc = $_SESSION['cargo_idc'];
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>7Sopas Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">7S Perfil <sup>1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <?php if($cargo_idc == 1) { ?>
            <li class="nav-item active">
                <a class="nav-link" href="reserva.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reserva</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="clientes.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Clientes</span></a>
            </li>

            <li class="nav-item">
                    <a class="nav-link" href="stockMesa.php">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Stock (Mesa)</span></a>
                </li>

            <?php } else {?>

            <li class="nav-item">
                <a class="nav-link" href="realizar-reserva.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Realizar Reserva</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="listar-reserva.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Mis Reservas</span></a>
            </li>

            <?php }?>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nombres ?> &nbsp;</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil-usuario.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">
                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Listar Reservas</h1>
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <br>

                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST" action="controlador/filtrarReserva.php">
                            <div class="input-group">
                                <label>Fecha Desde:&nbsp;</label>
                                <input type="date" name="date1" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                                &nbsp; &nbsp;<label>Hasta:</label>
                                &nbsp;<input type="date" name="date2" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" name="buscar"  type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>N° Personas</th>
                                            <th>Fecha</th>
                                            <th>Tipo Comida</th>
                                            <th>Hora</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    
                                    <?php
                                        $cont = 1;
                                        require("Config/Conexion.php");
                                        $sql = $conexion->query("SELECT * FROM reserva r JOIN usuario u ON r.usuario_idu = u.id JOIN estado e ON r.estado_id_estado = e.id_estado");
                                        while($resultado = $sql->fetch_assoc()) { ?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $cont; $cont++; ?></td>
                                            <td><?php echo $resultado['nombres']; ?></td>
                                            <td><?php echo $resultado['apellidos']; ?></td>
                                            <td><?php echo $resultado['cantidad']; ?></td>
                                            <td><?php echo $resultado['fechar']; ?></td>
                                            <td><?php echo $resultado['tipo']; ?></td>
                                            <td><?php echo $resultado['hora']; ?></td>
                                            <?php if($resultado['nestado']=="FINALIZADO"){?>
                                            <td><?php echo $resultado['nestado']; ?></td>
                                            <?php }else{ ?>
                                            <td><?php echo $resultado['nestado']; ?>&nbsp; &nbsp; &nbsp;<a href="actualizarEstado.php?id=<?php echo $resultado['idr']?>&estado=<?php echo $resultado['nestado']?>&user=<?php echo $resultado['usuario_idu'];?>" class="btn btn-primary"><i class="fas fa-marker"></i></a></td>
                                            <?php } ?>
                                            <td>
                                                <a href="detallesReserva.php?id=<?php echo $resultado['idr']?>" class="btn btn-primary"><i class="fas fa-list"></i></a>
                                                <a href="https://api.whatsapp.com/send?phone=51<?php echo $resultado['numero']?>&text=Buen%20día%20, <?php echo $resultado['nombres']?>%20<?php echo $resultado['apellidos'] ?>%20tienes
%20una%20reserva%20el%20día%20de%20hoy%20<?php echo $resultado['hora']?>" class="btn btn-success"><i class="fas fa-share"></i></a>
                                            </td>
                                        </tr>

                                        <?php } ?> 

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Grupo 5  2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Lista para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="cerrar-sesion.php">Cerrar sesión</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>