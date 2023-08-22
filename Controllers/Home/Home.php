<?php
require_once 'c:/xampp/htdocs/_EasyBusiness/Helpers/init.php';
class Home
{
    protected $home;
    public function __construct()
    {
        require_once(MODELS_PAT . DS . 'HomeModel.php');
        $this->home = new HomeModel();
    }

    public function Index()
    {
        //require_once(MODELS_PAT . DS . 'HomeModel.php');
        $getSales = $this->home->getSaleInfo();
        $getPurchase = $this->home->getPurchaseInfo();
        $getAfgPurchase = $this->home->getAFGPurchaseInfo();
        ;
        require_once(FORMS_PAT . DS . '/Home/HomeTbl.php');
    }

    public function Item_Registration()
    {

        if (isset($_POST['SaveItem'])) {
            if ($_POST['productname'] != "") {
                $this->home->SearchItem = $_POST['itemsearch'];
                $this->home->TypeItem = $_POST['itemtype'];
                $this->home->Barcode = $_POST['barcode'];
                $this->home->ProductName = $_POST['productname'];
                $this->home->GenricName = $_POST['genricName'];
                $this->home->CompanyName = $_POST['companyname'];
                $this->home->P_Size = $_POST['psize'];
                $this->home->ExpireDate = $_POST['expriedate'];
                $this->home->MinStock = $_POST['minstock'];
                $this->home->MaxStock = $_POST['maxstock'];
                $this->home->purchaseprice = $_POST['purchaseprice'];
                $this->home->saleprice = $_POST['saleprice'];
                $this->home->ItemRegistration();
            } else {
                echo "<font color='red' style='margin-left:30px;'>لطفا نام جنس را وارد نماید...</font>";

            }

        }
        $showrec = $this->home->getrecord();

        require_once(FORMS_PAT . DS . '/Home/Item_Registration.php');
    }
    public function PurchaseItems()
    {


    }

    // home item 
    public function Purchase_Invoice()
    {

        //        Search Item By Name or ID
        if (isset($_POST['PurchaseItem'])) {
            if ($_POST['quantity'] != "") {
                $this->home->Barcode = $_POST['barcode'];
                $qty = $this->home->quantity = $_POST['quantity'];
                $pcr = $this->home->pprice = $_POST['purchasePrice'];
                $spc = $this->home->sprice = $_POST['SalePrice'];
                $cur = $this->home->currency = $_POST['currency'];
                if ($cur == 2) {
                    $ttcost = $this->home->ttcost = ($qty) * ($spc);
                    $ttl = $this->home->total = ($qty) * ($pcr);
                    $this->home->ttscost = $ttcost - $ttl;
                    $this->home->PurchaseItemByDollor();
                } else if ($cur == 1) {
                    $ttcost = $this->home->ttafgcost = ($qty) * ($spc);
                    $ttl = $this->home->totalafg = ($qty) * ($pcr);
                    $this->home->ttsafgcost = $ttcost - $ttl;
                    $this->home->PurchaseItemBYAfghani();
                }

            }
        }
        if (isset($_POST['SearchItem'])) {
            $this->home->searchProduct = $_POST['barcode'];
            $this->home->SearchItemForPurchase();

        }
        $schproduct = $this->home->SearchItemForPurchase();
        $srchItmP = $this->home->SearchForPRCH();
        $gtCurrency = $this->home->gtCurrency();

        require_once(FORMS_PAT . DS . '/Home/PurchaseInvoice.php');
    }
    public function Testing()
    {
        $lastid = $this->home->getlastid(['id']);
        foreach ($lastid as $idd)
            $lstid = $idd['id'];
        if ($lstid == " ") {
            $empid = "INV1";
        } else {
            $empid = substr($lstid, 3);
            $empid = intval($empid);
            $empid = "INV" . ($empid + 1);
        }
        if (isset($_POST['addvalue'])) {
            $this->home->id = $_POST['id'];
            $this->home->name = $_POST['name'];
            $this->home->sal = $_POST['salary'];
            $this->home->SaveInv();



            if (isset($_POST['chk']) && isset($_POST['name'])) {
                $checkbox = $_POST['chk'];
                $chvalue = implode(",", $checkbox);
                $this->home->name = $_POST['name'];
                //print_r($chvalue);
                $this->home->Addcheck($chvalue);
            } else if (!isset($_POST['chk']) && isset($_POST['name'])) {

                $this->home->AddnameWithoutcheckbox();
            }


        }
        $gtdata = $this->home->getdata();
        require_once(FORMS_PAT . DS . '/Home/Testing.php');
    }
    // for sale item first will be search

    public function Add_Company()
    {
        require_once(FORMS_PAT . DS . '/Home/Add_Company.php');
    }

    public function OldBill()
    {
        if (isset($_POST['SaveOldBill'])) {
            $this->home->custName = $_POST['cusName'];
            $this->home->Afgamount = $_POST['afgamount'];
            $this->home->Billno = $_POST['billno'];
            $this->home->Pkamount = $_POST['pkamount'];
            $this->home->companyname = $_POST['companyname'];
            $this->home->bdate = $_POST['bdate'];
            $this->home->billtype = $_POST['billtype'];
            $this->home->totalamount = $_POST['totalamount'];
            $this->home->Old_Bill_Data();

        }

        $getoldbill = $this->home->Get_Old_Bill_Data();
        require_once(FORMS_PAT . DS . '/Home/OldBill.php');
    }



    public function Add_Customer()
    {

        if (isset($_POST['AddCustomer'])) {
            //      $file =rand(1000, 100000) . "-" . $_FILES['file']['name'];
            //         $file_loc = $_FILES['file']['tmp_name'];
            //         $file_size = $_FILES['file']['size'];
            //         $file_type = $_FILES['file']['type'];
            //         $folder = "c:/xampp/htdocs/SREU_HRMIS/view/UserUpload/UserPhotos/";
            //    if (move_uploaded_file($file_loc, $folder . $file)) {
            $this->home->uname = Check_Parammore($_POST['uname']);
            $this->home->lname = Check_Parammore($_POST['lname']);
            $this->home->fname = Check_Parammore($_POST['fname']);
            // $this->home->marketname= Check_Parammore($_POST['marketname']);
            // $this->home->owner= Check_Parammore($_POST['owner']);
            // $this->home->shopname= Check_Parammore($_POST['shopname']);
            $this->home->phone = Check_Parammore($_POST['phone']);
            // $this->home->shopno= Check_Parammore($_POST['shopno']);
            // $this->home->address= Check_Parammore($_POST['address']);
            // $this->home->image= Check_Parammore($file);
            $this->home->Add_Customer();
            //    }
            //   else{
            //         echo"عکس را اضافه کنید";
            //     }

        }

        require_once(FORMS_PAT . DS . '/Home/Add_Customer.php');
    }

    public function LanguageChange($lang)
    {

        $lang = Check_Param($lang);
        if ($lang == "ENGLISH") {

            $_SESSION['language'] = Check_Param("ENGLISH");
        } else if ($lang == "PASHTO") {

            $_SESSION['language'] = Check_Param("PASHTO");
        } else if ($lang == "DARI") {

            $_SESSION['language'] = Check_Param("DARI");
        } else {

            $_SESSION['language'] = Check_Param("ENGLISH");
        }
        header('Location: ' . $_SERVER["HTTP_REFERER"]);
        exit;
    }



    // end of class
}

?>