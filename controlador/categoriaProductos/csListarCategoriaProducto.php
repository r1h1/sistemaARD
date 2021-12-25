<?php

    include("../controlador/csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT * FROM `categoria_productos_ard` WHERE CategoriaP_Nombre LIKE '%$busqueda%'
            OR CategoriaP_Descripcion LIKE '%$busqueda%'";
                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                    </thead>
                        <tbody>
                            <td><?php echo $mostrar['CategoriaP_Nombre'] ?></td>
                            <td><?php echo $mostrar['CategoriaP_Descripcion'] ?></td>
                            <td><a href="../controlador/categoriaProductos/csEditarCategoriaProducto.php?ID=<?php echo $mostrar['IdCategoriaProducto'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/categoriaProductos/csEliminarCategoriaProducto.php?ID=<?php echo $mostrar['IdCategoriaProducto'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
            }
            else{

                $sql = "SELECT * FROM `categoria_productos_ard`";
                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                     </thead>
                        <tbody>
                            <td><?php echo $mostrar['CategoriaP_Nombre'] ?></td>
                            <td><?php echo $mostrar['CategoriaP_Descripcion'] ?></td>
                            <td><a href="../controlador/categoriaProductos/csEditarCategoriaProducto.php?ID=<?php echo $mostrar['IdCategoriaProducto'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/categoriaProductos/csEliminarCategoriaProducto.php?ID=<?php echo $mostrar['IdCategoriaProducto'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
