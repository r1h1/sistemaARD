<?php

        include("../csBDDCon.php");
                        
                        
        if(isset($_GET["buscar"])){

            $busqueda = $_GET['busqueda'];

            $sql = "SELECT IdProducto, Producto_Nombre, Producto_Descripcion, Producto_PrecioCompra, Producto_PrecioVenta,
            Producto_Cantidad, Producto_Observaciones, Producto_FechaIngreso, Producto_FechaVencimiento,
            CategoriaP_Nombre, Prov_Nombre FROM inventario_ard 
            INNER JOIN proveedores_ard ON Producto_IdProveedor = IdProveedor 
            INNER JOIN categoria_productos_ard ON Producto_IdCategoria = IdCategoriaProducto WHERE Producto_Nombre LIKE '%$busqueda%'
            OR Producto_Descripcion LIKE '%$busqueda%' OR Producto_PrecioCompra LIKE '%$busqueda%' OR Producto_Cantidad LIKE '%$busqueda%'
            OR Producto_Observaciones LIKE '%$busqueda%' OR Producto_FechaIngreso LIKE '%$busqueda%'
            OR Producto_FechaVencimiento LIKE '%$busqueda' OR CategoriaP_Nombre LIKE '%$busqueda%' OR Prov_Nombre LIKE '%$busqueda%'";


                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                   </thead>
                        <tbody>
                            <td><?php echo $mostrar['Producto_Nombre'] ?></td>
                            <td><?php echo $mostrar['Producto_Descripcion'] ?></td>
                            <td><?php echo $mostrar['Producto_PrecioCompra'] ?></td>
                            <td><?php echo $mostrar['Producto_PrecioVenta'] ?></td>
                            <td><?php echo $mostrar['Producto_Cantidad'] ?> </td>
                            <td><?php echo $mostrar['Producto_Observaciones'] ?> </td>
                            <td><?php echo $mostrar['Producto_FechaIngreso'] ?> </td>
                            <td><?php echo $mostrar['Producto_FechaVencimiento'] ?> </td>
                            <td><?php echo $mostrar['CategoriaP_Nombre'] ?> </td>
                            <td><?php echo $mostrar['Prov_Nombre'] ?> </td>
                            
                            <td><a href="../controlador/inventario/csEditarInventario.php?ID=<?php echo $mostrar['IdProducto'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/inventario/csEliminarInventario.php?ID=<?php echo $mostrar['IdProducto'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
            }
            
            else{

                $sql = "SELECT IdProducto, Producto_Nombre, Producto_Descripcion, Producto_PrecioCompra, Producto_PrecioVenta,
                Producto_Cantidad, Producto_Observaciones, Producto_FechaIngreso, Producto_FechaVencimiento,
                CategoriaP_Nombre, Prov_Nombre FROM inventario_ard 
                INNER JOIN proveedores_ard ON Producto_IdProveedor = IdProveedor 
                INNER JOIN categoria_productos_ard ON Producto_IdCategoria = IdCategoriaProducto";


                $result = mysqli_query($conexion, $sql);
                            
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    </thead>
                    </thead>
                        <tbody>
                            <td><?php echo $mostrar['Producto_Nombre'] ?></td>
                            <td><?php echo $mostrar['Producto_Descripcion'] ?></td>
                            <td><?php echo $mostrar['Producto_PrecioCompra'] ?></td>
                            <td><?php echo $mostrar['Producto_PrecioVenta'] ?></td>
                            <td><?php echo $mostrar['Producto_Cantidad'] ?> </td>
                            <td><?php echo $mostrar['Producto_Observaciones'] ?> </td>
                            <td><?php echo $mostrar['Producto_FechaIngreso'] ?> </td>
                            <td><?php echo $mostrar['Producto_FechaVencimiento'] ?> </td>
                            <td><?php echo $mostrar['CategoriaP_Nombre'] ?> </td>
                            <td><?php echo $mostrar['Prov_Nombre'] ?> </td>
                            
                            <td><a href="../controlador/inventario/csEditarInventario.php?ID=<?php echo $mostrar['IdProducto'] ?>" class="btn btn-warning">📋</a></td>
                            <td><a href="../controlador/inventario/csEliminarInventario.php?ID=<?php echo $mostrar['IdProducto'] ?>" class="btn btn-danger">❌</a></td>
                        </tbody>
                <?php
                }
                ?>
                <?php
             }
?>
