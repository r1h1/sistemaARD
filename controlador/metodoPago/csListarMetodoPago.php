<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT IdMetodoPago, MetodoPago_Tipo, MetodoPago_Recargo FROM metodo_pago_ard 
            WHERE MetodoPago_Tipo LIKE '%$busqueda%' OR MetodoPago_Recargo LIKE '%$busqueda%' ORDER BY MetodoPago_TIPO ASC";


                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>

                            <td><?php echo $mostrar['MetodoPago_Tipo'] ?></td>
                            <td><?php echo $mostrar['MetodoPago_Recargo'] ?></td>

                            <td><a href="../controlador/metodoPago/csEditarMetodoPago.php?ID=<?php echo $mostrar['IdMetodoPago'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/metodoPago/csEliminarMetodoPago.php?ID=<?php echo $mostrar['IdMetodoPago'] ?>" class="btn btn-danger">❌</a></td>
                        
                        </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT IdMetodoPago, MetodoPago_Tipo, MetodoPago_Recargo FROM metodo_pago_ard ORDER BY MetodoPago_TIPO ASC";


                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>

                            <td><?php echo $mostrar['MetodoPago_Tipo'] ?></td>
                            <td><?php echo $mostrar['MetodoPago_Recargo'] ?></td>

                            <td><a href="../controlador/metodoPago/csEditarMetodoPago.php?ID=<?php echo $mostrar['IdMetodoPago'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/metodoPago/csEliminarMetodoPago.php?ID=<?php echo $mostrar['IdMetodoPago'] ?>" class="btn btn-danger">❌</a></td>
                        
                        </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
