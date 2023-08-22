<?php
$title = "AFTER LOGIN";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$ID = Check_Get_Param($_GET['id']);
$dashboard->AfterLogin(Check_Get_Param($ID));
require_once ("../layout/footer.php");
?>