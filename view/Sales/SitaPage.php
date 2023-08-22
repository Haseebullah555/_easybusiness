<?php

$title = "Sita";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$sita = new House();
$sita->Sita();
require_once ("../layout/footer.php");
?>