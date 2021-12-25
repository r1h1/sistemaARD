<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT IdCliente, Cliente_NIT, Cliente_Nombres, Cliente_Apellidos, Cliente_Direccion, 
            Cliente_Telefono,
            Cliente_Email, Cliente_Beneficios, Sector_Nombre_Ruta, Sector_ExplicacionRuta FROM clientes_ard 
            INNER JOIN sectorizacion_clientes_ard ON Cliente_IdSector = IdSector 
            WHERE Cliente_NIT LIKE '%$busqueda%' OR Cliente_Nombres LIKE '%$busqueda%' OR Cliente_Apellidos LIKE '%$busqueda%'
            OR Cliente_Direccion LIKE '%$busqueda%' OR Cliente_Telefono LIKE '%$busqueda%' OR Cliente_Email LIKE '%$busqueda%'
            OR Cliente_Beneficios LIKE '%$busqueda%' OR Sector_Nombre_Ruta LIKE '%$busqueda%' OR Sector_ExplicacionRuta LIKE '%$busqueda%'";


                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>
                            <td><?php echo $mostrar['Cliente_NIT'] ?></td>
                            <td><?php echo $mostrar['Cliente_Nombres'] ?></td>
                            <td><?php echo $mostrar['Cliente_Apellidos'] ?></td>
                            <td><?php echo $mostrar['Sector_Nombre_Ruta'] ?></td>
                            <td><?php echo $mostrar['Sector_ExplicacionRuta'] ?></td>
                            <td><?php echo $mostrar['Cliente_Direccion'] ?></td>
                            <td><?php echo $mostrar['Cliente_Telefono'] ?></td>
                            <td><?php echo $mostrar['Cliente_Email'] ?></td>
                            <td><?php echo $mostrar['Cliente_Beneficios'] ?></td>

                            <td><a href="../controlador/clientes/csEditarCliente.php?ID=<?php echo $mostrar['IdCliente'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/clientes/csEliminarCliente.php?ID=<?php echo $mostrar['IdCliente'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT IdCliente, Cliente_NIT, Cliente_Nombres, Cliente_Apellidos, Cliente_Direccion, 
                Cliente_Telefono,
                Cliente_Email, Cliente_Beneficios, Sector_Nombre_Ruta, Sector_ExplicacionRuta FROM clientes_ard 
                INNER JOIN sectorizacion_clientes_ard ON Cliente_IdSector = IdSector";


                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                        <tbody>
                            <td><?php echo $mostrar['Cliente_NIT'] ?></td>
                            <td><?php echo $mostrar['Cliente_Nombres'] ?></td>
                            <td><?php echo $mostrar['Cliente_Apellidos'] ?></td>
                            <td><?php echo $mostrar['Sector_Nombre_Ruta'] ?></td>
                            <td><?php echo $mostrar['Sector_ExplicacionRuta'] ?></td>
                            <td><?php echo $mostrar['Cliente_Direccion'] ?></td>
                            <td><?php echo $mostrar['Cliente_Telefono'] ?></td>
                            <td><?php echo $mostrar['Cliente_Email'] ?></td>
                            <td><?php echo $mostrar['Cliente_Beneficios'] ?></td>

                            <td><a href="../controlador/clientes/csEditarCliente.php?ID=<?php echo $mostrar['IdCliente'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/clientes/csEliminarCliente.php?ID=<?php echo $mostrar['IdCliente'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
