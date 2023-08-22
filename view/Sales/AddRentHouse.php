<?php 
$title = "Rent Person Registration";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$house = new House();
$Rhouse_get_id=  Check_Get_Param($_GET['id']);
$house->AddRentHouse(Check_Get_Param($Rhouse_get_id));
//require_once ("../layout/footer.php");

?>