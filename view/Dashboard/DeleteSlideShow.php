<?php

$title = "Slide Show";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$slideIDDel = Check_Get_Param($_GET['id']);
$dashboard->DeleteSlide(check_Get_Param($slideIDDel));
require_once ("../layout/footer.php");
?>