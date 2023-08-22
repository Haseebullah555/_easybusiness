<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
class Reports {
      protected $report;
    public function __construct() {
         require_once(MODELS_PAT . DS . 'ReportsModel.php');
         $this->report=new ReportsModel();
    }
    public function Index(){
        
    }
    
    public function SalesReport(){
        
        
        
        
        require_once(FORMS_PAT . DS . '/Reports/SalesReport.php');
    }
    
    public function LowStockRep(){
        
        $getlowstock= $this->report->Get_Low_Stock();
        
   require_once(FORMS_PAT . DS . '/Reports/LowStockRep.php');       
    }
   public function CurrentStockRep(){
   
       $getcurrentstock= $this->report->Get_Current_Stock();
       
   require_once(FORMS_PAT . DS . '/Reports/CurrentStock.php');   
   } 
    
    
    
    
    
    
    
    
}
?>