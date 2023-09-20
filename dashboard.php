<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nintengames - Dashboard</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>

    <main class="dashboard">
    <?php
        require 'includes/funciones.php';
        includeHearder ("Administrar")
        ?>
         
       <a href="add.php" class="add"></a>   
       <table>
       <?php
          include 'admin/propiedades/dashboard.php';
           ?>
       </table>
    </main>
</body>
</html>