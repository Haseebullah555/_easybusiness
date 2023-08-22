<?php

$title = "Address";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$delOne=  Check_Get_Param($_GET['id']);
$dashboard->DeleteOneOwner(Check_Get_Param($delOne));
require_once ("../layout/footer.php");
?>