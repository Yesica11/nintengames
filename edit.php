<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nintengames - Edit</title>
    <link rel="stylesheet" href="css/master.css">
</head>

<body>
    <main class="edit">
        <?php
        require 'includes/funciones.php';
        require 'includes/config/database.php';
        require 'admin/propiedades/dataselect.php';
        includeHearder("Modificar");

        $dataBase = conectarDataBase();
        $id = $_GET['id'];
        $datos = Games($dataBase, $id);
        while ($row = mysqli_fetch_array($datos)) {
            ?>
            <figure class="photo-preview">
            <img <?php echo 'src="images/nuevas/' . $row['Cover'] . '"' ?>>
            </figure>
            <form <?php echo 'action="admin/propiedades/editar.php? id= ' . $id . '"' ?> method="post"
                enctype="multipart/from-date">
                <input type="text" name="title" placeholder="Title" value="<?php echo $row['Tittle'] ?>">
                <div class=" select">
                <select name="plarform">
                    <option value="">Seleccione Consola...</option>
                    <option value="1" <?php echo $row['platforms_Id'] === '1' ? 'selected' : '' ?>>Nintendo Switch
                    </option>
                    <option value="2" <?php echo $row['platforms_Id'] === '2' ? 'selected' : '' ?>>Xbox Series X
                    </option>
                    <option value="3" <?php echo $row['platforms_Id'] === '3' ? 'selected' : '' ?>>Play Station 5
                    </option>
                </select>
                </div>
                <div class="select">
                    <select name="category">
                        <option value="">Seleccione Categoría...</option>
                        <option value="1" <?php echo $row['categories_Id'] === '1' ? 'selected' : '' ?>>Aventura
                        </option>
                        <option value="2" <?php echo $row['categories_Id'] === '2' ? 'selected' : '' ?>>Metroidvania
                        </option>
                        <option value="3" <?php echo $row['categories_Id'] === '3' ? 'selected' : '' ?>>RPG</option>
                    </select>
                </div>
                <input type="file" id="img" name="img" style="display: none">
                <button type="button" class="upload" id="upload">Subir Portada</button>
                <input type="text" name="year" placeholder="Year" value="<?php echo $row['Year'] ?>">
                <button class="update">Modificar</button>
                <?php
        }
        ?>
        </form>
    </main>
    <script src="js/imgnuevas.js"></script>
</body>

</html>