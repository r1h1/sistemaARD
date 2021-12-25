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

    <title>Categoria Producto | SGE</title>
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
                                <h1 class="font-weight-bold mb-0">Edición de Inventario</h1><br>
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
                                            $consulta = "SELECT IdProducto, Producto_Nombre, Producto_Descripcion, Producto_PrecioCompra, Producto_PrecioVenta,
                                            Producto_Cantidad, Producto_Observaciones, Producto_FechaIngreso, Producto_FechaVencimiento,
                                             CategoriaP_Nombre, Prov_Nombre FROM inventario_ard
                                             INNER JOIN proveedores_ard ON Producto_IdProveedor = IdProveedor 
                                             INNER JOIN categoria_productos_ard ON Producto_IdCategoria = IdCategoriaProducto WHERE IdProducto = '$id'";

                                            $resultado = mysqli_query($conexion, $consulta);

                                            while ($datos = mysqli_fetch_assoc($resultado)) {

                                            ?>
                                            <form class="row g-3" action="../inventario/csActualizarInventario.php"
                                                method="post">
                                                <input type="hidden" class="form-control" name="txtid"
                                                    value="<?php echo $datos['IdProducto'] ?>">

                                                <div class="col-md-6 py-2">
                                                    <label for="inputNEmpleado" class="form-label">Nombre del Producto <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="nproducto" maxlength="49"
                                                        placeholder="Ej: Shampoo" required value="<?php echo $datos['Producto_Nombre'] ?>">
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputDPI" class="form-label">Descripción <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="descripcion"
                                                        placeholder="Ej: Es un kit de limpieza" maxlength="249" required value="<?php echo $datos['Producto_Descripcion'] ?>">
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputTelefono" class="form-label">Precio de Compra <span class = "red" style="color: red;">*</span></label>
                                                    
                                                    <input type="number" class="form-control" name="preciocompra" step="0.01" min="0.01" max="100000000"
                                                        placeholder="Ej: 50.85" required value="<?php echo $datos['Producto_PrecioCompra'] ?>">
                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label for="inputTelefono" class="form-label">Precio de Venta <span class = "red" style="color: red;">*</span></label>
                                                    
                                                    <input type="number" class="form-control" name="precioventa" step="0.01" min="0.01" max="100000000"
                                                        placeholder="Ej: 50.85" required value="<?php echo $datos['Producto_PrecioVenta'] ?>">
                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label for="inputDireccion" class="form-label">Cantidad <span class = "red" style="color: red;">*</span></label>
                                                    <input type="number" class="form-control" name="cantidad"
                                                        placeholder="Ej: 26" min="1" max="100000000" required value="<?php echo $datos['Producto_Cantidad'] ?>">
                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label for="inputSueldo" class="form-label">Categoria <span class = "red" style="color: red;">*</span></label>
                                                    <select class="form-control" id="inputGroupSelect01" name="ncategoria" required  value="<?php echo $datos['CategoriaP_Nombre'] ?>"> 
                                                        <option value="<?php echo $datos['CategoriaP_Nombre'] ?>"><?php echo $datos['CategoriaP_Nombre'] ?></option>
                                                        <?php
                                                            include("../controlador/csBDDCon.php");

                                                            $query = "SELECT CategoriaP_Nombre, IdCategoriaProducto FROM categoria_productos_ard";
                                                            $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                                                        ?>
                                                        
                                                        <?php foreach ($ejecutar as $opciones):?>

                                                            <option value="<?php echo $opciones['CategoriaP_Nombre']?>"><?php echo $opciones['CategoriaP_Nombre']?></option>
                                                        <?php endforeach?>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-md-6 py-2">
                                                    <label for="inputSueldo" class="form-label">Proveedor <span class = "red" style="color: red;">*</span></label>
                                                    <select name="nproveedor" id="select-comunidad" class="form-control" required>
                                                    <option value="<?php echo $datos['Prov_Nombre'] ?>"><?php echo $datos['Prov_Nombre'] ?></option>

                                                        <?php
                                                            include("../controlador/csBDDCon.php");

                                                            $query = "SELECT Prov_Nombre, IdProveedor FROM proveedores_ard";
                                                            $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                                                        ?>
                                                        
                                                        <?php foreach ($ejecutar as $opciones):?>

                                                            <option value="<?php echo $opciones['Prov_Nombre']?>"><?php echo $opciones['Prov_Nombre']?></option>
                                                        <?php endforeach?>
                                                        
                                                    </select>
                                                </div>
                                                

                                                
                                                <div class="col-md-6 py-2">
                                                    <label for="inputPuesto" class="form-label">Fecha de Ingreso <span class = "red" style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" name="fechaingreso"  min="2000-01-01" max="2300-12-31"
                                                         required value="<?php echo $datos['Producto_FechaIngreso'] ?>">
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputFecha" class="form-label">Fecha de
                                                        Vencimiento</label>
                                                    <input type="date" class="form-control" name="fechavencimiento"
                                                        min="2000-01-01" max="2300-12-31" placeholder="Ej: 26/05/2021"
                                                        value="<?php echo $datos['Producto_FechaVencimiento'] ?>">
                                                </div>
                                                
                                                <div class="col-md-12 py-2">
                                                    <label for="inputBeneficios" class="form-label">Observaciones</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Ej: Producto Peligroso" maxlength="249" name="observaciones" value="<?php echo $datos['Producto_Observaciones'] ?>">
                                                </div>

                                                <div class="col-md-6 py-3">
                                                    <button type="submit" class="btn btn-warning"
                                                        value="Actualizar Información">Actualizar Información</button>
                                                    <a href="../../vista/inventario.php"
                                                        class="btn btn-success">Regresar</a>
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