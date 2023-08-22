<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
class Gallery {
    protected $gallery;
    public function __construct() {
         require_once(MODELS_PAT . DS . 'GalleryModel.php');
         $this->gallery=new GalleryModel();
    }
    public function Index() {
        
        
        $ShowHousePhoto=  $this->gallery->getPhotoGallery();
        
        require_once(FORMS_PAT . DS . '/Gallery/GalleryTbl.php');
    }
    

    
    
    

}

?>
