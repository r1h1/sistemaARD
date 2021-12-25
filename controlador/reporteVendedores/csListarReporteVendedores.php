<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT IdCorrelativoVenta, SUM(Venta_Total), Venta_UsuarioVenta
            FROM ventas_ard
            WHERE Venta_Total LIKE '%$busqueda%' OR Venta_UsuarioVenta LIKE '%$busqueda%'
            ORDER BY IdCorrelativoVenta ASC";


                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>

                            <input type="hidden" value="<?php echo $mostrar['IdCorrelativoVenta'] ?>"></input>
                            <td><?php echo $mostrar[2] ?></td>
                            <td><?php echo "Q ".number_format($mostrar[1],2)?></td>
                        
                        </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT IdCorrelativoVenta, SUM(Venta_Total), Venta_UsuarioVenta
                FROM ventas_ard
                GROUP BY Venta_UsuarioVenta
                ORDER BY IdCorrelativoVenta ASC";


                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>

                            <input type="hidden" value="<?php echo $mostrar['IdCorrelativoVenta'] ?>"></input>
                            <td><?php echo $mostrar[2] ?></td>
                            <td><?php echo "Q ".number_format($mostrar[1],2)?></td>
                        
                        </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
