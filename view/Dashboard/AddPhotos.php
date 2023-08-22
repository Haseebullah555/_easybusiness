<?php
$title = "House Photos";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$picID=  Check_Get_Param($_GET['id']);
$dashboard->AddHousePhotos(Check_Get_Param($picID));
?>