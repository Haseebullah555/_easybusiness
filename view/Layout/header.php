<?php ob_start();
session_start();
session_regenerate_id();
//$rootdic="c:/xampp/htdocs/EasyEstate/";
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Easy Business</title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="../Public/assets/media/favicons/favicon.png"/>
        <link rel="icon" type="image/png" sizes="192x192" href="../Public/assets/media/favicons/favicon-192x192.png"/>
        <link rel="apple-touch-icon" sizes="180x180" href="../Public/assets/media/favicons/apple-touch-icon-180x180.png"/>
        <link rel="stylesheet" href="../Public/assets/js/plugins/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"/>
        <link rel="stylesheet" id="css-main" href="../Public/assets/css/oneui.min.css"/>
        <link rel="shortcut icon" href="../Public/assets/media/favicons/favicon.png">
        <link rel="stylesheet" href="../Public/assets/js/plugins/magnific-popup/magnific-popup.css">
            <link rel="stylesheet" href="../Public/assets/js/plugins/select2/css/select2.min.css">

      </head>
    <body>
        <!-- Header -->
        <div id="header" >
         <div class="shell">
       <!-- Logo + Top Nav -->
                <div id="top" >
                    <div id="top-navigation" >
                        
                      <div class="bg-sidebar-dark p-3 push">
                        <!-- Toggle Navigation -->
                        <div class="d-lg-none">
                            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                            <button type="button" class="btn btn-block btn-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#horizontal-navigation-hover-normal-dark" data-class="d-none">
                               Easy Business
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- END Toggle Navigation -->

                        <!-- Navigation -->
                        <div id="horizontal-navigation-hover-normal-dark" class="d-none d-lg-block mt-2 mt-lg-0">
                            <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
                                <li class="nav-main-item">
                                    <a href="../" class="nav-main-link active" href="be_ui_navigation_horizontal.html">
                                        <i class="nav-main-link-icon fa fa-home"></i>
                                        <span class="nav-main-link-name">Dashboard</span>
                                      <!--  <span class="nav-main-link-badge badge badge-pill badge-primary">5</span>-->
                                    </a>
                                </li>
                             <!--   <li class="nav-main-heading">Manage</li>-->
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                               <span class="nav-main-link-name">Purchases</span>
                                            </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <li class="nav-main-item">
                                                    <a href='/Home/OldBill.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">  بل های گذشته  </span>
                                                        </a>
                                                </li>
                                            <li class="nav-main-item">
                                                    <a href='/Home/OldBill.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">   بل های ترانسپورت </span>
                                                        </a>
                                                </li>
                                            
                                                <li class="nav-main-item">
                                                    <a href='/Home/PurchaseInvoice.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name"> خریداری اجناس</span>
                                                        </a>
                                                </li>
                                            <!-- <li class="nav-main-item">
                                                    <a href='' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">  تاریخچه خریداری</span>
                                                        </a>
                                                </li>
                                            <li class="nav-main-item">
                                                    <a href='/Home/Purchase_Invoice.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">  بازگشت جنس خریداری</span>
                                                        </a>
                                                </li> -->
                                        </li>
                                       <!-- <li class="nav-main-item">
                                            <a class="nav-main-link" href="javascript:void(0)">
                                                <i class="nav-main-link-icon fa fa-plus"></i>
                                                <span class="nav-main-link-name">Add Product</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>
                                <!-- <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                      <span class="nav-main-link-name">Sales</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                         <li class="nav-main-item">
                                            <a href=''  class="nav-main-link" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-"></i>
                                                <span class="nav-main-link-name">فروشات </span>
                                            </a>
                                           
                                        </li>
                                          
                                        
                                                               
                                    </ul>
                                </li> -->
                               <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                      <span class="nav-main-link-name">Point Of Sales</span>
                                            </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            
                                                <li class="nav-main-item">
                                                    <a href='/Sales/' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-cash-register"></i>
                                                        <span class="nav-main-link-name">فروش اجناس</span>
                                                        </a>
                                                </li>
                                              <li class="nav-main-item">
                                                    <a href='/Sales/ReturnSalesItem.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-cash-register"></i>
                                                        <span class="nav-main-link-name"> بازگشت جنس فروش</span>
                                                        </a>
                                                </li>
                                             <li class="nav-main-item">
                                                    <a href='/Sales/DirectSales.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-cash-register"></i>
                                                        <span class="nav-main-link-name">   فروش جنس مستقیم</span>
                                                        </a>
                                                </li>
                                               </li>
                                        <!-- <li class="nav-main-item">
                                            <a class="nav-main-link" href="javascript:void(0)">
                                                <i class="nav-main-link-icon fa fa-plus"></i>
                                                <span class="nav-main-link-name">Add Product</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>
                              <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                       <span class="nav-main-link-name">Stock</span>
                                            </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            
                                                <li class="nav-main-item">
                                                    <a href='/Home/Item_Registration.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">ثبت اجناس</span>
                                                        </a>
                                                </li>
                                             <li class="nav-main-item">
                                                    <a  class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name"> کتیگوری</span>
                                                        </a>
                                                </li>
                                             <!-- <li class="nav-main-item">
                                                    <a href="/Home/Testing.php" class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">برند </span>
                                                        </a>
                                                </li>
                                             <li class="nav-main-item">
                                                    <a class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">تغیر نرخ </span>
                                                        </a>
                                                </li>
                                             <li class="nav-main-item">
                                                    <a href="" class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">اسعار  </span>
                                                        </a>
                                                </li> -->
                                        </li>
                                       
                                    </ul>
                                </li>
                              <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                      <span class="nav-main-link-name">Finance</span>
                                            </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name"> مالی</span>
                                                        </a>
                                                </li>
                                        </li>
                                       
                                    </ul>
                                </li>
                              <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                         <span class="nav-main-link-name">Reports</span>
                                            </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <li class="nav-main-item">
                                                    <a href='' class="nav-main-link nav-main-link-submenu" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش قرضداری </span>
                                                        </a>
                                                  <ul class="nav-main-submenu">
                                             <li class="nav-main-item">
                                            <li class="nav-main-item">
                                                    <a href='' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش  قرضدار ها </span>
                                                        </a>
                                              </li>
                                                   <li class="nav-main-item">
                                                    <a href='' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش قرضیات </span>
                                                        </a>
                                              </li>
                                        </li>
                                                 </ul>
                                              </li>
                                          
                                            <li class="nav-main-item">
                                                    <a  class="nav-main-link nav-main-link-submenu" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش  فروش  </span>
                                                        </a>
                                                 <ul class="nav-main-submenu">
                                             <li class="nav-main-item">
                                            <!-- <li class="nav-main-item">
                                                    <a href='' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش  فروشات مستقیم</span>
                                                        </a>
                                              </li> -->
                                                 <li class="nav-main-item">
                                                    <a href='' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش  فروشات </span>
                                                        </a>
                                              </li>
                                        </li>
                                                 </ul>
                                              </li>
                                        <li class="nav-main-item">
                                                    <a  class="nav-main-link nav-main-link-submenu" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش  اجناس   </span>
                                                        </a>
                                                 <ul class="nav-main-submenu">
                                             <li class="nav-main-item">
                                           <li class="nav-main-item">
                                                    <a href='/Reports/LowStockRep.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش پاينترین گدام </span>
                                                        </a>
                                              </li>
                                                 <li class="nav-main-item">
                                                    <a href='/Reports/CurrentStock.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش اجناس موجوده </span>
                                                        </a>
                                                </li>
                                        </li>
                                                 </ul>
                                              </li>
                                            
                                          
                                                <li class="nav-main-item">
                                                    <a href='' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-file"></i>
                                                        <span class="nav-main-link-name"> گزارش خلاصه فروشات </span>
                                                        </a>
                                                </li>
                                        </li>
                                      
                                    </ul>
                                </li>
                              <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                       <span class="nav-main-link-name">Setup Forms</span>
                                            </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            
                                                <li class="nav-main-item">
                                                    <a href='/Home/Add_Company.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">ثبت شرکت </span>
                                                        </a>
                                                </li>
                                             <li class="nav-main-item">
                                                    <a href='/Home/Add_Customer.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">ثبت مشتری </span>
                                                        </a>
                                                </li>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="javascript:void(0)">
                                                <i class="nav-main-link-icon fa fa-plus"></i>
                                                <span class="nav-main-link-name">ثبت یوزر</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                              <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                       <span class="nav-main-link-name">Management</span>
                                            </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            
                                                <li class="nav-main-item">
                                                    <a href='/Home/Item_Registration.php' class="nav-main-link" href="javascript:void(0)">
                                                        <i class="nav-main-link-icon fa fa-chart-area"></i>
                                                        <span class="nav-main-link-name">ثبت اجناس</span>
                                                        </a>
                                                </li>
                                        </li>
                                       <li class="nav-main-item">
                                            <a class="nav-main-link" href="javascript:void(0)">
                                                <i class="nav-main-link-icon fa fa-plus"></i>
                                                <span class="nav-main-link-name">Add Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                              <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon si si-logout "></i>
                                                <span class="nav-main-link-name">Exit</span>
                                     </a>
                                </li>
                             
                            </ul>
                        </div>
                        <!-- END Navigation -->
                    </div>
                    <!-- END Horizontal Navigation - Hover Normal Dark -->
                        

                    </div>
                </div>
                <!-- End Logo + Top Nav -->

                <!-- Main Nav -->
               
                <!-- End Main Nav -->
            </div>
        </div>
        <!-- End Header -->
        <script src="../Public/assets/js/oneui.core.min.js"></script>
        <script src="../Public/assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="../Public/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../Public/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../Public/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../Public/assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
        <script src="../Public/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../Public/assets/js/plugins/dropzone/dropzone.min.js"></script>
        <script src="../Public/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery-validation/additional-methods.js"></script>
        <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
        <script>jQuery(function(){ One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });</script>
        <script src="../Public/assets/js/pages/be_forms_wizard.min.js"></script>
        <script src="../Public/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="../Public/assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../Public/assets/js/plugins/jquery-validation/additional-methods.js"></script>
         <script src="../Public/assets/js/pages/be_forms_validation.min.js"></script>
        <div id="container">