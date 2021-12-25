<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT * FROM `sectorizacion_clientes_ard` WHERE Sector_Nombre_Ruta LIKE '%$busqueda%' OR Sector_DesdeOrigen LIKE '%$busqueda%'
            OR Sector_HastaOrigen LIKE '%$busqueda%' OR Sector_PilotoAsignado LIKE '%$busqueda%' OR Sector_TipoDeVehiculo LIKE '%$busqueda%'
            OR Sector_YearVehiculo LIKE '%$busqueda%' OR Sector_ModeloVehiculo LIKE '%$busqueda%' OR Sector_ColorVehiculo LIKE '%$busqueda%'
            OR Sector_PlacaVehiculo LIKE '%$busqueda%' OR Sector_ExplicacionRuta LIKE '%$busqueda%'";
                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                <tbody>
                    <td><?php echo $mostrar['Sector_Nombre_Ruta'] ?></td>
                    <td><?php echo $mostrar['Sector_DesdeOrigen'] ?></td>
                    <td><?php echo $mostrar['Sector_HastaOrigen'] ?></td>
                    <td><?php echo $mostrar['Sector_ExplicacionRuta'] ?></td>
                    <td><?php echo $mostrar['Sector_PilotoAsignado'] ?></td>
                    <td><?php echo $mostrar['Sector_TipoDeVehiculo'] ?></td>
                    <td><?php echo $mostrar['Sector_YearVehiculo'] ?></td>
                    <td><?php echo $mostrar['Sector_ModeloVehiculo'] ?></td>
                    <td><?php echo $mostrar['Sector_ColorVehiculo'] ?></td>
                    <td><?php echo $mostrar['Sector_PlacaVehiculo'] ?></td>
                    <td><a href="../controlador/sectorizacionClientes/csEditarSectorCliente.php?ID=<?php echo $mostrar['IdSector'] ?>" class="btn btn-warning">📋</a></td>
                    <td><a href="../controlador/sectorizacionClientes/csEliminarSectorCliente.php?ID=<?php echo $mostrar['IdSector'] ?>" class="btn btn-danger">❌</a></td>
                </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT * FROM `sectorizacion_clientes_ard`";
                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                    <tbody>
                        <td><?php echo $mostrar['Sector_Nombre_Ruta'] ?></td>
                        <td><?php echo $mostrar['Sector_DesdeOrigen'] ?></td>
                        <td><?php echo $mostrar['Sector_HastaOrigen'] ?></td>
                        <td><?php echo $mostrar['Sector_ExplicacionRuta'] ?></td>
                        <td><?php echo $mostrar['Sector_PilotoAsignado'] ?></td>
                        <td><?php echo $mostrar['Sector_TipoDeVehiculo'] ?></td>
                        <td><?php echo $mostrar['Sector_YearVehiculo'] ?></td>
                        <td><?php echo $mostrar['Sector_ModeloVehiculo'] ?></td>
                        <td><?php echo $mostrar['Sector_ColorVehiculo'] ?></td>
                        <td><?php echo $mostrar['Sector_PlacaVehiculo'] ?></td>
                        <td><a href="../controlador/sectorizacionClientes/csEditarSectorCliente.php?ID=<?php echo $mostrar['IdSector'] ?>" class="btn btn-warning">📋</a></td>
                        <td><a href="../controlador/sectorizacionClientes/csEliminarSectorCliente.php?ID=<?php echo $mostrar['IdSector'] ?>" class="btn btn-danger">❌</a></td>
                    </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
