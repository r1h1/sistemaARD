<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT * FROM `proveedores_ard` WHERE Prov_Nombre LIKE '%$busqueda%'
            OR Prov_Direccion LIKE '%$busqueda%' OR Prov_NIT LIKE '%$busqueda%' OR Prov_Telefono LIKE '%$busqueda%'
            OR Prov_Email LIKE '%$busqueda%' OR Prov_Presentaciones LIKE '%$busqueda%'";


                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>
                            <td><?php echo $mostrar['Prov_Nombre'] ?></td>
                            <td><?php echo $mostrar['Prov_Direccion'] ?></td>
                            <td><?php echo $mostrar['Prov_NIT'] ?> </td>
                            <td><?php echo $mostrar['Prov_Telefono'] ?> </td>
                            <td><?php echo $mostrar['Prov_Email'] ?> </td>
                            <td><?php echo $mostrar['Prov_Presentaciones'] ?> </td>
                            <td><a href="../controlador/proveedores/csEditarProv.php?ID=<?php echo $mostrar['IdProveedor'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/proveedores/csEliminarProv.php?ID=<?php echo $mostrar['IdProveedor'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT * FROM `proveedores_ard`";
                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                        <tbody>
                            <td><?php echo $mostrar['Prov_Nombre'] ?></td>
                            <td><?php echo $mostrar['Prov_Direccion'] ?></td>
                            <td><?php echo $mostrar['Prov_NIT'] ?> </td>
                            <td><?php echo $mostrar['Prov_Telefono'] ?> </td>
                            <td><?php echo $mostrar['Prov_Email'] ?> </td>
                            <td><?php echo $mostrar['Prov_Presentaciones'] ?> </td>
                            <td><a href="../controlador/proveedores/csEditarProv.php?ID=<?php echo $mostrar['IdProveedor'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/proveedores/csEliminarProv.php?ID=<?php echo $mostrar['IdProveedor'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
