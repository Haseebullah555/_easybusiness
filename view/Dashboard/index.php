<?php

$title = "Home";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$dashboard = new Dashboard();
$dashboard->Index();
//require_once ("../layout/footer.php");
?>