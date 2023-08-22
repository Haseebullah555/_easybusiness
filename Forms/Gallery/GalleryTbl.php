
<style>
    #tblts td img{
     padding: 10px; 
     margin: 10px;
     margin-left: 10px;
     margin-right: 10px;
     width: 250px;
     height: 250px;
    }
    #uptable{
        margin-left: 30px;
        margin-right: 20px;
    }
    </style>


<!-- Box -->
<div class="box" id="uptable">
    <!-- Box Head -->
    <div class="box-head">
        <h2 class="left">Photo Gallery</h2>
        <div class="right">
 <a href="/Registration/bb.html" class="add-button" >
        <span>Click to Play Video</span>
    </a>
        </div>
    </div>
    <!-- End Box Head -->
    <!-- Table -->
    <div class="table">
        <table id="tblts" width="100%" border="0" cellspacing="0" cellpadding="0">
        
            <?php foreach ($ShowHousePhoto as $photos){ ?>
                <tr>
               
                    <td><img src="/UserUpload/HousePhotos/<?php echo $photos['gallery'];?>" /></td>
                    <td><img src="/UserUpload/HousePhotos/<?php echo $photos['gallery'];?>" /></td> 
                    <td><img src="/UserUpload/HousePhotos/<?php echo $photos['gallery'];?>" /></td>
                     <td><img src="/UserUpload/HousePhotos/<?php echo $photos['gallery'];?>" /></td>
                
                </tr>
           <?php } ?>

        </table>


        <!--						 Pagging
                                                        <div class="pagging">
                                                                <div class="left">Showing 1-12 of 44</div>
                                                                <div class="right">
                                                                        <a href="#">Previous</a>
                                                                        <a href="#">1</a>
                                                                        <a href="#">2</a>
                                                                        <a href="#">3</a>
                                                                        <a href="#">4</a>
                                                                        <a href="#">245</a>
                                                                        <span>...</span>
                                                                        <a href="#">Next</a>
                                                                        <a href="#">View all</a>
                                                                </div>
                                                        </div>
                                                         End Pagging
        -->
    </div>
    <!-- Table -->

</div>
<!-- End Box -->