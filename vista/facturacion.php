<?php


error_reporting(0);
session_start();
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

    <link rel="stylesheet" href="../js/jquery-ui.css">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>


    <title>Facturacion | SGE</title>
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

        <div class="bg-light w-100">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">

                    <div class="navbar" id="">
                        <ul class="navbar-nav">
                            <li class="nav-item text-left ml-auto">
                                <a class="btn btn-danger ml-auto" href="../controlador/login/cerrarSesion.php" id="cerrarSesion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cerrar Sesión</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

            <!-- Page Content -->
            <div id="content" class="bg-light w-100">

                <div class="bg-light mt-4" id="facturaVenta">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">Facturación</h1><br>
                                <p>Si hay una venta ingresada que no fue completada <br> presione el botón "Limpiar Productos" para borrarla.</p>
                            </div>
                        </div>
                    </div>


                    <div class="container" id="infonit">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 d-flex">
                                        <div class="mx-auto">

                                            <form id="nit" class="row g-3" method="POST">

                                                <div class="col-md-12 py-2">
                                                    <label for="inputNEmpleado" class="form-label">NIT del Cliente
                                                        <span class="red" style="color: red;">*</span>
                                                    </label>

                                                    <input type="text" id="ingresoNIT" name="ingresoNIT" class="form-control" maxlength="20" placeholder="Ej: CF o 105223510" onkeyup="validarNIT(); this.value = this.value.toUpperCase();" required>

                                                </div>

                                                <div class="col-md-6 py-2" id="nombreNIT" name="nombreNIT">
                                                    <!-- Nombre Completo  -->
                                                </div>

                                                <div class="col-md-6 py-2" id="apellidoNIT" name="apellidoNIT">
                                                    <!-- Nombre Completo  -->
                                                </div>


                                                <div class="col-md-12 py-2" id="direccionNIT" name="direccionNIT">
                                                    <!-- Direccion del Cliente  -->
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                    //ESTE NOS SIRVE PARA ENCONTRAR LOS PRODUCTOS QUE COINCIDEN CON 
                    //LAS BÚSQUEDAS QUE ESTÁ HACIENDO EL USUARIO
                    include("../controlador/csBDDCon.php");
                    $sql = "SELECT IdProducto, Producto_Nombre FROM inventario_ard";

                    $result = mysqli_query($conexion, $sql);

                    $array = array();

                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                            $nombre = $row['Producto_Nombre'];
                            array_push($array, $nombre);
                        }
                    }
                    clearstatcache(); 
                    mysqli_free_result($result);

                    ?>

                    <div class="container mt-2" id="productosAVender">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 d-flex">
                                        <div class="mx-auto">

                                            <form id="productosFactura" class="row g-3" method="POST">

                                                <div class="col-md-12 py-2">
                                                    <input type="text" class="form-control" placeholder="Buscar producto" id="producto" name="producto" onkeyup="cantidadStock()" onchange="cantidadStock()" required>
                                                    <p id="nombre"></p>
                                                </div>

                                                <div class="col-md-4 py-2" id="cantidadAVender" name="cantidadAVender" onkeyup="validarVentaExistencia()" onchange="validarVentaExistencia()" required>
                                                    <!-- CANTIDAD A VENDER -->
                                                </div>


                                                <div class="col-md-4 py-2" id="cantidad" name="cantidad">
                                                    <!-- CANTIDAD DE PRODUCTO -->
                                                </div>


                                                <div class="col-md-4 py-2" id="precioventa" name="precioventa">
                                                    <!-- PRECIO DE VENTA DEL PRODUCTO -->
                                                </div>


                                                <div class="col-md-12 py-3">
                                                    <button class="btn btn-success" title="Agregar el Producto" id="btnadd" name="btnadd">Agregar</button>
                                                    <button class="btn btn-danger" title="Limpiar productos de otras facturas no finalizadas" id="btnlimpiar" name="btnlimpiar">Limpiar Productos</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2" id="factura">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="table-responsive w-100" style="background-color: white; border: none !important;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Articulo</th>
                                                <th scope="col">Precio Unitario</th>
                                                <th scope="col">Subtotal</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container text-center">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row text-center">

                                    <div class="table-responsive text-center" id="productosAgregadosFacturacion">
                                        <?php
                                            include("../controlador/nuevaFactura/productos/csListarProductosAVender.php");
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bg-light  py-3" id="pagar">
                        <div class="container">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex stat my-4">
                                            <div class="mx-auto">

                                                <form id="pago" class="row g-3" action="" method="POST">

                                                    <div class="col-md-12 py-2">
                                                        <label for="inputEmail4" class="form-label">Pagar Con <span class="red" style="color: red;">*</span></label>
                                                        <select name="mpagar" id="mpagar" class="form-control" required>
                                                            <option value="">Selecciona...</option>

                                                            <?php
                                                            include("../controlador/csBDDCon.php");

                                                            $query = "SELECT MetodoPago_Tipo, MetodoPago_Recargo FROM metodo_pago_ard ORDER BY MetodoPago_Tipo ASC";
                                                            $ejecutar = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
                                                            ?>

                                                            <?php foreach ($ejecutar as $opciones) : ?>
                                                                <option value="<?php echo $opciones['MetodoPago_Tipo'] ?>"><?php echo $opciones['MetodoPago_Tipo'] ?></option>
                                                            <?php endforeach;
                                                            clearstatcache(); 
                                                            mysqli_free_result($ejecutar);
                                                            ?>
                                                        </select>
                                                    </div>

                                                </form>

                                                <div class="col-md-12 py-3">
                                                    <button type="submit" class="btn btn-dark" onclick="finalizarVenta()">Finalizar Venta</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- POP UP PARA MOSTRAR EL EFECTIVO -->
                    <div class="modal" id="pagoEfectivo">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="font-weight-bold mb-0">Pago en Efectivo</h4>
                                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal">X</button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label required">Cantidad a Recibir</label>
                                            <input type="text" class="form-control" id="cantidadARecibir" placeholder="Ej: 200" onkeyup="devolverVuelto()" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Total de Factura</label>
                                            <input type="text" class="form-control" id="mTotalF" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label required">Vuelto</label>
                                            <input type="text" class="form-control" id="vuelto" readonly>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-bs-dismiss="modal" id="modalBtnProcesar" class="btn btn-success">Procesar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN POP UP -->

                </div>

            </div>
        </div>
    </div>
    </div>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="../js/main.js"></script>
    <script src="../js/jquery-1.12.1.min.js"></script>
    <script src="../js/jquery-ui.js"></script>

    <script type="text/javascript">
        function validarVentaExistencia() {

            
            //VALIDAR QUE LA CANTIDAD SEA MENOR A LA CANTIDAD EN EXISTENCIA
            var cantidadAVender = parseInt(document.getElementById("cantVender").value);
            var cantidad = parseInt(document.getElementById("cantExistencia").value);

            if (cantidadAVender > cantidad || cantidadAVender == 0 || cantidadAVender == "") {
                //SI LA CANTIDAD A VENDER ES MAYOR A LA CANTIDAD DE STOCK, DA ERROR
                Swal.fire("¡Error!", "La cantidad a vender no puede ser mayor a la existente o cero, por favor, corríjalo!", "error");
            }

            if (cantidadAVender == 0 || cantidadAVender == "") {

                Swal.fire("¡Error!", "La cantidad a vender debe ser mayor a 0, y no puede ir vacío.", "error");

            }
            if (cantidad == 0) {
                Swal.fire("¡No hay Stock!", "No hay stock de este producto, informe al área correspondiente", "error");
            }

            if (cantidadAVender <= cantidad) {
                //NO HACE NADA
            }
        }


        //MUESTRA CUANTO VUELTO SE LE DEBE DE DAR A LA PERSONA 
        function devolverVuelto() {

            var totalFactura = document.getElementById("totalFactura").value;
            var cantidadARecibir = document.getElementById("cantidadARecibir").value;

            cantidadARecibir = parseFloat(cantidadARecibir);

            $("#mTotalF").val(totalFactura);

            var mTotalF = parseFloat(totalFactura);

            var vuelto = cantidadARecibir - mTotalF;

            $("#vuelto").val(vuelto);


        }



        //ENVIAR NIT Y METODO PAGO AL TERMINAR LA FACTURA
        function finalizarVenta() {

            var snit = document.getElementById("ingresoNIT").value;
            var mPago = document.getElementById("mpagar").value;
            var idProductoVendido = document.getElementById("idp");

            if (mPago == "") {
                Swal.fire("¡Error!", "Para terminar la venta, debe color el método de pago.", "error");
                document.getElementById("mpagar").focus();
            }

            if (idProductoVendido == "" || idProductoVendido == null) {
                Swal.fire("¡Error!", "Debe agregar al menos un producto para poder completar la venta.", "error");
                document.getElementById("producto").focus();
            }

            if (snit == "") {
                Swal.fire("¡Error!", "Para terminar la venta, debe colocar el NIT (O CF).", "error");
            }



            if (snit != "" && mPago != "" && idProductoVendido != "") {

                if (mPago == "Efectivo") {

                    $("#pagoEfectivo").modal("show");

                    //AL DAR CLICK EN PROCESAR, GUARDA LA FACTURA Y CIERRA EL MODAL
                    $('#modalBtnProcesar').click(function() {

                        var nitFinal = document.getElementById('nit');
                        var metodoPagoFact = document.getElementById('mpagar').value;

                        var datos = new FormData(nitFinal);
                        var datos2 = metodoPagoFact;

                        datos.append('mpagar', metodoPagoFact);

                        fetch('../controlador/nuevaFactura/facturaFinal/csInsertarFacturaFinal.php', {
                                method: 'POST',
                                body: datos
                            })
                            .then(res => res.json())
                            .then(data => {
                                console.log(data)
                            })

                        if (datos == "") {
                            $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');
                            Swal.fire("¡Error!", "No se pudo completar la venta, por favor, verifique", "error");
                        }
                        if (datos != "") {

                            $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');

                            Swal.fire({
                                title: '¡Genial, todo ha salido bien!',
                                text: "Si presiona generar, se generará el PDF de su factura, de lo contrario, sólo se guardará",
                                icon: 'success',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Si, generar Factura'
                            }).then((result) => {
                                if (result.isConfirmed) {

                                    window.open(
                                        '../controlador/nuevaFactura/facturaFinal/pdfFactura.php',
                                        '_blank' // <- This is what makes it open in a new window.
                                    );

                                    Swal.fire("¡Genial!", "Se generó su factura, se limpiará la pantalla en 2 segundos...", "success");

                                    //SE BORRA TODA LA INFORMACIÓN EN 3 SEGUNDOS
                                    window.setTimeout(function() {
                                        location.reload()
                                    }, 3000);
                                } else {

                                    Swal.fire("¡Genial!", "La venta se guardó, se limpiará la pantalla en 3 segundos...", "success");

                                    //SE BORRA TODA LA INFORMACIÓN EN 5 SEGUNDOS
                                    window.setTimeout(function() {
                                        location.reload()
                                    }, 3000);
                                }
                            })

                        }

                        $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');

                    });


                }

                if (mPago != "Efectivo") {
                    var nitFinal = document.getElementById('nit');
                    var metodoPagoFact = document.getElementById('mpagar').value;

                    var datos = new FormData(nitFinal);
                    var datos2 = metodoPagoFact;

                    datos.append('mpagar', metodoPagoFact);

                    fetch('../controlador/nuevaFactura/facturaFinal/csInsertarFacturaFinal.php', {
                            method: 'POST',
                            body: datos
                        })
                        .then(res => res.json())
                        .then(data => {
                            console.log(data)
                        })

                    if (datos == "") {
                        $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');
                        Swal.fire("¡Error!", "No se pudo completar la venta, por favor, verifique", "error");
                    }
                    if (datos != "") {

                        $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');

                        Swal.fire({
                            title: '¡Genial, todo ha salido bien!',
                            text: "Si presiona generar, se generará el PDF de su factura, de lo contrario, sólo se guardará",
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, generar Factura'
                        }).then((result) => {
                            if (result.isConfirmed) {

                                window.open(
                                    '../controlador/nuevaFactura/facturaFinal/pdfFactura.php',
                                    '_blank' // <- This is what makes it open in a new window.
                                );

                                Swal.fire("¡Genial!", "Se generó su factura, imprima su factura o presiona cancelar en la pantalla de la factura para salir.", "success");

                                //SE BORRA TODA LA INFORMACIÓN EN 3 SEGUNDOS
                                window.setTimeout(function() {
                                    location.reload()
                                }, 3000);
                            } else {

                                Swal.fire("¡Genial!", "La venta se guardó, se limpiará la pantalla en 3 segundos...", "success");

                                //SE BORRA TODA LA INFORMACIÓN EN 5 SEGUNDOS
                                window.setTimeout(function() {
                                    location.reload()
                                }, 3000);
                            }
                        })

                    }

                    $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');
                }

            }


        }
    </script>

    <script type="text/javascript">
        //TRAE LOS COINCIDENTES DE LOS PRODUCTOS

        $(document).ready(function() {
            var items = <?= json_encode($array) ?>

            $("#producto").autocomplete({
                source: items,
                select: function(event, item) {
                    var params = {
                        nombre: item.item.value
                    };
                    $.get("productosCoincidentes.php", params, function(response) {
                        var json = JSON.parse(response);
                        if (json.status == 200) {
                            $("#nombre").html(json.nombre);
                        } else {

                        }
                    });
                }
            });
        });

        //INSERTA EN BASE DE DATOS SIN REFRESCAR LA PANTALLA
        $(document).ready(function() {
            $('#btnadd').click(function() {

                var datos = $('#productosFactura').serialize();

                var cantidadAVender = document.getElementById("cantVender").value;
                var cantidad = document.getElementById("cantExistencia").value;

                if (cantidad == 0) {
                    Swal.fire("¡No hay Stock!", "No hay stock de este producto, informe al área correspondiente", "error");
                }

                if (cantidad > 0) {

                    $.ajax({

                        type: "POST",
                        url: "../controlador/nuevaFactura/productos/csInsertarProductosTemporales.php",
                        data: datos,

                        success: function(r) {
                            if (r == 1) {
                                $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');
                                $("#cantVender").val('');
                                $("#cantExistencia").val(nuevaCantidad);
                            } else {
                                var nuevaCantidad = Math.abs(cantidad - cantidadAVender);

                                $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');
                                $("#cantVender").val('');
                                $("#cantExistencia").val(nuevaCantidad);
                            }
                        }
                    });

                }

                return false;
            });
        });


        //LIMPIAR SIN REFRESCAR LA PANTALLA
        $(document).ready(function() {
            $('#btnlimpiar').click(function() {
                $.ajax({

                    type: "POST",
                    url: "../controlador/nuevaFactura/productos/csLimpiarProductosTemporales.php",

                    success: function(r) {
                        if (r == 1) {
                            $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');
                        } else {
                            $('#productosAgregadosFacturacion').load('../controlador/nuevaFactura/productos/csListarProductosAVender.php');
                        }
                    }
                });
                return false;
            });
        });


        //LIMPIAR AL CERRAR SESIÓN
        $(document).ready(function() {
            $('#cerrarSesion').click(function() {
                $.ajax({

                    type: "POST",
                    url: "../controlador/nuevaFactura/productos/csLimpiarProductosTemporales.php",

                    success: function(r) {
                        if (r == 1) {
                            window.location.href = "../controlador/login/cerrarSesion.php";
                        } else {
                            window.location.href = "../controlador/login/cerrarSesion.php";
                        }
                    }
                });
                return false;
            });
        });
    </script>


</body>

</html>