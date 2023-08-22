<?php

//session_regenerate_id();
/////change to the default location of web directory///////////
$rootDirectoryWeb = "c:/xampp/htdocs/EasyEstate/";
///////////////////////////////////////////////////////////////

//require_once ($rootDirectoryWeb . "/config/database.php");
//require_once ($rootDirectoryWeb . "/Models/DashboardModel.php");
//require_once ($rootDirectoryWeb . "/Models/HomeModel.php");
//require_once ($rootDirectoryWeb . "/_Models/VisitorsModel.php");
//require_once ($rootDirectoryWeb . "/_Helpers/pagination.php");

function strip_zeros_from_date($marked_string = "") {
    // first remove the marked zeros
    $no_zeros = str_replace('*0', '', $marked_string);
    // then remove any remaining marks
    $cleaned_string = str_replace('*', '', $no_zeros);
    return $cleaned_string;
}

function redirect_to($location = NULL) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

function output_message($message = "") {
    if (!empty($message)) {
        return "<p class=\"message\">{$message}</p>";
    } else {
        return "";
    }
}

function spl_autoload_registe($class_name) {
    $class_name = strtolower($class_name);
    $path = "LIB_PATH.DS.{$class_name}.php";
    if (file_exists($path)) {
        require_once($path);
    } else {
        die("The file {$class_name}.php could not be found.");
    }
}

function generateRandomString($length = 40) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateRandomStringTow($length = 6) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function include_layout_template($template = "") {
    include(SITE_ROOT . DS . 'view' . DS . 'layouts' . DS . $template);
}

function hash_value($value) {
    return md5($value) . "9999";
}

function Check_Param($val) {
    $search = array(
        '@<script[^>]*?>.*?</script>@si', // Strip out javascript
        '@<[\/\!]*?[^<>]*?>@si', // Strip out HTML tags
        '@<style[^>]*?>.*?</style>@siU', // Strip style tags properly
        '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );
    $valuee = preg_replace($search, '', $val);
    $value = substr($valuee, 0, 35);
    $value1 = addslashes($value);
    $string1 = htmlspecialchars($value1);
    $string2 = strip_tags($string1);

    //$string3 = escapeshellarg($string2);
    // $string4 = escapeshellcmd($string3);
    return $string2;
}

function Check_Parammore($val) {
    $search = array(
        '@<script[^>]*?>.*?</script>@si', // Strip out javascript
        '@<[\/\!]*?[^<>]*?>@si', // Strip out HTML tags
        '@<style[^>]*?>.*?</style>@siU', // Strip style tags properly
        '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );
    $valuee = preg_replace($search, '', $val);
    $value = substr($valuee, 0, 5000);
    $value1 = addslashes($value);
    $string1 = htmlspecialchars($value1);
    $string2 = strip_tags($string1);
    //$string3 = escapeshellarg($string2);
    // $string4 = escapeshellcmd($string3);
    return $string2;
}

function Check_Get_Param($val) {
    $value1 = addslashes($val);
    $string1 = htmlspecialchars($value1);
    $string2 = strip_tags($string1);
    $string3 = intval($string2);
    return $string3;
}

function assignIfNotEmpty(&$item, $alternative) {
    return (!empty($item)) ? $item : $alternative;
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

?>