<?php

$title = "Home";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/_EasyBusiness/Helpers/init.php');
$home = new Reports();
$home->LowStockRep();
//require_once ("../layout/footer.php");
?>