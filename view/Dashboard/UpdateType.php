<?php

$title = "Address";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$upID=  Check_Get_Param($_GET['id']);
$dashboard->UpdateHouseType(Check_Get_Param($upID));
require_once ("../layout/footer.php");
?>