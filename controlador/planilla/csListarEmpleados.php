<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT * FROM `planilla_ard` WHERE Empleado_PrimerNombre LIKE '%$busqueda%' OR Empleado_SegundoNombre LIKE '%$busqueda%'
            OR Empleado_TercerNombre LIKE '%$busqueda%' OR Empleado_PrimerApellido LIKE '%$busqueda%' OR Empleado_SegundoApellido LIKE '%$busqueda%'
            OR Empleado_DPI LIKE '%$busqueda%' OR Empleado_FechaNacimiento LIKE '%$busqueda%' OR Empleado_Direccion LIKE '%$busqueda%'
            OR Empleado_Telefono LIKE '%$busqueda%' OR Empleado_Puesto LIKE '%$busqueda%' OR Empleado_SueldoInicial LIKE '%$busqueda%'
            OR Empleado_SueldoFinal LIKE '%$busqueda%' OR Empleado_JornadaLaboral LIKE '%$busqueda%' OR Empleado_FechaContratacion LIKE '%$busqueda%'
            OR Empleado_FechaRetiro LIKE '%$busqueda%' OR Empleado_MotivoRetiro LIKE '%$busqueda%' OR Empleado_Beneficios LIKE '%$busqueda%'";


                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>
                            <td><?php echo $mostrar['Empleado_PrimerNombre'] ?></td>
                            <td><?php echo $mostrar['Empleado_SegundoNombre'] ?></td>
                            <td><?php echo $mostrar['Empleado_TercerNombre'] ?></td>
                            <td><?php echo $mostrar['Empleado_PrimerApellido'] ?></td>
                            <td><?php echo $mostrar['Empleado_SegundoApellido'] ?></td>
                            <td><?php echo $mostrar['Empleado_DPI'] ?></td>
                            <td><?php echo $mostrar['Empleado_FechaNacimiento'] ?></td>
                            <td><?php echo $mostrar['Empleado_Direccion'] ?></td>
                            <td><?php echo $mostrar['Empleado_Telefono'] ?></td>
                            <td><?php echo $mostrar['Empleado_Puesto'] ?></td>
                            <td><?php echo $mostrar['Empleado_SueldoInicial'] ?></td>
                            <td><?php echo $mostrar['Empleado_SueldoFinal'] ?></td>
                            <td><?php echo $mostrar['Empleado_JornadaLaboral'] ?></td>
                            <td><?php echo $mostrar['Empleado_FechaContratacion'] ?></td>
                            <td><?php echo $mostrar['Empleado_FechaRetiro'] ?></td>
                            <td><?php echo $mostrar['Empleado_MotivoRetiro'] ?></td>
                            <td><?php echo $mostrar['Empleado_Beneficios'] ?></td>


                            <td><a href="../controlador/planilla/csEditarEmpleado.php?ID=<?php echo $mostrar['IdEmpleado'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/planilla/csEliminarEmpleado.php?ID=<?php echo $mostrar['IdEmpleado'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT * FROM `planilla_ard`";
                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                        <tbody>
                            <td><?php echo $mostrar['Empleado_PrimerNombre'] ?></td>
                            <td><?php echo $mostrar['Empleado_SegundoNombre'] ?></td>
                            <td><?php echo $mostrar['Empleado_TercerNombre'] ?></td>
                            <td><?php echo $mostrar['Empleado_PrimerApellido'] ?></td>
                            <td><?php echo $mostrar['Empleado_SegundoApellido'] ?></td>
                            <td><?php echo $mostrar['Empleado_DPI'] ?></td>
                            <td><?php echo $mostrar['Empleado_FechaNacimiento'] ?></td>
                            <td><?php echo $mostrar['Empleado_Direccion'] ?></td>
                            <td><?php echo $mostrar['Empleado_Telefono'] ?></td>
                            <td><?php echo $mostrar['Empleado_Puesto'] ?></td>
                            <td><?php echo $mostrar['Empleado_SueldoInicial'] ?></td>
                            <td><?php echo $mostrar['Empleado_SueldoFinal'] ?></td>
                            <td><?php echo $mostrar['Empleado_JornadaLaboral'] ?></td>
                            <td><?php echo $mostrar['Empleado_FechaContratacion'] ?></td>
                            <td><?php echo $mostrar['Empleado_FechaRetiro'] ?></td>
                            <td><?php echo $mostrar['Empleado_MotivoRetiro'] ?></td>
                            <td><?php echo $mostrar['Empleado_Beneficios'] ?></td>


                            <td><a href="../controlador/planilla/csEditarEmpleado.php?ID=<?php echo $mostrar['IdEmpleado'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/planilla/csEliminarEmpleado.php?ID=<?php echo $mostrar['IdEmpleado'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
