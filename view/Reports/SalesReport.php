<?php

$title = "Sales Report";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$salesRp = new Reports();
$salesRp->SalesReport();
require_once ("../layout/footer.php");
?>