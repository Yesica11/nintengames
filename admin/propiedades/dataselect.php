<?php 
function plataforma($dataBase) 
{
    $queryPlataform = "SELECT * FROM platforms" ;
    $datosPlataform = mysqli_query($dataBase, $queryPlataform);
    $Plataform = array();

    while ($row =mysqli_fetch_array($datosPlataform)) {
        $plataform[] = $row ['Name'];
    }
    return $plataform;

}

function categoria($dataBase) {
    $queryCategorie = "SELECT * FROM categories";
    $datosCategorie = mysqli_query($dataBase, $queryCategorie);
    $Categorie = array();

    while ($row = mysqli_fetch_array($datosCategorie)) {
        $Categorie[] =$row ['Name'];
    }
    return $Categorie;
}

function Games($dataBase, $id){
    $query = "SELECT * FROM games WHERE Idgames = $id";
    return mysqli_query($dataBase, $query);
}

function selectAllGames($dataBase){
    $queryGames = "SELECT * FROM games";
    return mysqli_query($dataBase, $queryGames);
}

function delete($dataBase, $id) {
    $querydelete = "DELETE FROM games WHERE Idgames = $id";
    $dataBase->query($querydelete);
}