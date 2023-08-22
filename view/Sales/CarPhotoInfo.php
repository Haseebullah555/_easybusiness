<?php
$title = "Selected Car Info";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$home = new House();
$get_carid=  Check_Get_Param($_GET['id']);
$home->Car_Photo_Info(Check_Get_Param($get_carid));
//require_once ("../layout/footer.php");
?>