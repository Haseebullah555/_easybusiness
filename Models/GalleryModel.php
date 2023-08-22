<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
include ("c:/xampp/htdocs/_EasyBusiness/config/database.php");


class GalleryModel extends database{
    
        
    public function getPhotoGallery(){
        $gstmt=  $this->connec->prepare("select id,gallery from gallery_tbl");
        $gstmt->execute();
        return $gstmt->fetchAll();
        
    }
}
?>