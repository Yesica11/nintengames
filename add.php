<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nintengames - Add</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <main class="add">
        
        <?php
        require 'includes/funciones.php';
        includeHearder ("Adicionar")
        ?>
        
        <figure class="photo-preview">
            <img src="images/photo-lg-0.svg" alt="">
        </figure>
        <form action="admin/propiedades/create.php" method="post" name="insertar-datos" id="insertar-datos" enctype="multipart/form-data" >
            <input type="text" name="title" placeholder="Title">
            <div class="select">
                <select name="plarform">
                    <option value="">Seleccione Consola...</option>
                    <option value="1">Nintendo Switch</option>
                    <option value="2">Xbox Series X</option>
                    <option value="3">Play Station 5</option>
                </select>
            </div>
            <div class="select">
                <select name="category">
                    <option value="">Seleccione Categoría...</option>
                    <option value="1">Aventura</option>
                    <option value="2">Metroidvania</option>
                    <option value="3">RPG</option>
                </select>
            </div>
            <input type="file" name="imgnuevas" id="img"  style="display: none">
            <button type="button" class="upload" id="upload">Subir Portada</button>
            <input type="text" name="year" placeholder="Year">
            <button class="save">Guardar</button>
        </form>
    </main>
    <script src="js/imgnuevas.js"></script>
</body>
</html>