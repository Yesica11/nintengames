<?php 
require "../../includes/config/database.php";
$dataBase = conectarDataBase();

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    $email = $_POST ["email"];
    $password = $_POST ["clave"];

    session_start();
    $_SESSION ["email"] = $email;

    $query = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

    if (mysqli_num_rows(mysqli_query(  $dataBase, $query))) {
        header("Location:../../dashboard.php");
    }
    else {
        $_SESSION ["Error"] = 'EL INGRESO NO ES VALIDO';
        header("Location:../../index.php");
        exit();
    }
    mysqli_close($dataBase);
}
