<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Marquez</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type = "text/css" href="css/style.css">
    <link rel="stylesheet" type = "text/css" href="css/css/all.min.css">

</head>
<body>
    <img class="wave" src="imagenes/wave.png" alt="">
    <div class="contenedor">
        <div class="img">
            <img src="imagenes/usuario.png" alt="">
        </div>
        <div class="contenido-login">
            <form action="">
                <img src="imagenes/usuario1.png" alt="">
                <h2>Tienda Marquez</h2>
                <div class="input-login dni">
                    <div class="i">
                        <i class="fas fa-user "> </i>
                    </div>
                    <div class="div">
                        <h5>Usuario o DNI</h5>
                        <input type="text" name="user" class="input" >
                    </div>
                </div>
                <div class="input-login pass">
                    <div class="i">
                        <i class="fas fa-lock "> </i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="pass" class="input" >
                    </div>
                </div>
                <input type="submit" class="btn" value="Iniciar Sesion">
            </form>
        </div>

    </div>

</body>

<script src="js/login.js"></script>

</html>