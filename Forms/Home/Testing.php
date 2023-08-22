
<style>
    .contentup{margin-top: 30px;}
     .bottomblock{margin-top: -15 !important;}
    .content {
    padding: 15 !important;
}
    content-block{padding: 0 !important;}div.block{font-size: 12;}
    .col-form-label{font-size: 12;}
    .nopadding tr td{padding: 3 !important; }
    .nofont,thead th{font-size: 12 !important;}
    #smallinput{width: 80px;} .larginput{width:140px;}
    #currencysminput{width: 150px;}#currencyinput{width: 150px;}
</style>

<main id="main-container">
<div class="content">
   <div class="row">
    <div class="col-xl-12">
          <div id="one-inbox-side-nav" class="d-none d-md-block push">
             <div class="block">
               <div class="block-content">
                   <form>
                     <div class="col-xl-12">
                                <!-- Invoice Info -->
                                <div class="row mb-4">
                                    <!-- Company Info -->
                                    <div class="col-3 font-size-sm">
                                         <table>
                                        <tr>
              <td><input type="text" class="form-control form-control-sm input-sm  " value="<?php echo $empid; ?>" readonly="" name="inv_id" ></td>
             </tr>
             <tr>
             <td><select class="form-control form-control-sm input-sm  " >
             <option>Cush</option></select>
             </td>
            </tr>
           <tr><td>  <label style="float:left" id="smallinput" class=" col-form-label" >Gross Total : </label>
             <input type="text" id="grosstotal"  value="<?php foreach($grosstotal as $gtt){echo $gtt['total'];} ?>" class="form-control form-control-sm input-sm larginput " disabled="" name="grossTotal" style="background-color: #6e6b5e; color: yellow; font-weight: bold;"></td>
           </tr>
         <tr><td>  <label style="float:left" id="smallinput" class=" col-form-label" >Discount : </label>
             <input type="text" class="form-control form-control-sm input-sm larginput " value="" id="Discount"  name="Discount" style="background-color: #6e6b5e;  color: red; font-weight: bold;"></td>
           </tr>
            <tr>
             <td>  <label class=" col-form-label" style="float:left" id="smallinput" > Cash Due : </label>
             <input type="text" class="form-control form-control-sm input-sm  larginput" id="larginput" name="CashDue" style="background-color: #6e6b5e;  color: yellow; font-weight: bold;"></td>
            </tr>
            <tr>
                <td>  <label style="float:left" id="smallinput" class=" col-form-label" > Recieved : </label>
              <input type="text" class="form-control form-control-sm input-sm larginput " id="recieved" name="Receive" style="background-color: #6e6b5e;  color: yellow; font-weight: bold;"></td>
            
            </tr>
                       </table>
                                    </div>
                                  
             <div class="col-9 text-right font-size-sm">
               <table class="table table-borderless nopadding col-xl-9 " style="" id="secondtbl">
                 <tr ><td><input type="text" name="searchbarcode" value="<?php foreach($getSalesItem as $br){echo $br['barcode'];} ?>" placeholder="بارکود" style="float:left; margin-right: 5px;" class="form-control form-control-sm col-sm-6"/>
            <input type="submit" name="searchItm" value="Srch" class="btn btn-sm btn-warning"/></td>
                     <?php foreach ($getSalesItem as $sls){ ?>
                     <td><input type="text" name="proname" value="<?php echo $sls['ProductName']; ?>" class="form-control form-control-sm" style=""/></td>
                     <td><input type="text" name="sprice" value="<?php echo $sls['Sale_Price']; ?>" class="form-control form-control-sm"/></td>
                     <td><input type="text" name="qty" value="1" class="form-control form-control-sm"</td>
                     <?php } ?>
                     <td><input type="submit" value="+" name="AddProduct" class="btn btn-sm btn-outline-dark" /></td>
                 </tr>
             </table>
                   <table class="table table-vcenter nofont " > 
      <thead> 
      <tr><th class="col-lg-6">Item Desciption</th><th>Quantity</th> <th>Price</th>
      <th>Total</th>
     
     
      </thead>
      <tbody>
      <?php  foreach($getSaleInfo as $row){ ?>
      <tr >
        <td><?php echo $row['ProductName']; ?></td> 
        <td><?php echo $row['Quantity']; ?></td>
        <td><?php echo $row['Sale_Price']; ?></td>
        <td><?php echo $row['Total_amount']; ?></td>
      </tr>
      <?php } ?>
     
      
      </tbody>
      </table>
       </div>
        <div class="col-3 font-size-sm">
            <table class="table table-borderless nopadding" id="toptable">
                <tr><td><button type="submit" name="SavePrint" class="btn btn btn-outline-success">Save & Print</button>
                     <button class="btn btn btn-outline-info col-lg-6"><a href="/Sales/Invoice.php"><i class="fa fa-print"></i> Print</a></button></td>
           </tr>
           <tr><td><button class="btn btn btn-outline-warning">On Hold</button>
             <button class="btn btn btn-outline-primary col-lg-4"> Refund</button>
             <button class="btn btn btn-outline-danger col-lg-3" type="button" id="DiscountReceive" onclick="DiscountReceive();" name="PayAmount"> Pay</button></td>
           </tr>
          <tr><td><button class="btn btn btn-outline-danger col-lg-5"> Close </button>
                  <button class="btn btn btn-outline-dark col-lg-6"> Minimize</button></td>
           </tr>
         
          </table>                             
                                        
                                        
                                        
                                        
        </div>
                                  
         </div>
                    
                      
               
                      
                   </form>
               </div>
               </div>
              
           </div>
    </div>
    <div class="col-md-7 col-xl-9">
       <div class="block">
         <div class="block-content" >
              <div class="block">
               <div class="block-content">
                   <form>
                         <table class="table table-borderless nopadding" id="toptable">
                <tr><td><button type="submit" name="SavePrint" class="btn btn btn-outline-success">Save & Print</button>
                     <button class="btn btn btn-outline-info col-lg-6"><a href="/Sales/Invoice.php"><i class="fa fa-print"></i> Print</a></button></td>
           </tr>
           <tr><td><button class="btn btn btn-outline-warning">On Hold</button>
             <button class="btn btn btn-outline-primary col-lg-4"> Refund</button>
             <button class="btn btn btn-outline-danger col-lg-3" type="button" id="DiscountReceive" onclick="DiscountReceive();" name="PayAmount"> Pay</button></td>
           </tr>
          <tr><td><button class="btn btn btn-outline-danger col-lg-5"> Close </button>
                  <button class="btn btn btn-outline-dark col-lg-6"> Minimize</button></td>
           </tr>
         
          </table>
                   </form>                    
               </div>
               </div>
             <table class="table table-borderless nopadding col-xl-9 " style="" id="secondtbl">
                 <tr ><td><input type="text" name="searchbarcode" value="<?php foreach($getSalesItem as $br){echo $br['barcode'];} ?>" placeholder="بارکود" style="float:left; margin-right: 5px;" class="form-control form-control-sm col-sm-6"/>
            <input type="submit" name="searchItm" value="Srch" class="btn btn-sm btn-warning"/></td>
                     <?php foreach ($getSalesItem as $sls){ ?>
                     <td><input type="text" name="proname" value="<?php echo $sls['ProductName']; ?>" class="form-control form-control-sm" style=""/></td>
                     <td><input type="text" name="sprice" value="<?php echo $sls['Sale_Price']; ?>" class="form-control form-control-sm"/></td>
                     <td><input type="text" name="qty" value="1" class="form-control form-control-sm"</td>
                     <?php } ?>
                     <td><input type="submit" value="+" name="AddProduct" class="btn btn-sm btn-outline-dark" /></td>
                 </tr>
             </table>
            <div class=" table-responsive block-content-full col-xl-9"  style="width:800px; margin-left: 240px; max-height:410px;">
          <table class="table table-vcenter nofont " > 
      <thead> 
      <tr><th class="col-lg-6">Item Desciption</th><th>Quantity</th> <th>Price</th>
      <th>Total</th>
     
     
      </thead>
      <tbody>
      <?php  foreach($getSaleInfo as $row){ ?>
      <tr >
        <td><?php echo $row['ProductName']; ?></td> 
        <td><?php echo $row['Quantity']; ?></td>
        <td><?php echo $row['Sale_Price']; ?></td>
        <td><?php echo $row['Total_amount']; ?></td>
      </tr>
      <?php } ?>
     
      
      </tbody>
      </table>
            </div>                   
             </div>
                            </div>
                            <!-- END Message List -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->


 

</main>



















<div class="content">
    <div class="block">
        <div class="block-content">
            <form name="add_name" method="post">
                <table>
                    <tr>
                        <td><input type="text" name="id" id="name" value="<?php echo $empid; ?>" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="name" id="salary" class="form-control form-control-sm"/></td>
                        <td><input type="text" name="salary" id="salary" class="form-control form-control-sm"/></td>
                    </tr>
                    <tr>
                        <td><div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" name="chk[]" value="kaleem" class="custom-control-input" id="example-checkbox-custom-inline1"/>
                            <label class="custom-control-label" for="example-checkbox-custom-inline1">kaleem</label>
                            </div>
                        </td>
                        <td><div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" name="chk[]" value="reshad" class="custom-control-input" id="example-checkbox-custom-inline2"/>
                            <label class="custom-control-label" for="example-checkbox-custom-inline2">reshad</label>
                            </div>
                        </td>
                        <td><div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" name="chk[]" value="omid" class="custom-control-input" id="example-checkbox-custom-inline3"/>
                            <label class="custom-control-label" for="example-checkbox-custom-inline3">omid</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><button id="addvalue" name="addvalue" class="btn btn btn-outline-success">add text</button>
                            <!--<input type="button" value="Save" id="addvalue" name="addvalue" class="btn btn btn-outline-success"/>--></td>
                    </tr>
                    
                </table>
                
            </form>
            
            
            <table id="load_data">
                <?php foreach ($gtdata as $row){ ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#addvalue').click(function(){
           var nametxt= $('#name').val();
           if($.trim(nametxt)!=''){
               $.ajax({
                   url:"/Home.php",
                   method:"POST",
                   data:{name:nametxt},
                   dataType:"text",
                   success:function(data){
                       $('#name').val();
                   }
               });
           }
        }); 
        setInterval(function(){
            $('#load_data').load("HomeModel.php").fadeIn("slow");
        }, 1000);
    });
    
    </script>
    <script src="../Public/js/bootstrap.js"></script>
<script src="../Public/js/jquery-1.11.3.min"></script>