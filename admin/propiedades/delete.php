<?php
require '../../includes/config/database.php';
require 'dataselect.php';

$dataBase = conectarDataBase();
delete($dataBase, $_GET['id']);

header ("Location: ../../dashboard.php");