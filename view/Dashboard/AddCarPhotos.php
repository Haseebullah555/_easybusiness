<?php
$title = "Car Photos";
require_once ("../layout/header.php");
require_once('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$car_pics = Check_Get_Param($_GET['id']);
$dashboard->AddCarPhotos(Check_Get_Param($car_pics));
?>