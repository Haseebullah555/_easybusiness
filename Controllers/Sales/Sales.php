<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
class Sales
{
    protected $sales;
    public function __construct()
    {
        require_once(MODELS_PAT . DS . 'SalesModel.php');

        $this->sales = new SalesModel();
    }

    public function Index()
    {
        require_once(FORMS_PAT . DS . '/Sales/SalesHome.php');
    }
    public function LocalUserLogin($lui)
    {
        $lui = Check_Get_Param($lui);

        if (isset($_POST['userlogin'])) {
            $this->sales->username = $_POST['username'];
            $this->sales->password = $_POST['password'];
            $this->sales->user_login(Check_Get_Param($lui));
        }
        require_once(FORMS_PAT . DS . '/Sales/Login_Form.php');
    }

    public function Invoice()
    {
        $invoiceinfo = $this->sales->Print_Invoice();
        $invoiceid = $this->sales->Find_max_INV();
        require_once(FORMS_PAT . DS . '/Sales/Invoice.php');
    }
    public function Customer_Invoice($cusid)
    {
        $cusid = Check_Get_Param($_GET['id']);
        $invoiceinfo = $this->sales->Customer_Print_Invoice(Check_Parammore($cusid));
        $invoiceid = $this->sales->Find_max_INV();
        require_once(FORMS_PAT . DS . '/Sales/Customer_Invoice.php');
    }
    public function Return_Invoice()
    {
        $invoiceinfo = $this->sales->Print_Return_Invoice();
        $invoiceid = $this->sales->Find_return_max_INV();
        require_once(FORMS_PAT . DS . '/Sales/Return_Invoice.php');
    }
    public function Sale_Item()
    {
        $lastid = $this->sales->getlastid(['INV_No']);
        foreach ($lastid as $idd)
            $lstid = $idd['INV_No'];
        if ($lstid == "") {
            $empid = "INV1";
        } else {
            $empid = substr($lstid, 3);
            $empid = intval($empid);
            $empid = "INV" . ($empid + 1);
        }
        if (isset($_POST['searchItm'])) {

            if (isset($_POST['searchbarcode']) != '') {
                $this->sales->brcd = Check_Parammore($_POST['searchbarcode']);
                $this->sales->SearchAndDisplay();

            } else {
                $message = "بارکود را وارد کنید";
            }
        }
        if (isset($_POST['AddProduct'])) {
            $brd = $this->sales->barcode = Check_Parammore($_POST['searchbarcode']);
            $this->sales->productname = Check_Parammore($_POST['proname']);
            $this->sales->qty_pro = Check_Parammore($_POST['qty']);
            $invid = $this->sales->invid = Check_Parammore($_POST['inv_id']);
            $this->sales->Sales_Item();

        }
        if (isset($_POST['SavePrint'])) {
            $customer = $this->sales->customer = Check_Get_Param($_POST['customer']);
            $discount = $this->sales->discount = Check_Param($_POST['Discount']);
            $cashdue = $this->sales->debtamount = Check_Param($_POST['CashDue']);
            $recieve = $this->sales->receive = Check_Param($_POST['Receive']);
            if (!empty($customer) && !empty($cashdue) && empty($discount) && empty($recieve)) {
                $this->sales->SaveDataCaseDue();
            }
            if (empty($discount) && empty($cashdue) && !empty($recieve)) {
                $this->sales->SaveDataReceive();
            }
            //          if(empty($discount) && !empty($cashdue) && empty($recieve)){
//              $this->sales->SaveDataCaseDue();
//          }
            if (!empty($customer) && !empty($discount) && !empty($cashdue) && empty($recieve)) {
                $this->sales->SaveDataCaseDueDiscount();
            }
            if (!empty($discount) && empty($cashdue) && !empty($recieve)) {
                $this->sales->SaveDataReceiveDiscount();
            }

        } //end of save print 

        if (isset($_POST['lastinvoice'])) {
            if (empty($_POST['searchbarcode'])) {
                $getSaleInfo = $this->sales->Get_Last_INV();
            }
        }
        if (isset($_POST['deletetable'])) {
            $getdeleteid = ($_POST['checkid']);
            $deleteID = implode("", $getdeleteid);
            $this->sales->Delete_Sales_Item($deleteID);
        }
        $getcust = $this->sales->Get_Customer();
        $grosstotal = $this->sales->Gross_Total(['total']);
        $getSaleInfo1 = $this->sales->get_Sales_Info();
        $getSalesItem = $this->sales->SearchAndDisplay();
        $getstockitem = $this->sales->DisplayAllStock();
        require_once(FORMS_PAT . DS . '/Sales/SalesHome.php');
    }
    public function Direct_Sales()
    {




        // require_once(FORMS_PAT . DS . '/Sales/SalesHome.php');      
    }

    public function ReturnSalesItem()
    {
        $lastid = $this->sales->getlastidreturn(['INV_No']);
        foreach ($lastid as $idd)
            $lstid1 = $idd['INV_No'];
        if ($lstid1 == "") {
            $empid = "INV1";
        } else {
            $empid = substr($lstid1, 3);
            $empid = intval($empid);
            $empid = "INV" . ($empid + 1);
        }
        if (isset($_POST['searchItm'])) {

            if (isset($_POST['searchbarcode']) != '') {
                $this->sales->brcd = Check_Parammore($_POST['searchbarcode']);
                $this->sales->SearchAndDisplayreturn();
            } else {
                $message = "بارکود را وارد کنید";
            }
        }
        if (isset($_POST['AddProduct'])) {

            $brd = $this->sales->barcode = ($_POST['searchbarcode']);
            $this->sales->productname = ($_POST['proname']);
            $this->sales->qty_pro = ($_POST['qty']);
            $invid = $this->sales->invid = ($_POST['inv_id']);
            $this->sales->Return_Sales_Item();

        }
        if (isset($_POST['SavePrint'])) {
            $customer = $this->sales->customer = Check_Get_Param($_POST['customer']);
            $discount = $this->sales->discount = Check_Param($_POST['Discount']);
            $cashdue = $this->sales->debtamount = Check_Param($_POST['CashDue']);
            $recieve = $this->sales->receive = Check_Param($_POST['Receive']);
            if (!empty($customer) && !empty($cashdue) && empty($discount) && empty($recieve)) {
                $this->sales->SaveDataCaseDue();
            }
            if (empty($discount) && empty($cashdue) && !empty($recieve)) {
                $this->sales->ReturnSaveDataReceive();
            }
            //          if(empty($discount) && !empty($cashdue) && empty($recieve)){
//              $this->sales->SaveDataCaseDue();
//          }
            if (!empty($discount) && !empty($cashdue) && empty($recieve)) {
                $this->sales->SaveDataCaseDueDiscount();
            }
            if (!empty($discount) && empty($cashdue) && !empty($recieve)) {
                $this->sales->ReturnSaveDataReceiveDiscount();
            }

        } //end of save print 



        $getcust = $this->sales->Get_Customer();
        $grosstotal = $this->sales->Gross_return_Total(['total']);
        $getSaleInfo1 = $this->sales->get_Sales_return_Info();
        $getSalesItem = $this->sales->SearchAndDisplayreturn();
        require_once(FORMS_PAT . DS . '/Sales/ReturnSalesItem.php');
    }








































































































    //end of class
}

?>