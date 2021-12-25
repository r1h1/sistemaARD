<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT IdCorrelativoVenta, Venta_NITCliente, Venta_FechaVenta, Venta_Total, Venta_IdTipoPago, MetodoPago_Tipo, Venta_UsuarioVenta
            FROM ventas_ard
            INNER JOIN metodo_pago_ard ON IdMetodoPago = Venta_IdTipoPago
            WHERE IdCorrelativoVenta LIKE '%$busqueda%' OR Venta_NITCliente LIKE '%$busqueda%'
            OR Venta_FechaVenta LIKE '%$busqueda%' OR Venta_Total LIKE '%$busqueda%' OR MetodoPago_Tipo LIKE '%$busqueda%'
            OR Venta_UsuarioVenta LIKE '%$busqueda%'
            ORDER BY IdCorrelativoVenta ASC";


                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>

                            <input type="hidden" value="<?php echo $mostrar['IdCorrelativoVenta'] ?>"></input>
                            <td><?php echo $mostrar['Venta_UsuarioVenta'] ?></td>
                            <td><?php echo strtoupper($mostrar['Venta_NITCliente']) ?></td>
                            <td><?php echo $mostrar['Venta_FechaVenta'] ?></td>
                            <td><?php echo "Q ". number_format($mostrar['Venta_Total'],2)?></td>
                            <td><?php echo $mostrar['MetodoPago_Tipo'] ?></td>

                            <td><a href="../controlador/facturas/pdfFactura/pdfFactura.php?ID=<?php echo $mostrar['IdCorrelativoVenta'] ?>" class="btn btn-dark" target="_blank">🖨️</a></td>
                            <td><a href="../controlador/facturas/csEliminarFactura.php?ID=<?php echo $mostrar['IdCorrelativoVenta'] ?>" class="btn btn-light">❌</a></td>
                        
                        </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT IdCorrelativoVenta, Venta_NITCliente, Venta_FechaVenta, Venta_Total, Venta_IdTipoPago, MetodoPago_Tipo, Venta_UsuarioVenta
                FROM ventas_ard
                INNER JOIN metodo_pago_ard ON IdMetodoPago = Venta_IdTipoPago
                ORDER BY IdCorrelativoVenta ASC";


                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>

                            <input type="hidden" value="<?php echo $mostrar['IdCorrelativoVenta'] ?>"></input>
                            <td><?php echo $mostrar['Venta_UsuarioVenta'] ?></td>
                            <td><?php echo strtoupper($mostrar['Venta_NITCliente']) ?></td>
                            <td><?php echo $mostrar['Venta_FechaVenta'] ?></td>
                            <td><?php echo "Q ". number_format($mostrar['Venta_Total'],2)?></td>
                            <td><?php echo $mostrar['MetodoPago_Tipo'] ?></td>

                            <td><a href="../controlador/facturas/pdfFactura/pdfFactura.php?ID=<?php echo $mostrar['IdCorrelativoVenta'] ?>" class="btn btn-dark" target="_blank">🖨️</a></td>
                            <td><a href="../controlador/facturas/csEliminarFactura.php?ID=<?php echo $mostrar['IdCorrelativoVenta'] ?>" class="btn btn-light">❌</a></td>
                        
                        </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
