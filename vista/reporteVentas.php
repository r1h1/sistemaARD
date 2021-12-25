<?php

include("../controlador/csBDDCon.php");

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
    echo '<script type="text/javascript">
            window.location.href="../controlador/error/nolog.php";
    </script>';
    die();
}
?>


<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/dashboard.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Vendedores | SGE</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light p-2">Software de gestión <br> Empresarial | v1.0</ion-icon>
                </h4>
                <p class="p-2 text-light">© SGE, BalamXCode, 2021.</p>
            </div>
            <div class="menu">
                <a href="../vista/dashboard.php" class="d-block text-secondary bg-light p-3">
                    <ion-icon name="color-palette"></ion-icon> Dashboard
                </a>
                <br>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo IT</ins></p>
                    <a href="../vista/usuarios.php" class="d-block text-light p-2">
                        <ion-icon name="contact"></ion-icon> Usuarios
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo RRHH</ins></p>
                    <a href="../vista/planilla.php" class="d-block text-light p-2">
                        <ion-icon name="person-add"></ion-icon> Planilla
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Logística</ins></p>
                    <a href="../vista/proveedores.php" class="d-block text-light p-2">
                        <ion-icon name="cube"></ion-icon> Proveedores
                    </a>

                    <a href="../vista/categoriaProductos.php" class="d-block text-light p-2">
                        <ion-icon name="filing"></ion-icon> Categoría de Productos
                    </a>

                    <a href="../vista/inventario.php" class="d-block text-light p-2">
                        <ion-icon name="list-box"></ion-icon> Inventario
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Clientes</ins></p>

                    <a href="../vista/sectorizacionClientes.php" class="d-block text-light p-2">
                        <ion-icon name="map"></ion-icon> Sectorización Clientes (Rutas)
                    </a>

                    <a href="../vista/clientes.php" class="d-block text-light p-2">
                        <ion-icon name="people"></ion-icon> Clientes
                    </a>

                    <a href="../vista/creditoClientes.php" class="d-block text-light p-2">
                        <ion-icon name="card"></ion-icon> Crédito de Clientes
                    </a>

                </div>


                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Ventas</ins></p>

                    <a href="../vista/metodoPago.php" class="d-block text-light p-2">
                        <ion-icon name="cash"></ion-icon> Métodos de Pago
                    </a>

                    <a href="../vista/facturacion.php" class="d-block text-light p-2">
                        <ion-icon name="cart"></ion-icon> Facturar / Vender
                    </a>

                    <a href="../vista/reporteVentas.php" class="d-block text-light p-2">
                        <ion-icon name="grid"></ion-icon> Reporte de Ventas
                    </a>

                    <a href="../vista/facturas.php" class="d-block text-light p-2">
                        <ion-icon name="grid"></ion-icon> Facturas
                    </a>
                </div>
            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline position-relative d-inline-block my-4">
                            <input class="form-control" type="search" placeholder="Empresa | 'ARD'" aria-label="Buscar" disabled>
                            <button class="btn position-absolute btn-search" type="submit"></button>
                        </form>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="http://cdn.onlinewebfonts.com/svg/img_569193.png" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />
                                    Opciones SGE
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../vista/dashboard.php">Inicio</a>
                                    <a class="dropdown-item" href="https://wa.me/50245024363?text=DISTRIBUIDORA%20ARD,%20SISTEMA%20DE%20GESTION%20EMPRESARIAL%20EST%C3%81%20DANDO%20ERRORES,%20POR%20FAVOR%20DARME%20SOPORTE,%20GRACIAS!" target="_blank">Chatea con Soporte</a>
                                    <a class="dropdown-item" href="../controlador/login/cerrarSesion.php">Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

            <!-- Page Content -->
            <div id="content" class="w-100 bg-light">

                <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">

                            <div class="col-10">
                                <h1 class="font-weight-bold mb-0">Reporte de Ventas</h1><br>
                            </div>

                        </div>
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 mt-3">
                                        <?php

                                        //SE TRAE LA SUMA DEL TOTAl DE LAS VENTAS
                                        $sql = "SELECT SUM(Producto_PrecioCompra) * SUM(Producto_Cantidad) FROM inventario_ard";
                                        $result = mysqli_query($conexion, $sql);


                                        //SE ALMACENA EL TOTAL DE LAS VENTAS
                                        $gastado = 0;
                                        while ($mostrar = mysqli_fetch_array($result)) {
                                            $gastado = $mostrar[0];
                                        }

                                        $gastadonf = number_format($gastado, 2);
                                        clearstatcache(); 
                                        ?>
                                        <h5 class="font-weight-bold" title="Muestra la inversión que aún no se ha vendido">
                                            Por Vender: <span class="lead" style="color:red">Q <?php echo $gastadonf ?></span></h5>
                                    </div>

                                    <div class="col-12 mt-2 mb-2">
                                        <?php

                                        //SE TRAE LA SUMA DEL TOTAl DE LAS VENTAS
                                        $sql2 = "SELECT SUM(Venta_Total) FROM ventas_ard";
                                        $result2 = mysqli_query($conexion, $sql2);


                                        //SE ALMACENA EL TOTAL DE LAS VENTAS
                                        $vendido = 0;
                                        while ($mostrar = mysqli_fetch_array($result2)) {
                                            $vendido = $mostrar[0];
                                        }

                                            $vendidonf = number_format($vendido, 2);
                                            clearstatcache(); 
                                        ?>
                                        <h5 class="font-weight-bold" title="Muestra el total vendido hasta el momento">Venta Actual: <span class="lead" style="color:green">Q <?php echo $vendidonf ?></span></h5>
                                    </div>

                                    <div class="col-12">
                                        <?php

                                            $margen = $vendido - $gastado;
                                            $margen = number_format($margen, 2);
                                            clearstatcache(); 
                                            
                                            if($margen < 0){
                                                echo '<hr>';
                                                echo '<h5 class="font-weight-bold" title="Muesra el margen de la inversión contra la venta">
                                                Balance: <span class="lead" style="color: red;">Q'.$margen.'</span></h5>';
                                            }

                                            if($margen > 0){
                                                echo '<hr>';
                                                echo '<h5 class="font-weight-bold" title="Muesra el margen de la inversión contra la venta">
                                                Balance: <span class="lead" style="color: green;">Q'.$margen.'</span></h5>';
                                            }
                                            
                                        ?>
                                        
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-4">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="table-responsive w-100">
                                        <table class="table" id="tabla-mostrar">
                                            <div class="col-md-8 input-group mb-5">
                                                <form action="" method="GET">
                                                    <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar Registros" id="inputbuscar" name="busqueda">
                                                    <button type="submit" title="Buscar" class="btn btn-light" id="search" name="buscar">
                                                        <ion-icon name="search" style="font-size: 20px"></ion-icon>
                                                    </button>
                                                </form>
                                                <a href="../vista/reporteVentas.php" title="Ver todos los datos" type="submit" class="btn btn-success" id="return" name="return">
                                                    <ion-icon name="clipboard" style="font-size: 20px"></ion-icon>
                                                </a>
                                            </div>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Vendedor</th>
                                                    <th scope="col">Total Vendido</th>
                                                </tr>
                                                <?php
                                                    include("../controlador/reporteVendedores/csListarReporteVendedores.php");
                                                ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>