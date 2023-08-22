<?php ob_start();
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
class Dashboard {
    protected $homes;
    public function __construct() {
         require_once(MODELS_PAT . DS . 'DashboardModel.php');
      
        $this->homes=new DashboardModel();
    }
    public function Index() {
         
              
        require_once(FORMS_PAT . DS . '/Dashboard/Dashboard.php');
    }
    // Registration of Villages of the District
  
    // Registration of District of kabul or other province
    public function AddProvince(){
         if(isset($_POST['AddProvince'])){
            $this->homes->province= Check_Parammore($_POST['province']);
            $this->homes->AddProvince();
        }
         $display= $this->homes->getPro();
         require_once(FORMS_PAT . DS . '/Dashboard/AddProvince.php');
    }

    //update & delete of Distrcit 
    public function UpdateProvince($id){
        $id= Check_Get_Param($id);
            if(isset($_POST['UpdateProvince'])){
                $this->homes->provincename=Check_Parammore($_POST['province']);
                $this->homes->updateOldProvince(Check_Get_Param($id));
            }
        
        
        
           $id= Check_Get_Param($_GET['id']);
           $disShow= $this->homes->getUpdateProvince(Check_Get_Param($id));
        require_once(FORMS_PAT . DS . '/Dashboard/UpdateProvince.php');
    }
    
    public function DeleteProvince($Did){
          $Did=  Check_Get_Param($_GET['id']);
        $delD=  $this->homes->deleteProvince(Check_Get_Param($Did));
    }
    //end Prvince
    //
    //District Operation
    
     public function AddDistrict(){
        if(isset($_POST['AddDistrict'])){
            $this->homes->district= Check_Parammore($_POST['district']);
            $this->homes->province= Check_Parammore($_POST['provincename']);
            $this->homes->AddDistrict();
        }
         $displa= $this->homes->getPro();
         $Prodis= $this->homes->getProDis();
         require_once(FORMS_PAT . DS . '/Dashboard/AddDistrictTbl.php');   
    }
    public function UpdateDistrict($id){
        if(isset($_POST['UpdateDistrict'])){
            $this->homes->district=$_POST['district'];
            $this->homes->UpdateDistrict(Check_Get_Param($id));
        }
         $id= Check_Get_Param($_GET['id']);
         $updispro= $this->homes->getUpdateDistrict(Check_Get_Param($id));
         require_once(FORMS_PAT . DS . '/Dashboard/UpdateDistrict.php');
    }
    public function DeleteDistrict($delID){
        $delID=  Check_Get_Param($_GET['id']);
       $delDis= $this->homes->deleteDistrict(Check_Get_Param($delID));
    }
    // Add & update & delete of village
     public function AddVillage() {
        
          if(isset($_POST['addvillage'])){
               $this->homes->village=Check_Parammore($_POST['village']);
              $this->homes->districtName=Check_Parammore($_POST['districtname']);
             
              $this->homes->AddVillage();
              
          }
       $dispro=  $this->homes-> getdis($_GET['id']);
       $Vill_list=  $this->homes->getVillage();
        require_once(FORMS_PAT . DS . '/Dashboard/AddVillage.php');
    }
    
    
    
    
    public function UpdateVillage($Vid){
        $Vid= Check_Get_Param($_GET['id']);
        if(isset($_POST['UpdateVillage'])){
            $this->homes->qname=Check_Parammore( $_POST['villagename']);
           // $this->homes->wname=$_POST['districtname'];
            $this->homes->UpdateOldVillage(Check_Get_Param($Vid));
            
        }
          
         $displ=   $this->homes->getUpdateVillage(Check_Get_Param($Vid));
   
         require_once(FORMS_PAT . DS . '/Dashboard/UpdateVillage.php');
    }
    

    public function DeleteVillage($Vid){
        $Vid=  Check_Get_Param($_GET['id']);
        $this->homes->deleteVillage(Check_Get_Param($Vid));
        
    }
    //end of village
    //

  
    //
 // Persons Registration
   
    public function AddPerson(){
      if (isset($_POST["ownerRegis"])) {
            //check file and upload get name detail
            $file =  $_FILES['file']['name'];
                rand(1000, 100000) . "-" .
            $file_loc = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];

            $folder = "c:/xampp/htdocs/EasyEstate/view/UserUpload/UserPhotos/";

            if (move_uploaded_file($file_loc, $folder . $file)) {
                if(Check_Param($_POST['sname']) != ""){
                  
                    $this->homes->name=  Check_Param($_POST['sname']);
                    $this->homes->fname=Check_Param($_POST['fname']);
                    $this->homes->gfname=  Check_Param($_POST['gfname']);
                    $this->homes->phone=Check_Param($_POST['phone']);
                    $this->homes->date=Check_Param($_POST['dateob']);
                    $this->homes->tazkira=Check_Param($_POST['tazkira']);
                    $this->homes->juld=Check_Param($_POST['juld']);
                    $this->homes->page=Check_Param($_POST['page']);
                    $this->homes->registration=Check_Param($_POST['registration']);
                    $this->homes->mainresidence=Check_Param($_POST['mainresidence']);
                    $this->homes->maindistrict=Check_Param($_POST['maindistrict']);
                    $this->homes->currentlocation=  Check_Param($_POST['currentlocation']);
                    $this->homes->currentdistrict=Check_Param($_POST['currentdistrict']);
                    $this->homes->photo=$file ;
                    $this->homes->CreatePerson();
                  
                }
                else{
                    echo "name is null ";
                }
            }    
            else{
                echo "photo is not uploaded ";
            }
                        
        }
        
         $getprovince=  $this->homes->getPro();
        $showperson=  $this->homes->showPersonTable();
         require_once(FORMS_PAT . DS . '/Dashboard/AddPersonTbl.php');
    }
    
    public function UpdatePerson($Personid){
        if(isset($_POST['UpdatePer'])){
             $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];

            $file_loc = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];

            $folder = "c:/xampp/htdocs/EasyEstate/view/UserUpload/UserPhotos/";
             if (move_uploaded_file($file_loc, $folder . $file)) {
             $this->homes->name=$_POST['sname'];
             $this->homes->fname=$_POST['fname'];
             $this->homes->gfname=$_POST['gfname'];
             $this->homes->phone=$_POST['phone'];
             $this->homes->date=$_POST['dateob'];
             $this->homes->tazkira=$_POST['tazkira'];
             $this->homes->juld=$_POST['juld'];
             $this->homes->page=$_POST['page'];
             $this->homes->registration=$_POST['registration'];
             $this->homes->mainresidence=$_POST['mainresidence'];
             $this->homes->maindistrict=$_POST['maindistrict'];
             $this->homes->currentlocation=$_POST['currentlocation'];
             $this->homes->currentdistrict=$_POST['currentdistrict'];
             $this->homes->photo=$file;
              $this->homes->UpdateOldPerson(Check_Get_Param($Personid));
             }
        } 
       $Personid= Check_Get_Param($_GET['id']);
        $UpShow=  $this->homes->UpshowPerson(Check_Get_Param($Personid));
       
         require_once(FORMS_PAT . DS . '/Dashboard/UpdatePerson.php');
    }
    public function DeleteOneOwner($delOne){
        $delOne = Check_Get_Param($_GET['id']);
        $this->homes->DeleteOneOwner(Check_Get_Param($delOne));
        
    }
    
   
    
    //end of owner or rental person
  //House Registration
    public function AddHouse($Hid){
       $Hid=  Check_Get_Param($_GET['id']);
            if(isset($_POST['addHouse'])){
                $this->homes->village1=$_POST['village'];
                $this->homes->TypeofHouse1=$_POST['housetype'];
                $this->homes->housedeal1=$_POST['housedealtype'];
                $this->homes->rooms1=$_POST['rooms'];
                $this->homes->kitchen1=$_POST['kitchen'];
                $this->homes->bathroom1=$_POST['bathroom'];
                $this->homes->floors1=$_POST['floors'];
                $this->homes->northMeasure1=$_POST['northMeasure'];
                $this->homes->southMeasure1=$_POST['southMeasure'];
                $this->homes->eastMeasure1=$_POST['eastMeasure'];
                $this->homes->westMeasure1=$_POST['westMeasure'];
                $this->homes->nearby1=$_POST['nearby'];
                $this->homes->widthArea1=$_POST['widthArea'];
                $this->homes->garage1=$_POST['garage'];
                $this->homes->guestroom1=$_POST['guestroom'];
                $this->homes->power1=$_POST['power'];
                $this->homes->yard1=$_POST['yard'];
                $this->homes->water1=$_POST['water'];
                $this->homes->license1=$_POST['licence'];
                $this->homes->rent1=$_POST['rent'];
                $this->homes->status1=$_POST['status'];
                $this->homes->about1=$_POST['about'];
                
                $this->homes->AddHouse(Check_Get_Param($Hid));
                
            }
        
        
       
        $Hshow=  $this->homes->HouseShowTable();
        $showQaryas=  $this->homes->GetVillageToHouse();
        $gethousetype=  $this->homes->getHousetype();
       $getdistrict=  $this->homes->getDist();
        $getDealtype=  $this->homes->getDealType();
         require_once(FORMS_PAT . DS . '/Dashboard/AddHouseTbl.php');
    }
    
    public function ShowHouses(){
        
        // $Hid=  Check_Get_Param($_GET['id']);
        $Hshow=  $this->homes->HouseShowTable();
         require_once(FORMS_PAT . DS . '/Dashboard/showHouses.php');
    }
    public function UpdateHouse($uHid){
        
        $uHid=  Check_Get_Param($_GET['id']);
        if(isset($_POST['UpdateHouse'])){
           
            $this->homes->uprooms=$_POST['rooms'];
            $this->homes->upkitchen=$_POST['kitchen'];
            $this->homes->upbathroom=$_POST['bathroom'];
            $this->homes->upfloor=$_POST['floors'];
            $this->homes->upnorthmeasure=$_POST['northMeasure'];
            $this->homes->upsouthmeasure=$_POST['southMeasure'];
            $this->homes->upeastmeasure=$_POST['eastMeasure'];
            $this->homes->upwestmeasure=$_POST['westMeasure'];
            $this->homes->upnearby=$_POST['nearby'];
            $this->homes->upwidtharea=$_POST['widthArea'];
            $this->homes->upgarage=$_POST['garage'];
            $this->homes->upgustroom=$_POST['gustroom'];
            $this->homes->uppower=$_POST['power'];
            $this->homes->upyard=$_POST['yard'];
            $this->homes->upwater=$_POST['water'];
            $this->homes->uplicense=$_POST['plicense']; 
            $this->homes->uprent=$_POST['rent']; 
            $this->homes->upstatus=$_POST['status']; 
            $this->homes->upabout=$_POST['about']; 
            
            $this->homes->UpdateHouse(Check_Get_Param($uHid));   
        }
                
        $gethouse=  $this->homes->housetblshow($uHid);
       require_once(FORMS_PAT . DS . '/Dashboard/UpdateHouse.php'); 
    }
    
    public function DeleteHouse($dHid){
        $dHid=  Check_Get_Param($_GET['id']);
        $this->homes->DeleteHouse(Check_Get_Param($dHid));
        
    }
    public function AddHousePhotos($picID){
       if(isset($_POST['UploadPic'])){
            $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];

            $file_loc = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];

            $folder = "c:/xampp/htdocs/EasyEstate/view/UserUpload/HousePhotos/";

        if (move_uploaded_file($file_loc, $folder . $file)) {
           $this->homes->pic=$file;
           $this->homes->AddPhoto(Check_Get_Param($picID));
            }
       }        
          $picID=  Check_Get_Param($_GET['id']);
        
        require_once(FORMS_PAT . DS . '/Dashboard/AddPhotosTbl.php');
    }
// All the Operation On House Types
    public function HouseType(){
        
        if(isset($_POST['addtype'])){
            $this->homes->housetype=$_POST['housetype'];
            $this->homes->Housetype();
        }
        
        $getType=  $this->homes->getHousetype();
        
         require_once(FORMS_PAT . DS . '/Dashboard/HouseType.php');
    } 
    public function UpdateHouseType($upID){
        
        if(isset($_POST['updatetype'])){
            $this->homes->type=$_POST['housetype'];
            $this->homes->UpdateType(Check_Get_Param($upID));
            
        }
        
        $upID=  Check_Get_Param($_GET['id']);
        $gethouse=  $this->homes->gettype(Check_Get_Param($upID));
        
        require_once(FORMS_PAT . DS . '/Dashboard/UpdateType.php');
    }
    public function DeleteType($del){
        $del=  Check_Get_Param($_GET['id']);
        $this->homes->DeleteType(Check_Get_Param($del));
    }
    
    // End of House Type
   
    
    
    // Operation On House Deal Type
    public function HouseDealType(){
        if(isset($_POST['dealType'])){
            $this->homes->dealtype=$_POST['Housedealtype'];
            $this->homes->HouseDealType();
        }
        
        $sdeal=  $this->homes->getDealType();
        require_once(FORMS_PAT . DS . '/Dashboard/HouseDealType.php');
    }  
    public function UpdateDeal($udID){
        if(isset($_POST['dealType'])){
            $this->homes->dealtypes=$_POST['dealtype'];
            $this->homes->UpdateDealType(Check_Get_Param($udID));
        }
        
        $shdealtype=  $this->homes->getdeal($udID);
         require_once(FORMS_PAT . DS . '/Dashboard/UpdateDealType.php');
    }
    public function DeleteDealType($udID){
        $udID=  Check_Get_Param($_GET['id']);
        $this->homes->DeleteDeal(Check_Get_Param($udID));
    }
    //end of house
     public function AddCar($own_car_id){
        $own_car_id= Check_Get_Param($own_car_id);
        if(isset($_POST['addCar'])){
            
            $this->homes->housedealtype=$_POST['housedealtype'];
            $this->homes->cartype= $_POST['cartype'];
            $this->homes->asnad= $_POST['asnad'];
            $this->homes->carcolor= $_POST['carcolor'];
            $this->homes->model= $_POST['model'];
            $this->homes->engine= $_POST['engine'];
            $this->homes->insidecar= $_POST['insidecar'];
            $this->homes->numberplate= $_POST['numberplate'];
            $this->homes->shasi= $_POST['shasi'];
            $this->homes->carprice= $_POST['carprice'];
            $this->homes->status= $_POST['status'];
            $this->homes->about= $_POST['about'];
            $this->homes->AddCarInfo(Check_Get_Param($own_car_id));
            
        }
        
     $getDealtype=  $this->homes->getDealType();
    require_once(FORMS_PAT . DS . '/Dashboard/AddCar.php');
    }
    public function CarList(){
        $listCar= $this->homes->CarList();
         require_once(FORMS_PAT . DS . '/Dashboard/CarList.php');
    }  
    public function UpdateCar($UpdateCarID){
        $UdtCar= Check_Get_Param($UpdateCarID);
        if(isset($_POST['UpdateCar'])){
            $this->homes->type=$_POST['cartype'];
            $this->homes->asnad=$_POST['asnad'];
            $this->homes->color=$_POST['carcolor'];
            $this->homes->model=$_POST['model'];
            $this->homes->engine=$_POST['engine'];
            $this->homes->insidecar=$_POST['insidecar'];
            $this->homes->plate=$_POST['numberplate'];
            $this->homes->shasi=$_POST['shasi'];
            $this->homes->carsprice=$_POST['carprice'];
            $this->homes->status=$_POST['status'];
            $this->homes->about=$_POST['about'];
            $this->homes->Update_Car(Check_Get_Param($UdtCar));
            
        }
        
       $getDealtype=  $this->homes->getDealType();
       $UpdateCarInfo= $this->homes->Get_Car_Info($UdtCar);
        require_once(FORMS_PAT . DS . '/Dashboard/UpdateCar.php');
    }
    public function DeleteCar($delcid){
        $delcid= Check_Get_Param($delcid);
        $this->homes->Delete_Car(Check_Get_Param($delcid));
    }
    public function AddCarPhotos($car_pics){
            $car_pics= Check_Get_Param($car_pics);
        if(isset($_POST['UploadPic'])){
            $carfile = rand(1000, 100000) . "-" . $_FILES['file']['name'];
            $file_location = $_FILES['file']['tmp_name'];
            $file_sizes = $_FILES['file']['size'];
            $file_types = $_FILES['file']['type'];

            $carfolder = "c:/xampp/htdocs/EasyEstate/view/UserUpload/CarPhotos/";

        if (move_uploaded_file($file_location, $carfolder . $carfile)) {
           $this->homes->pics=$carfile;
           $this->homes->Add_Car_Photos(Check_Get_Param($car_pics));
            }
        }
        
         require_once(FORMS_PAT . DS . '/Dashboard/AddCarPhotos.php');
    }

    //    //create user
    public function CreateUser(){
        if(isset($_POST['Createuser'])){
            $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];

            $file_loc = $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];

            $folder = "c:/xampp/htdocs/EasyEstate/view/UserUpload/EmployeePhoto/";
        if (move_uploaded_file($file_loc, $folder . $file)) {
            if($_POST['firstname']!= "" ){
            $this->homes->firstname=$_POST['firstname'];
            $this->homes->lastname=$_POST['lastname'];
            $this->homes->username=$_POST['username'];
            $this->homes->email=$_POST['email'];
            $this->homes->password=$_POST['password'];
            $this->homes->dateOB=$_POST['dateob'];
            $this->homes->phone=$_POST['phone'];
            $this->homes->type=$_POST['type'];
            $this->homes->sec_question=$_POST['sec_question'];
            $this->homes->sec_answer=$_POST['sec_answer'];
            $this->homes->sec_code=$_POST['sec_code'];
            $this->homes->file=$file;
            $this->homes->CreateUser();
            }
            else{
                echo "Name Field Is Empty..!";
            }
           
            
        }
         
       }
        //<script>alert('photo is not uploaded')</script>
         require_once(FORMS_PAT . DS . '/Dashboard/CreateUserTbl.php');
    }
    
    public function AddAddress(){
       
         require_once(FORMS_PAT . DS . '/Dashboard/AddAddress.php');
    }
    
    // For Company Information and Slide Show
    
    public function CompanyInfo(){
        
            if(isset($_POST['SabMeet'])){
                $pics=$_FILES['logo']['name'];
                $pic_location=$_FILES['logo']['tmp_name'];
              
                $picFolder="c:/xampp/htdocs/EasyEstate/view/UserUpload/Setup/";
                if(move_uploaded_file($pic_location,$picFolder.$pics )){
                    $this->homes->EnglishName=  $_POST['englishname'];
                    $this->homes->DariName= $_POST['dariname'];
                    $this->homes->ComPhone=$_POST['phoneNo'];
                    $this->homes->javazno=$_POST['jvzno'];
                    $this->homes->ComAddress=$_POST['companyAddress'];
                    $this->homes->file=$pics;
                    $this->homes->CompanyInfo();
               
                }
            }
        $getcompanyinfo=  $this->homes->getCompanyInfo();
        require_once(FORMS_PAT . DS . '/Dashboard/CompanyInfo.php');
    }
    
    
    public function SlideShow(){
       
        if(isset($_POST['AddSlideShow'])){
            
            $file=$_FILES['slideshowpics']['name'];
            $file_location=$_FILES['slideshowpics']['tmp_name'];
            $folder="c:/xampp/htdocs/EasyEstate/view/UserUpload/slideshow/"; 
               
         if(move_uploaded_file($file_location , $folder.$file)){
              
                  $this->homes->file=$file;
                  
                  $this->homes->SlideShow();   
                    }
          }
        $showPics= $this->homes->showSlideShow();
        
        
        require_once(FORMS_PAT . DS . '/Dashboard/SlideShow.php');
    }
    
    public function DeleteSlide($slideIDDel){
        $Sid= Check_Get_Param($slideIDDel);
        $this->homes->DeleteSlide(Check_Get_Param($Sid));
    }
    
    
    
    
    
   public function AfterLogin($ID){
       $tem=  Check_Get_Param($ID);
       
        require_once(FORMS_PAT . DS . '/Dashboard/_UserProfile.php');
   }
   public function UserList(){
        
        $Users=  $this->homes->UserList();
        require_once(FORMS_PAT . DS . '/Dashboard/_UserList.php');
   }

   // end of user
    // 
    // end of index
}
ob_end_flush();
?>