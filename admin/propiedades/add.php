<?php
require 'includes/config/database.php';
require 'dataselect.php';

$dataBase = conectarDataBase();
$plataforma = plataforma($dataBase);
$categoria = categoria($dataBase);
$games = Games($dataBase, $_GET['id']);
while ($row = mysqli_fetch_array($games)) {
    ?>
    <figure class="photo-preview">
        <img <?php echo 'src="images/nuevas/' . $row['Cover'] . '"' ?>>
    </figure>
    <div>
        <article class="info-title">
            <p>
                <?php echo $row['Tittle'] ?>
            </p>
        </article>
        <article class="info-platform">
            <p>
                <?php echo $plataforma[$row['platforms_Id'] - 1] ?>
            </p>
        </article>
        <article class="info-category">
            <p>
                <?php echo $categoria[$row['categories_Id'] - 1] ?>
            </p>
        </article>
        <article class="info-year">
            <p>
                <?php echo $row['Year'] ?>
            </p>
        </article>
    </div>
    </div>
    <?php
}