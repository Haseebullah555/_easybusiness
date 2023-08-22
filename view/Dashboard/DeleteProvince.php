<?php

$title = "Province";
require_once ("c:/xampp/htdocs/EasyEstate/view/layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$Did = Check_Get_Param($_GET['id']);
$dashboard->DeleteProvince(check_Get_Param($Did));
require_once ("../layout/footer.php");
?>