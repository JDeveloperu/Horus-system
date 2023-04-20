<?php

session_start();
require "conexion.php";
require "datos_depositos.php";

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}


$nombres = $_SESSION['nombres'];
$tipo_usuario = $_SESSION['tipo_usuario'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Somos mas que tecnologia, somos la inclusión a la tecnologia web 3.0" />
    <meta name="author" content="CDX-Solutions" />
    <title>Horus System</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="depositos.css">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="principal.php">HORUS GLOBAL</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>-->
        ?>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-3 me-lg-4 me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php echo $nombres; ?><i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Configuración</a></li>
                    <!--<li><a class="dropdown-item" href="#!">Activity Log</a></li>-->
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Salir</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="principal.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Panel Principal
                        </a>

                        <!-- Privilegios usuario 1 - inicio-->
                        <?php if ($tipo_usuario == 1) { ?>


                            <div class="sb-sidenav-menu-heading">Finanzas</div>

                            <!--NAVBAR_________________ LATERAL__________________ GESTION_________________ DE_______________ FINANZAS-->

                            <!--NAVBAR LATERAL GESTION HORUS GLOBAL-->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapseGestionhg" aria-expanded="false" aria-controls="collapseGestionhg">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestión Horus Global
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseGestionhg" aria-labelledby="headingOne"
                                data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Clientes</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Contratos</a>
                                </nav>
                            </div>


                            <!--NAVBAR LATERAL DEPOSITOS-->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapseDepositos" aria-expanded="false" aria-controls="collapseDepositos">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Depositos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseDepositos" aria-labelledby="headingTwo"
                                data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="aumentar-fondos.php">Aumentar Fondos</a>
                                    <a class="nav-link" href="layout-static.html">Comprar Nueva Membresia</a>
                                </nav>
                            </div>


                            <!--NAVBAR LATERAL RETIROS-->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapseRetiros" aria-expanded="false" aria-controls="collapseRetiros">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Retiros
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseRetiros" aria-labelledby="headingTree"
                                data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="layout-static.html">Retirar Fondos</a>
                                    <a class="nav-link" href="layout-static.html">Actualizar Wallet-USDT</a>
                                </nav>
                            </div>


                            <!-- Cierre de privilegios usuario 1-->
                        <?php } ?>


                        <div class="sb-sidenav-menu-heading">Network</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Mis Referidos
                        </a>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Matriz 360
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Salon de la Fama
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Conectado como: </div>
                    <?php if ($tipo_usuario == 1) { ?>
                        GESTOR HORUS
                    <?php } else { ?>
                        INVERSOR 3.0
                    <?php } ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Aumenta tus Fondos</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">*Revisa bien el tipo de Red que usaras para enviar tus USDT,
                            en caso que se envie por una red diferente a nuestra wallet, tus fondos pueden perderse y
                            nuestro sistema te brindaria el soporte para intentar recuperar tus fondos sin asegurar la
                            recuperación de los mismos, por favor revise las veces necesarias toda la información de su
                            proceso de envio antes de concretarlo.</li>
                    </ol>
                    <!--ACA TOCA COLOCAR EL LINK DE REFERIDO Y BOTON DE COPIAR AUTOMATICO-->

                    <div class="card mb-4">
                        
                             <h1>Depositar USDT</h1>
	                    <form action="depositar_usdt.php" method="post">
		                        <label for="cantidad">Cantidad:</label>
	                    	<input type="number" step="0.0001" min="0" name="cantidad" id="cantidad" required>
	                        	<br><br>
	                        	<label for="direccion">Dirección de la wallet:</label>
	                    	<input type="text" name="direccion" id="direccion" required>
	                        	<br><br>
	                    	<input type="submit" value="Enviar">
	                    </form>
                        

                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Horus Global 2023</div>
                        <div>
                            <a href="#">Politica de Privacidad</a>
                            &middot;
                            <a href="#">Terminos &amp; Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>