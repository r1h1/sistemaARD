<?php
  session_start();
  error_reporting(0);
  $varsesion = $_SESSION['usuario'];

  if($varsesion == null || $varsesion = ''){
    echo'<script type="text/javascript">
            window.location.href="../controlador/error/nolog.php";
    </script>';
    die();
  }
?>


<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/dashboard.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Planilla | SGE</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

<!-- Sidebar -->
<div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light p-2">Software de gestión <br> Empresarial</ion-icon>
                </h4>
                <p class="p-2 text-light">SGE, BalamXCode</p>
            </div>
            <div class="menu">
                <a href="../vista/dashboard.php" class="d-block text-secondary bg-light p-3">
                    <ion-icon name="color-palette"></ion-icon> Inicio
                </a>
                <br>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo IT</ins></p>
                    <a href="../vista/usuarios.php" class="d-block text-light p-2">
                        <ion-icon name="contact"></ion-icon> Usuarios
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo RRHH</ins></p>
                    <a href="../vista/planilla.php" class="d-block text-light p-2">
                        <ion-icon name="person-add"></ion-icon> Planilla
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Logística</ins></p>
                    <a href="../vista/proveedores.php" class="d-block text-light p-2">
                        <ion-icon name="cube"></ion-icon> Proveedores
                    </a>
                   
                    <a href="../vista/categoriaProductos.php" class="d-block text-light p-2">
                        <ion-icon name="filing"></ion-icon> Categoría de Productos
                    </a>

                    <a href="../vista/inventario.php" class="d-block text-light p-2">
                        <ion-icon name="list-box"></ion-icon> Inventario
                    </a>
                </div>
                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Clientes</ins></p>

                    <a href="../vista/sectorizacionClientes.php" class="d-block text-light p-2">
                        <ion-icon name="map"></ion-icon> Sectorización Clientes (Rutas)
                    </a>

                    <a href="../vista/clientes.php" class="d-block text-light p-2">
                        <ion-icon name="people"></ion-icon> Clientes
                    </a>                    

                </div>


                <div class="p-3">
                    <p class="d-block text-secondary"><ins>Módulo Ventas</ins></p>

                    <a href="../vista/metodoPago.php" class="d-block text-light p-2">
                        <ion-icon name="cash"></ion-icon> Métodos de Pago
                    </a>

                    <a href="../vista/facturacion.php" class="d-block text-light p-2">
                        <ion-icon name="cart"></ion-icon> Facturar / Vender
                    </a>
                    
                    <a href="../vista/reporteVentas.php" class="d-block text-light p-2">
                        <ion-icon name="grid"></ion-icon> Reporte de Ventas
                    </a>

                    <a href="../vista/facturas.php" class="d-block text-light p-2">
                        <ion-icon name="grid"></ion-icon> Facturas
                    </a>
                </div>
            </div>
        </div>
        <!-- Fin sidebar -->

    <div class="w-100">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline position-relative d-inline-block my-4">
              <?php
              
                include("../controlador/csBDDCon.php");

                //SE TRAE DATOS DE LA EMPRESA
                $sql = "SELECT Empresa_Nombre FROM `empresa`";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    $nombreEmpresa = $mostrar['Empresa_Nombre'];
                }
              
              ?>
              <input class="form-control" type="search" aria-label="Buscar" value="<?php echo $nombreEmpresa?>" readonly>
              <button class="btn position-absolute btn-search" type="submit"></button>
            </form>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Opciones SGE
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../controlador/login/cerrarSesion.php">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin Navbar -->

            <!-- Page Content -->
            <div id="content" class="bg-grey w-100">

                <section class="bg-light py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">Planilla</h1><br>
                        </div>
                    </div>
                </section>

                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 d-flex my-3">
                                        <div class="mx-auto">
                                            <p class="lead text-muted py-3">Ingreso de Datos:</p>
                                            <form class="row g-3"
                                                action="../controlador/planilla/csInsertarEmpleado.php" method="POST">

                                                <div class="col-md-6 py-2">
                                                    <label for="inputNEmpleado" class="form-label">Primer Nombre <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="pnempleado"
                                                        placeholder="Ej: Daniel" maxlength="48" required>
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputNEmpleado" class="form-label">Segundo Nombre <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="snempleado"
                                                        placeholder="Ej: Joel" maxlength="48" required>
                                                </div>
                                                
                                                <div class="col-md-6 py-2">
                                                    <label for="inputNEmpleado" class="form-label">Primer Apellido <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="paempleado"
                                                        placeholder="Ej: Mckenzie" maxlength="48" required>
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputNEmpleado" class="form-label">Segundo Apellido <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="saempleado"
                                                        placeholder="Ej: Juárez" maxlength="48" required>
                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label for="inputNEmpleado" class="form-label">Otro Nombre</label>
                                                    <input type="text" class="form-control" name="tnempleado"
                                                        placeholder="Ej: Pedro" maxlength="48">
                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label for="inputDPI" class="form-label">DPI / Pasaporte <span class = "red" style="color: red;">*</span></label>
                                                    <input type="number" class="form-control" name="dpi"
                                                        placeholder="Ej: 3050548598787" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        maxlength="13" required>
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputFecha" class="form-label">Fecha de
                                                        Nacimiento <span class = "red" style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" name="fechanac"
                                                        min="1930-01-01" max="2100-12-31" placeholder="Ej: 26/05/2001"
                                                        required>
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputDireccion" class="form-label">Dirección <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="direccion"
                                                        placeholder="Ej: Ciudad" maxlength="249" required>
                                                </div>
                                                
                                                <div class="col-md-6 py-2">
                                                    <label for="inputTelefono" class="form-label">Teléfono <span class = "red" style="color: red;">*</span></label>
                                                    <!-- ESTE INPUT VALIDA SOLO NUMEROS EN UN RANGO MÁXIMO DE 8 CON JAVASCRIPT -->
                                                    <input type="number"
                                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        type="number" maxlength="8" class="form-control" name="telefono"
                                                        placeholder="Ej: 42521245" required>
                                                </div>
                                                
                                                <div class="col-md-6 py-2">
                                                    <label for="inputPuesto" class="form-label">Puesto <span class = "red" style="color: red;">*</span></label>
                                                    <input type="text" class="form-control" name="puesto"
                                                        placeholder="Ej: Desarrollador/Programador" required maxlength="48">
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputSueldo" class="form-label">Sueldo Inicial <span class = "red" style="color: red;">*</span></label>
                                                        <input type="number" class="form-control" name="sueldoinicial"
                                                        placeholder="Ej: 7000"
                                                        step="0.01" min="0" max="99999999999999999999" required>
                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label for="inputSueldo" class="form-label">Sueldo Final</label>
                                                    <input type="number" class="form-control" name="sueldofinal"
                                                        placeholder="Ej: 10000"
                                                        step="0.01" min="0" max="999999999999999">
                                                </div>

                                                <div class="col-md-6 py-2">
                                                    <label for="inputSueldo" class="form-label">Tipo de Jornada <span class = "red" style="color: red;">*</span></label>
                                                    <select class="form-control" aria-label="Default select example" name="tipojornada" required>
                                                        <option value="">Seleccione uno...</option>
                                                        <option>Vespertina</option>
                                                        <option>Diurna</option>
                                                        <option>Nocturna</option>
                                                        <option>Medio Tiempo</option>
                                                        <option>Otro</option>
                                                    </select>
                                                </div>


                                                <div class="col-md-6 py-2">
                                                    <label for="inputFecha" class="form-label">Fecha de
                                                        Contratación <span class = "red" style="color: red;">*</span></label>
                                                    <input type="date" class="form-control" name="fechacontratacion"
                                                        min="2000-01-01" max="2300-12-31" placeholder="Ej: 26/05/2021"
                                                        required>
                                                </div>
                                                <div class="col-md-6 py-2">
                                                    <label for="inputFecha" class="form-label">Fecha de
                                                        Retiro</label>
                                                    <input type="date" class="form-control" name="fecharetiro"
                                                        min="2000-01-01" max="2300-12-31" placeholder="Ej: 26/05/2021"
                                                        >
                                                </div>
                                                <div class="col-md-6 py-2">
                                                <label for="inputFecha" class="form-label">Motivo de Retiro</label>
                                                    <select class="form-control" aria-label="Default select example" name="motivoretiro">
                                                        <option></option>
                                                        <option>Despido</option>
                                                        <option>Renuncia</option>
                                                        <option>Fallecimiento</option>
                                                        <option>Otro</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12 py-2">
                                                    <label for="inputBeneficios" class="form-label">Beneficios y/o Tipo de Contrato</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Ej: Bono de Comida o Prestaciones de Ley" name="beneficios" maxlength="78">
                                                </div>
                                                

                                                <div class="col-md-6 py-3">
                                                    <button type="submit" class="btn btn-success">Agregar Empleado
                                                        </button>
                                                    <a href="../vista/usuarios.php" class="btn btn-dark">Crear Usuario</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="table-responsive w-100">
                                    <table class="table" id="tabla-mostrar">
                                            <p class="lead text-muted py-3">Visualización de Datos:</p>
                                            <div class="col-md-8 input-group mb-5">
                                                <form action="" method="GET">
                                                <input type="text" class="form-control" placeholder="Buscar Registros"
                                                aria-label="Buscar Registros" id="inputbuscar" name="busqueda">
                                                <button type="submit"  class="btn btn-light" id="search" name="buscar"><ion-icon name="search" style="font-size: 20px"></ion-icon></button>
                                                </form>
                                                <a href="../vista/planilla" type="submit"  class="btn btn-success" id="return" name="return"><ion-icon name="clipboard" style="font-size: 20px"></ion-icon></a>
                                            </div>
                                            <thead>
                                                <tr>
                                                    <th scope="col">P.Nombre</th>
                                                    <th scope="col">S.Nombre</th>
                                                    <th scope="col">Otro Nombre</th>
                                                    <th scope="col">P.Apellido</th>
                                                    <th scope="col">S.Apellido</th>
                                                    <th scope="col">Documento</th>
                                                    <th scope="col">F.Nac.</th>
                                                    <th scope="col">Direccion</th>
                                                    <th scope="col">Tel</th>
                                                    <th scope="col">Puesto</th>
                                                    <th scope="col">Sueldo I.</th>
                                                    <th scope="col">Sueldo F.</th>
                                                    <th scope="col">J.Laboral</th>
                                                    <th scope="col">F.Contratacion</th>
                                                    <th scope="col">F.Retiro</th>
                                                    <th scope="col">Motivo de Retiro</th>
                                                    <th scope="col">Beneficios o Contrato</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                </tr>
                                                <?php
                                                    include("../controlador/planilla/csListarEmpleados.php");
                                                 ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>