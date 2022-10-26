<?php 
    session_start();
    if($_POST) {
        if($_POST['usuario']=="franklox" && $_POST['password']=="kaiser66") {
            
            $_SESSION['usuario'] = "franklox";

            header("location:index.php");

        } else {
            echo "<script>
                    alert('Usuario o contraseña incorrecta');
                </script>";
        }
    }

?>

<!doctype html>
<html lang="en">

    <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    </head>
    <body>

    <div class="container login">

        <div class="row justify-content-center align-items-center g-2 ">
            <!-- <div class="col-4"> </div> -->

            <div class="col-4">
                
                <div class="card">
                    <div class="card-header">
                        Bienvenido
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario: <input class="form-control" type="text" name="usuario" id="">
                            <br>
                            Contraseña: <input class="form-control" type="password" name="password" id="">
                            <br>
                            <button type="submit" class="btn btn-success">Iniciar</button>
                        </form>
                    </div>
                    <!-- <div class="card-footer text-muted"> </div> -->
                </div>

            </div>

           <!--  <div class="col-4">  </div> -->
        </div>

    </div>
        
    </body>

</html>