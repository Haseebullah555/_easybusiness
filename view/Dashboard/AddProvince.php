<?php
ob_start();
$title = "Province";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$dashboard->AddProvince();

?>