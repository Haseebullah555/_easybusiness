<?php 
$title = "Houses";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$users = new House();
$users->Rent();
//require_once ("../layout/footer.php");

?>