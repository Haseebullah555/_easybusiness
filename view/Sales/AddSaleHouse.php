<?php 
$title = "Rent Person Registration";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$house = new House();
$SaleHouse_id=  Check_Get_Param($_GET['id']);
$house->AddSaleHouse(Check_Get_Param($SaleHouse_id));
//require_once ("../layout/footer.php");

?>