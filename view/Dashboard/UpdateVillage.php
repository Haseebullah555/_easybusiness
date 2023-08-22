<?php

$title = "Village";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$Vid = Check_Get_Param($_GET['id']);
$dashboard->UpdateVillage(check_Get_Param($Vid));

?>