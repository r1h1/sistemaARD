<?php

error_reporting(0);
session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
    echo '<script type="text/javascript">
            window.location.href="../../../controlador/error/nolog.php";
    </script>';
    die();
}


include("../../csBDDCon.php");

date_default_timezone_set('America/Guatemala');
$sFechaActual = date("d") . "/" . date("m") . "/" . date("Y");
$horaActual = date('h:i A');


//SE TRAE DATOS DE LA EMPRESA
$sql = "SELECT * FROM `empresa`";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
     $nombreEmpresa = $mostrar['Empresa_Nombre'];
     $nitEmpresa = $mostrar['Empresa_NIT'];
     $direccionEmpresa = $mostrar['Empresa_Direccion'];
}


//SE TRAE DATOS DE LA VENTA
$sql = "SELECT * FROM `ventas_ard` ORDER BY IdCorrelativoVenta DESC LIMIT 1";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {

     $numeroFactura = $mostrar['IdCorrelativoVenta'];
     $fechaVenta = $mostrar['Venta_FechaVenta'];
     $nitCliente = $mostrar['Venta_NITCliente'];
     $vendedor = $mostrar['Venta_UsuarioVenta'];
     $ventaTotal = $mostrar['Venta_Total'];
}


//SE TRAE DATOS DEL CLIENTE
$sql = "SELECT Cliente_Nombres, Cliente_Apellidos, Cliente_Direccion FROM `clientes_ard` WHERE Cliente_NIT = '$nitCliente'";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
     
    $nombresCliente = $mostrar[0];
    $apellidosCliente = $mostrar[1];
    $direccioneCliente = $mostrar[2];
    
}

?>

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
    <link rel="stylesheet" href="../../../css/pdfFactura.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


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


    <title>Factura Generada | SGE</title>
</head>

<body>

    </div>
    <div id="app" class="col-11">


        <h2>Factura No. <?php echo $numeroFactura ?> </h2>
        <h3><?php echo $nombreEmpresa ?></h3>
        <br>    
        <h6>Fecha de Generación: <?php echo $sFechaActual ?></h6>
        <h6>Hora de Generación: <?php echo $horaActual ?></h6>

        <div class="row my-3 mt-5">

            <div class="col-10">
                <p>NIT Emisor: <?php echo $nitEmpresa ?></p>
                <p><?php echo $direccionEmpresa ?></p>
            </div>

            <div class="col-2">
                <p>SGE | BalamXCode</p>
                <p>Sistema de Facturación</p>
            </div>
        </div>

        <hr />

        <div class="row fact-info mt-5">

            <div class="col-4   ">
                <h5>Cliente</h5>
                <p><?php echo strtoupper($nitCliente) ?></p>
                <p><?php 
                
                    if($nitCliente == "cf" || $nitCliente == "CF"){
                        echo("Consumidor Final");
                    }

                    else{
                        echo($nombresCliente . " " . $apellidosCliente);
                    }
                
                    ?></p>
                <p><?php echo $direccioneCliente ?></p>
            </div>

            <div class="col-3">
                <h5>Fecha de Venta</h5>
                <p><?php echo $fechaVenta ?></p>
            </div>

            <div class="col-5">
                <h5>Vendedor</h5>
                <p><?php echo $vendedor ?></p>
            </div>

        </div>

        <div class="row my-5">
            <table class="table table-borderless factura">
                <thead>
                    <tr>
                        <th>Cant.</th>
                        <th>Articulo</th>
                        <th>P. Unit.</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                $sql = "SELECT detalle.IdCorrelativoVenta, detalle.VentaDetalle_Cantidad, detalle.VentaDetalle_PrecioVenta, detalle.VentaDetalle_TotalProducto, 
                detalle.VentaDetalle_IdProducto, invent.Producto_Nombre 
                FROM ventas_detalle_ard detalle 
                INNER JOIN ventas_ard venta ON venta.IdCorrelativoVenta = detalle.IdCorrelativoVenta 
                INNER JOIN inventario_ard invent ON invent.IdProducto = detalle.VentaDetalle_IdProducto 
                WHERE detalle.IdCorrelativoVenta = (SELECT IdCorrelativoVenta FROM ventas_ard ORDER BY IdCorrelativoVenta DESC LIMIT 1)";

                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $mostrar['VentaDetalle_Cantidad'] ?></td>
                        <td><?php echo $mostrar['Producto_Nombre'] ?></td>
                        <td><?php echo "Q".number_format($mostrar['VentaDetalle_PrecioVenta'],2) ?></td>
                        <td><?php echo "Q".number_format($mostrar['VentaDetalle_TotalProducto'],2) ?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>TOTAL A PAGAR</th>
                        <th><?php echo "Q".number_format($ventaTotal,2) ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="row">
            <div class="col-12 mt-4">
                <h4>Condiciones</h4>
                <p>Los cambios deben ser acompañados de su factura.</p>
                <p>NO SE HACEN REEMBOLSOS, a menos que sea algún fallo de<br />
                    parte de la empresa emisora de la factura
                </p>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">

    imprimir();

    //VUELVE LA FACTURA PDF
    function imprimir(){
        javascript:window.print();
    }

</script>

</html>