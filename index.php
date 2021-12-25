<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/sge/css/login.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Inicio | Distribuidora ARD</title>
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h1 class="login-heading mb-4">Login</h1>
                                <!-- Formulario de Ingreso -->
                                <form id="form-login" class="form" action="controlador/login/csLogin.php"method="POST">

                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" maxlength="20" required>
                                        <label for="floatingInput">Usuario</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="clave" placeholder="Password" maxlength="20" required>
                                        <label for="floatingPassword">Contraseña</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <select class="form-control" id="rol" name="rol" required>
                                                        <option value="">Seleccione uno...</option>
                                                        <option value="admin">Administrador</option>
                                                        <option value="rrhh">Recursos Humanos</option>
                                                        <option value="logistica">Logistica</option>
                                                        <option value="ventas">Ventas</option>
                                                        <option value="it">Logistica</option>
                                                    </select>
                                        <label for="floatingInput">Rol Asignado</label>
                                    </div>

                                    <div class="d-grid">
                                        <input type="submit" name="submit" class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" value="ingresar">
                                    </div>

                                </form>
                                <br>
                                <p class="login-heading mb-4">Sistema de Gestión Empresarial (SGE) <br>Versión: v1.0<br>© BalamXCode - 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
</html>