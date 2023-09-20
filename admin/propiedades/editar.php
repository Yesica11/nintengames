<?php
require  "../../includes/config/database.php";
require "dataselect.php";

$dataBase = conectarDataBase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $plataform = $_POST['plarform'];
    $categories = $_POST['category'];
    $year = $_POST['year'];
    $nameArchive = "";
    $id = $_GET ['id'];

    if (isset($_FILES['img'])) {
        $nameArchive = $title . "." . pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        $rutaArchivo = "../../images/nuevas/" . basename($nameArchive);
        if (file_exists($rutaArchivo)){
            unlink($rutaArchivo);
        }
        if (!file_exists($rutaArchivo) and move_uploaded_file($_FILES['img']['tmp_name'], $rutaArchivo)) {
            echo "<h1>Se subio correctamente</h1>";
        } else echo "<h1> NO se subio correctamente</h1>";
    
    }

    if (empty($nameArchive)){
        $query  = "UPDATE games SET Tittle = '$title', platforms_Id = $plataform, categories_Id = $categories, Year = $year where Idgames = $id";
     } else $query = "UPDATE games SET Tittle = '$title', platforms_Id = $plataform, categories_Id = $categories, Year = $year, Cover ='$nameArchive' where Idgames = $id";
     echo $query;
     $dataBase->query($query);

     header("Location: ../../edit.php?id=" . $id);
}