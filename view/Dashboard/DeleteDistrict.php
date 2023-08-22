<?php

$title = "Province";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$delID = Check_Get_Param($_GET['id']);
$dashboard->DeleteDistrict(check_Get_Param($delID));
require_once ("../layout/footer.php");
?>