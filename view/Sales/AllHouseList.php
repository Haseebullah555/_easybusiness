<?php

$title = "List Of House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$home = new House();
$hid=  Check_Get_Param($_GET['id']);
$home->ListOfHouses(Check_Get_Param($hid));
//require_once ("../layout/footer.php");
?>