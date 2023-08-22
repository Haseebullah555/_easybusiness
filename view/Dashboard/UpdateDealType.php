<?php

$title = "Address";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$udID=  Check_Get_Param($_GET['id']);
$dashboard->UpdateDeal(Check_Get_Param($udID));

?>