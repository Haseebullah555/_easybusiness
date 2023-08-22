<?php

$title = "Update Province";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$id = Check_Get_Param($_GET['id']);
$dashboard->UpdateProvince(check_Get_Param($id));

?>