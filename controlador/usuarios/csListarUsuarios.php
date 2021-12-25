<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT * FROM `login_ard` WHERE Nombre_Usuario_Ard LIKE '%$busqueda%' OR Usuario_Ard LIKE '%$busqueda%'
            OR Clave_Ard LIKE '%$busqueda%' OR Permiso_Ard LIKE '%$busqueda%' ";
                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                <tbody>
                    <td><?php echo $mostrar['Nombre_Usuario_Ard'] ?></td>
                    <td><?php echo $mostrar['Usuario_Ard'] ?></td>
                    <td><?php echo $mostrar['Clave_Ard'] ?></td>
                    <td><?php echo $mostrar['Permiso_Ard'] ?> </td>
                    <td><a href="../controlador/usuarios/csEditarUsuario.php?ID=<?php echo $mostrar['IdUsuario'] ?>" class="btn btn-warning">📋</a></td>
                    <td><a href="../controlador/usuarios/csEliminarUsuario.php?ID=<?php echo $mostrar['IdUsuario'] ?>" class="btn btn-danger">❌</a></td>
                </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT * FROM `login_ard`";
                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                    <tbody>
                        <td><?php echo $mostrar['Nombre_Usuario_Ard'] ?></td>
                        <td><?php echo $mostrar['Usuario_Ard'] ?></td>
                        <td><?php echo $mostrar['Clave_Ard'] ?></td>
                        <td><?php echo $mostrar['Permiso_Ard'] ?> </td>
                        <td><a href="../controlador/usuarios/csEditarUsuario.php?ID=<?php echo $mostrar['IdUsuario'] ?>" class="btn btn-warning">📋</a></td>
                        <td><a href="../controlador/usuarios/csEliminarUsuario.php?ID=<?php echo $mostrar['IdUsuario'] ?>" class="btn btn-danger">❌</a></td>
                    </tbody>
                <?php
                }
                mysqli_close($conexion);
                ?>
                <?php
             }
?>



