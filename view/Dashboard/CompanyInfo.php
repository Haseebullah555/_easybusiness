<?php

$title = "Company Information";
require_once ("../layout/header.php");
require_once ('c:/xampp/htdocs/EasyEstate/Helpers/init.php');
$companyinfo = new Dashboard();
$companyinfo->CompanyInfo();

?>