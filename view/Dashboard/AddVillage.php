<?php

$title = "Village";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
//$VID=  Check_Get_Param($_GET['id']);
$dashboard->AddVillage();
//require_once ("../layout/footer.php");
?>