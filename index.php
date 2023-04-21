<?php

    require "conexion.php";
    //require "datos_depositos";
    session_start();

    if  ($_POST){

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $sql = "SELECT id, nombres, apellidos, email, wallet_usdt, usuario, password, referido_por, plan, tipo_usuario FROM usuario WHERE usuario='$usuario'";
        //echo $sql;
        $resultado = $mysqli ->query($sql);
        $num = $resultado->num_rows;

        if($num>0){
            $row = $resultado->fetch_assoc();
            $password_bd = $row ['password'];

            $pass_c = sha1($password);

            if ($password_bd == $pass_c){
                $_SESSION['id'] = $row['id'];
                $_SESSION['nombres'] = $row['nombres'];
                $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
                
                
                header  ("Location: principal.php");

            }else   {
                echo    "Ups! al parecer tu contraseña no concide con el usuario ingresado";
            }
            
        }else{
            echo "Ups! al parecer tu usuario es incorrecto o no existe.";        
        }
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Horus System</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <style>
  body {
    background-image: url('imagenes/cobertura.png');
    background-color: black ;
    background-size: cover;
    background-position: center;
    
  }
</style>

    <body>

    <div style="text-align: center;">
        <span> <br><br><br><br><br><img src="imagenes/logo-horizontal.png" alt="Logo horizontal" style="width: 300px; height: 100px;"></span>
    </div>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
               
                <div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ingresar</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];    ?>">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="usuario" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Recordar Contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button  type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Horus Global 2023</div>
                            <div>
                                <a href="#">Politica de Privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
