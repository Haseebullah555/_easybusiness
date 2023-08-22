<?php

$title = "List Of House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$home = new House();
$Mortgage_id=  Check_Get_Param($_GET['id']);
$home->MortgageInfos(Check_Get_Param($Mortgage_id));
//require_once ("../layout/footer.php");
?>