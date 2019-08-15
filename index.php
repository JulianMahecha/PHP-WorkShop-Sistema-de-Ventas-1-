<?php
    $alert = '';
    if(!empty($_POST)){
        if (empty($_POST['usuario'] ) || empty($_POST['pass']) ) {
            $alert = 'ingrese su usuario y clave';
        }else{
            require_once  "./db/conexion.php";
            $user = $_POST['usuario'];
            $pass = $_POST['pass'];

            $query = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$pass'");
            $result = mysqli_num_rows($query);

            if ($result) {
                $data = mysqli_fetch_array($query);
                print_r($data);
            }else{
                echo mysqli_error($conn);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Sistema Facturación</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="" id="container">
        <form action="" method="POST">
            <h3>Iniciar Sesión</h3>
            <input type="text" name="usuario" id="" placeholder="Usuario">
            <input type="password" name="pass" id="" placeholder="Password">
            <p class="alert"></p>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>

</html>