<?php
/* llamado a la conexion con la base de datos*/

require '../../includes/config/database.php';
$dataBase = conectarDataBase();

/*verificacion de la informacion que se envia del formulario*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $plataform = $_POST['plarform'];
    $categories = $_POST['category'];
    $year = $_POST['year'];
    $nameArchive = "";

    /*Muestreo de los errores encontrados en los campos de formulacion */

    $error = [];

    if (!$title) {
        $error[] = "El campo del titulo se encuentra vacido";
    }

    if (!$plataform) {
        $error[] = "El campo de la plataforma se encuentra vacida";
    }

    if (!$categories) {
        $error[] = "El campo de la categoria se encuentra vacio";
    }

    if (!$year) {
        $error[] = "El campo de años se encunetra vacia";
    }

    if (!$nameArchive) {
        $error[] = "El campo de nombre de archivo se encuentra vacia";
    }

    /*Mostrara la carpeta y el archivo de la imagen almacenda */

    if (isset($_FILES['imgnuevas'])) {
        $nameArchive = $title . "." . pathinfo($_FILES['imgnuevas']['name'], PATHINFO_EXTENSION);
        echo $nameArchive;
        $rutaArchivo = "../../images/nuevas/" . basename($nameArchive);

        if (move_uploaded_file($_FILES['imgnuevas']['tmp_name'], $rutaArchivo)) {
            echo "<h1> Se subio correctamente el archivo</h1>";
        } else
            echo "<h1>No se subio correctamente el archivo</h1>";
    }

    /*Guarda y envia la informacion a la base de datos  */

    $query = "INSERT INTO `games`(Tittle, year, platforms_Id, categories_Id, cover) VALUES ('$title', '$year', $plataform, $categories, '$nameArchive');";
    echo $query;
    
    if (!empty($errores) or !mysqli_query($dataBase, $query)) {
        echo "error al insertar los datos";
    } else {
        echo "datos ingresados correctamente";
        header("Location: ../../add.php");
        exit();
    }
}