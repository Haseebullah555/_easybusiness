<?php

$title = "List Of House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$home = new House();
$renthouseid=  Check_Get_Param($_GET['id']);
$home->RentsInfos(Check_Get_Param($renthouseid));
//require_once ("../layout/footer.php");
?>