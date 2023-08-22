<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
class Login {
    protected $login;
    public function __construct() {
         require_once(MODELS_PAT . DS . 'LoginModel.php');
      
        $this->login=new LoginModel();
    }
    public function Index() {
        if(isset($_POST['login'])){
        $this->login->username=  Check_Param($_POST['username']);
        $this->login->password=  Check_Param($_POST['password']);
        $this->login->checklogin();
        }
        require_once(FORMS_PAT . DS . 'Login/Login_Form.php');
    }
      
       public function LocalUserLogin($lui){
           $lui= Check_Get_Param($lui);
           
           if(isset($_POST['userlogin'])){
               $this->house->username=$_POST['username'];
               $this->house->password=$_POST['password'];
               $this->house->user_login(Check_Get_Param($lui));
              
           }
           
            require_once(FORMS_PAT . DS . '/Login/Login_Form.php');
       }
    
    public function logout(){
        
        $this->login->logout();
    }
    
    
    
    
 
}

?>