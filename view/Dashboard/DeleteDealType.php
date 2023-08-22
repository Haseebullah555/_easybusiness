<?php

$title = "Address";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$udID=  Check_Get_Param($_GET['id']);
$dashboard->DeleteDealType(Check_Get_Param($udID));
require_once ("../layout/footer.php");
?>