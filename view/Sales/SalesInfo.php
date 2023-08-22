<?php

$title = "List Of House";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$home = new House();
$sales_info_id=  Check_Get_Param($_GET['id']);
$home->Sales_Infos(Check_Get_Param($sales_info_id));
//require_once ("../layout/footer.php");
?>