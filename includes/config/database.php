<?php
function conectarDataBase (){
    $dataBase=mysqli_connect('localhost', 'root', '110299', 'nintengames');

    if($dataBase){
        return $dataBase; 
    } else{
        echo "No se conecto";
    }
    return $dataBase;
}