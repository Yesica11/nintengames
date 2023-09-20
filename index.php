<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nintengames - Login</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <main class="login">
        <form action="admin/propiedades/validacion.php" method="post">
            <input type="text" name="email" placeholder="Correo Electrónico">
            <input type="password" name="clave" placeholder="Contraseña">
            <?php
            session_start();
            if (isset($_SESSION ["Error"])){ 
                echo "<h1> {$_SESSION ["Error"]}</h1>";
                unset($_SESSION ["Error"]);

            }

            ?>
            <button>Ingresar</button>
        </form>
    </main>
</body>
</html>