<?php

ini_set("date.timezone", "Asia/Kabul");
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . '_EasyBusiness');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'Controllers');
defined('HIl_PATH') ? null : define('HIl_PATH', SITE_ROOT . DS . 'Helpers');
defined('FORMS_PAT') ? null : define('FORMS_PAT', SITE_ROOT . DS . 'Forms');
defined('MODELS_PAT') ? null : define('MODELS_PAT', SITE_ROOT . DS . 'Models');
require_once(HIl_PATH . DS . 'Functions.php');
require_once(LIB_PATH . DS . '/Sales/Sales.php');
require_once(LIB_PATH . DS . '/Home/Home.php');
require_once(LIB_PATH . DS . '/Dashboard/Dashboard.php');
require_once(LIB_PATH . DS . '/Gallery/Gallery.php');
require_once(LIB_PATH . DS . '/Services/Services.php');
require_once(LIB_PATH . DS . '/Reports/Reports.php');
require_once(LIB_PATH . DS . '/Login/Login.php');

?>
