<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="../../css/dashboard.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Edición de Clientes | SGE</title>
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
                <a href="../../vista/dashboard.php" class="d-block text-secondary bg-light p-3">
                    <ion-icon name="color-palette"></ion-icon> Dashboard
                </a>
                <br>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo IT</ins></p>
                    <a href="../../vista/usuarios.php" class="d-block text-light p-2">
                        <ion-icon name="contact"></ion-icon> Usuarios
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo RRHH</ins></p>
                    <a href="../../vista/planilla.php" class="d-block text-light p-2">
                        <ion-icon name="person-add"></ion-icon> Planilla
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Logística</ins></p>
                    <a href="../vista/proveedores.php" class="d-block text-light p-2">
                        <ion-icon name="cube"></ion-icon> Proveedores
                    </a>
                   
                    <a href="../../vista/categoriaProductos.php" class="d-block text-light p-2">
                        <ion-icon name="filing"></ion-icon> Categoría de Productos
                    </a>

                    <a href="../../vista/inventario.php" class="d-block text-light p-2">
                        <ion-icon name="list-box"></ion-icon> Inventario
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Clientes</ins></p>

                    <a href="../../vista/sectorizacionClientes.php" class="d-block text-light p-2">
                        <ion-icon name="map"></ion-icon> Sectorización Clientes (Rutas)
                    </a>

                    <a href="../../vista/clientes.php" class="d-block text-light p-2">
                        <ion-icon name="people"></ion-icon> Clientes
                    </a>                    

                    <a href="../../vista/creditoClientes.php" class="d-block text-light p-2">
                        <ion-icon name="card"></ion-icon> Crédito de Clientes
                    </a>

                    <a href="../../vista/reporteClientes.php" class="d-block text-light p-2">
                        <ion-icon name="grid"></ion-icon> Reporte de Clientes
                    </a>
                </div>


                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Ventas</ins></p>

                    <a href="../../vista/metodoPago.php" class="d-block text-light p-2">
                        <ion-icon name="cash"></ion-icon> Métodos de Pago
                    </a>

                    <a href="../../vista/facturacion.php" class="d-block text-light p-2">
                        <ion-icon name="cart"></ion-icon> Facturar / Vender
                    </a>
                    
                    <a href="../../vista/reporteVentas.php" class="d-block text-light p-2">
                        <ion-icon name="grid"></ion-icon> Reporte de Ventas
                    </a>

                    <a href="../../vista/facturas.php" class="d-block text-light p-2">
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

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline position-relative d-inline-block my-4">
                            <input class="form-control" type="search" placeholder="Empresa | 'ARD'" aria-label="Buscar"
                                disabled>
                            <button class="btn position-absolute btn-search" type="submit"></button>
                        </form>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="http://cdn.onlinewebfonts.com/svg/img_569193.png"
                                        class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />
                                    Opciones SGE
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../../vista/dashboard.php">Inicio</a>
                                    <a class="dropdown-item"
                                        href="https://wa.me/50245024363?text=DISTRIBUIDORA%20ARD,%20SISTEMA%20DE%20GESTION%20EMPRESARIAL%20EST%C3%81%20DANDO%20ERRORES,%20POR%20FAVOR%20DARME%20SOPORTE,%20GRACIAS!"
                                        target="_blank">Chatea con Soporte</a>
                                    <a class="dropdown-item" href="../../index.php">Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

            <!-- Page Content -->
            <div id="content" class="bg-grey w-100">

                <section class="bg-light py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">Edición de Clientes</h1><br>
                        </div>
                    </div>
                </section>

                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 d-flex stat my-4">
                                        <div class="mx-auto">
                                            <p class="lead text-muted py-3">Datos:</p>
                                            <?php

                                            include("../csBDDCon.php");
                                            //TRAE EL USUARIO Y LA CLAVE Y LO METE EN LAS VARIABLES USER AND PASS
                                            
                                            $id = $_GET["ID"];


                                            //SI TODO OKAY, SE PROCEDE A HACER LA CONEXIÓN
                                            $consulta = "SELECT IdCliente, Cliente_NIT, Cliente_Nombres, Cliente_Apellidos, Cliente_Telefono, Cliente_Direccion,
                                            Cliente_Email,  Cliente_Beneficios, Sector_Nombre_Ruta FROM sectorizacion_clientes_ard INNER JOIN clientes_ard 
                                            ON Cliente_IdSector = IdSector WHERE IdCliente='" . $id . "'";

                                            $resultado = mysqli_query($conexion, $consulta);

                                            while ($datos = mysqli_fetch_assoc($resultado)) {

                                            ?>
                                            <form class="row g-3" action="../clientes/csActualizarCliente.php"
                                                method="post">

                                                <input type="hidden" class="form-control" name="txtid"
                                                    value="<?php echo $datos['IdCliente'] ?>">

                                                <div class="col-md-6 py-2">
                                                    <label for="inputNEmpleado" class="form-label">NIT <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="cnit" maxlength="15"
                                                        placeholder="Ej: 105774810 o 392521-0" required value="<?php echo $datos['Cliente_NIT'] ?>">
                                                </div> 

                                                <div class="col-md-6 py-2">
                                                    <label for="inputNEmpleado" class="form-label">Nombres <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="cnombres" maxlength="79"
                                                        placeholder="Ej: Juan Estuardo" required value="<?php echo $datos['Cliente_Nombres'] ?>">
                                                </div> 
                                                
                                                <div class="col-md-6 py-2">
                                                    <label class="form-label">Apellidos <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="capellidos" maxlength="79"
                                                        placeholder="Ej: Martinez Ocasio" required value="<?php echo $datos['Cliente_Apellidos'] ?>">
                                                </div> 

                                                <div class="col-md-6 py-2">
                                                    <label for="inputTelefono" class="form-label">Teléfono <span class = "red" style="color: red;">*</span></label>
                                                    <!-- ESTE INPUT VALIDA SOLO NUMEROS EN UN RANGO MÁXIMO DE 8 CON JAVASCRIPT -->
                                                    <input type="number"
                                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        type="number" maxlength="8" class="form-control" name="ctelefono"
                                                        placeholder="Ej: 42521245" required value="<?php echo $datos['Cliente_Telefono'] ?>">
                                                </div>


                                                <div class="col-md-6 py-2">
                                                    <label class="form-label">Dirección <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="cdireccion" maxlength="249"
                                                        placeholder="Ej: 8va Calle 1-52, Av. las Américas" required value="<?php echo $datos['Cliente_Direccion'] ?>">
                                                </div> 

                                                <div class="col-md-6 py-2">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="cemail" maxlength="50"
                                                    placeholder="Ej: @ejemplo.com"
                                                    value="<?php echo $datos['Cliente_Email'] ?>">
                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label for="inputSueldo" class="form-label">Sector <span class = "red" style="color: red;">*</span></label>
                                                    <select name="csector" id="select-comunidad" class="form-control" required>
                                                    <option value="<?php echo $datos['Sector_Nombre_Ruta'] ?>"><?php echo $datos['Sector_Nombre_Ruta'] ?></option>
                                                        <?php
                                                            include("../controlador/csBDDCon.php");

                                                            $query = "SELECT IdSector, Sector_Nombre_Ruta FROM sectorizacion_clientes_ard";
                                                            $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                                                        ?>
                                                        
                                                        <?php foreach ($ejecutar as $opciones):?>

                                                            <option value="<?php echo $opciones['Sector_Nombre_Ruta']?>"><?php echo $opciones['Sector_Nombre_Ruta']?></option>
                                                        <?php endforeach?>
                                                    </select>
                                                        

                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label class="form-label">Beneficios</label>
                                                    <input type="text" class="form-control" name="cbeneficios" maxlength="50"
                                                        placeholder="Ej: Descuento del 5%" value="<?php echo $datos['Cliente_Beneficios'] ?>">
                                                </div>
                                                <div class="col-md-7 py-3">
                                                        <button type="submit" class="btn btn-warning" value="Actualizar Información">Actualizar Información</button>
                                                        <a href="../../vista/clientes.php" class="btn btn-success">Regresar</a>
                                                </div>
                                            </form>
                                            <?php
                                            }
                                            ?>
                                        </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>