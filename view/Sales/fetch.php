<?php 
$title = "Houses";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyState/Helpers/init.php');
$users = new House();
$users->Index();
//require_once ("../layout/footer.php");

?>