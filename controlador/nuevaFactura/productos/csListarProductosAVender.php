<?php


                $dbserver = 'localhost';
                $dbuser_name = 'root';
                $dbpassword = '';
                $dbnombre_bdd = 'bdddistribuidoraard';
                $conexion = mysqli_connect($dbserver, $dbuser_name, $dbpassword, $dbnombre_bdd);




                //SI NO LO ENCUENTRA, DICE QUE NO HAY CONEXIONES EXISTENTES
                if (!$conexion) {
                    die("No hay conexiones existentes: " . mysqli_connect_error());
                }


                                $sql = "SELECT IdCorrelativoVenta, VentaDetalle_Cantidad, VentaDetalle_PrecioVenta, 
                                VentaDetalle_IdProducto, VentaDetalle_TotalProducto, Producto_Nombre
                                FROM ventas_auxiliar_ard 
                                INNER JOIN inventario_ard ON VentaDetalle_IdProducto = IdProducto
                                ORDER BY IdCorrelativoVenta DESC";


                                $result = mysqli_query($conexion, $sql);

                                            
                                while ($mostrar = mysqli_fetch_array($result)) {

                ?>

                    <table class="table">
                        <tbody>
                            <input type="hidden" class="form-control" id="idp" name="txtid" value="<?php echo $mostrar['VentaDetalle_IdProducto'] ?>">
                            <td id="vdcantidad"><?php echo $mostrar['VentaDetalle_Cantidad'] ?></td>
                            <td id="vdpnombre"><?php echo $mostrar['Producto_Nombre'] ?></td>
                            <td id="vdpventa"><?php echo "Q ".  number_format($mostrar['VentaDetalle_PrecioVenta'],2) ?></td>
                            <td id="vdtproducto"><?php echo "Q ".  number_format($mostrar['VentaDetalle_TotalProducto'],2) ?></td>
                            <td><button class="btn btn-danger" id="btndelete" name="btndelete"><ion-icon name="trash"></ion-icon></button></td>
                        </tbody>
                    </table>

<?php
                    }

                    
                    $sql2 = "SELECT VentaDetalle_TotalProducto FROM ventas_auxiliar_ard";

                    $result2 = mysqli_query($conexion, $sql2);

                    $totalFactura = 0;

                    while ($mostrar = mysqli_fetch_array($result2)) {
                        $totalFactura = $totalFactura + $mostrar['VentaDetalle_TotalProducto'];
                    }

                ?>

            <form id="listarFact">
                <div class="col-md-6 d-flex ml-1">
                    <label for="inputDireccion" class="form-label">Total a Pagar:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control text-center" id="totalFactura" name="total" value="<?php echo $totalFactura?>" readonly>
                    </div>
                </div>
                <form>



        <script type="text/javascript">
            //ENVIA EL ID DEL CAMPO DE TEXTO OCULTO ID PARA BORRAR EL PRODUCTO TEMPORAL
            $(document).ready(function () {

                $("#btndelete").click(function () {
                    var idPro = document.getElementById("idp").value;

                    var datos = 'idp=' + idPro;
                    url = "../controlador/nuevaFactura/productos/csEliminarProductoTemp.php";

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: datos,

                        success: function (data) {
                            $('#productosAgregadosFacturacion').load(
                                '../controlador/nuevaFactura/productos/csListarProductosAVender.php'
                                );
                        }
                    });
                });
            });
        </script>