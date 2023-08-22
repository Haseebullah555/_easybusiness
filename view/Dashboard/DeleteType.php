<?php

$title = "Address";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$del=  Check_Get_Param($_GET['id']);
$dashboard->DeleteType(Check_Get_Param($del));
require_once ("../layout/footer.php");
?>