<link rel="shortcut icon" href="../Public/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../Public/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../Public/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="../Public/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/dropzone/dist/min/dropzone.min.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/flatpickr/flatpickr.min.css">

         <link rel="stylesheet" href="../Public/assets/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="../Public/assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="../Public/assets/css/oneui.min.css">
<style>
    #itemsearch{width: 470px;}
    .contentup{margin-top: -30px;}
     .bottomblock{margin-top: -15 !important;}
    .content {
    padding: 15 !important;
}
#itemtype{width: 200px;}#nameitem{width: 200px; margin-right: 20px;}
    content-block{padding: 0 !important;}div.block{font-size: 12;}
    .col-form-label{font-size: 12; width: 100px;}
    .nopadding tr td{padding: 3 !important; }.nopadding tr td input{width: 300px;}
    .nofont,thead th{font-size: 12 !important;}
    #gname{width:180px;}
    #smallinput{width: 50px;}#stocklevel{width: 180px;}#stocklbl{margin-right: 90px;}
    #larginput{width: 250px;}#currencysminput{width: 150px;}#currencyinput{width: 150px;}
</style>
<div class="content">
     <div class="block">
         <div class="block-header">
           </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                          <div class="block-content contentup">
                         <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active " href="#btabswob-static-home">Bill Form</a>
                                    </li>
                                    
                                   </ul>
                                <div class="block-content tab-content">
                                    <div class="tab-pane active" id="btabswob-static-home" role="tabpanel">
                                        <div class="block">
    <div class="col-lg-12 ">
        <form action="" method="POST" class="js-validation" enctype="multipart/form-data">
           <table class="table table-borderless nopadding" id="toptable">
    <tr>
        <td><label class=" col-form-label">Customer Name:</label></td>
        <td><input type="text" name="cusName" class="form-control form-control-sm"   id="nameitem" placeholder=" نام مشتری "  />
        
        </td>
        <td><label class=" col-form-label">AFG Amount:</label></td>
        <td><input type="text" name="afgamount" class="form-control form-control-sm" placeholder=" قیمت خرید به افغانی" /></td>
    </tr>
    <tr>
        <td><label class=" col-form-label">Bill No:</label></td>
        <td><input type="text" name="billno"  class="form-control form-control-sm" id="nameitem" placeholder=" بل نمبر " />
        
        </td>
        <td><label class=" col-form-label">PK Amount: </label></td>
        <td><input type="text" name="pkamount" class="form-control form-control-sm" placeholder="قیمت خرید به کلدار " /></td>
    
    </tr>
    <tr><td><label class=" col-form-label">Company Name:</label></td>
        <td><input type="text" name="companyname" class="form-control form-control-sm" id="nameitem" placeholder=" نام شرکت"/></td>
        <td><label class=" col-form-label"> Date:</label></td>
        <td><input type="text" name="bdate" class="form-control form-control-sm" placeholder=" تاریخ  " /></td>
       
    </tr>
    <tr>
        <td><label class="col-form-label" style="float:left; margin-right: -30px;">Type:</label></td>
          <td>  <select class="form-control form-control-sm" name="billtype" id="itemtype">
                <option hidden=""> نوعیت معامله</option>
                <option>خرید</option>
                <option>فروش</option>   

            </select></td>
           <td><label class="col-form-label" >Amount:</label></td>
           <td><input type="text" class="form-control form-control-sm" name="totalamount" placeholder="مجموع پول"/></td>
    </tr>
    <tr><td></td><td></td> <td></td><td><input type="submit" name="SaveOldBill" value="Save" class="btn btn-sm btn-outline-dark"/></td></tr>
    
          </table>
          </form>
    </div>
    <div class="col-lg-12" >
        <div class="block" >
  <div class="block-content block-content-full">
        <table class="table table-bordered table-vcenter js-dataTable-full">
        <thead>
        <tr>
            <th>#</th>
            <th>اسم مشتری</th>
            <th> نمبر بل</th>
        <th> نام شرکت</th>
        <th>مقدار پول به افغانی</th>
       <th> مقدار پول به کلدار</th><th>مجموع پول </th><th> نوعیت معامله </th> <th>تاریخ</th>
        
        </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($getoldbill as $obll ){ ?>
                <tr>
                    <td><?php  echo $obll['ol_id']; ?></td>
                    <td><?php  echo $obll['cus_name']; ?></td>
                    <td><?php  echo $obll['bill_no']; ?></td>
                    <td><?php echo $obll['company']; ?></td>
                    <td><?php  echo $obll['amount_afg']; ?></td>
                    <td><?php  echo $obll['amount_pk']; ?></td>
                <td class="d-none d-sm-table-cell font-size-sm"><?php echo $obll['total_amount']; ?></td>
                <td class="d-none d-sm-table-cell"><?php echo $obll['bill_type']; ?></td>
                <td><?php  echo $obll['bill_date']; ?></td>
                <td class="text-center">
                    <div class="btn-group">
                 <a href="" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Item">
      <i class="fa fa-fw fa-pencil-alt"></i> </a>
      <a href="" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove Item">
      <i class="fa fa-fw fa-times"></i> </a>
                   </div> 
                    </td>
                </tr>
                 <?php } ?>
 
               </tbody>
               </table>
               </div>
   </div>
   <!-- END Striped Table -->
   </div>
   
    </div>
  
     </div>
</div>
</div>
</div>
</div>
     </div>
  
    
    

        <script src="../Public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery-validation/additional-methods.js"></script>
           <script>jQuery(function(){ One.helpers('select2'); });</script>
    <script src="../Public/assets/js/pages/be_forms_validation.min.js"></script>
     <script src="../Public/assets/js/oneui.core.min.js"></script>

<script src="../Public/assets/js/oneui.app.min.js"></script>
   <script src="../Public/assets/js/oneui.core.min.js"></script>
        <script src="../Public/assets/js/oneui.app.min.js"></script>
        <script src="../Public/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../Public/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../Public/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../Public/assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
        <script src="../Public/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../Public/assets/js/plugins/dropzone/dropzone.min.js"></script>
        <script src="../Public/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
        <script>jQuery(function(){ One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });</script>
        <script src="../Public/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
        <script src="../Public/assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>
        <script src="../Public/assets/js/pages/be_tables_datatables.min.js"></script>