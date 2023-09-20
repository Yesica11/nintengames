<?php
require 'includes/config/database.php';
require 'dataselect.php';

$dataBase = conectarDataBase();
$plataforma = plataforma($dataBase);

$datos = selectAllGames($dataBase);
while ($row = mysqli_fetch_array($datos)) {
    ?>
    <tr>
        <td>
            <figure class="cover">
                <img <?php echo 'src="images/nuevas/' . $row['Cover'] . '"' ?>>
            </figure>

            <div class="info">
                <h3>
                    <?php echo $plataforma[$row['platforms_Id'] - 1] ?>
                </h3>
                <h4>
                    <?php echo $row['Tittle'] ?>
                </h4>
            </div>
            <div class="controls">
                <?php echo '<a href="show.php?id=' . $row['Idgames'] . '" class="show"></a>' ?>
                <a <?php echo 'href="edit.php?id='  . $row['Idgames'] . ' "class="edit"></a>' ?>
               <?php echo '<a href="admin/propiedades/delete.php?id=' . $row['Idgames'] . '" class="delete"></a>'?>
            </div>
        </td>
    </tr>
    <?php
}