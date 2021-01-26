<?php session_start();?>
<?php 
require_once("connection.php");
require_once("Include/EncodeDecode.php");

if (!$_SESSION["UserID"]){  //check session

	  	Header("Location: index.html"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>


<!doctype html>
<html lang="en">
<head>
	<?php
      include ('Include/HeaderGuest.php');
	  ?>
    
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
      <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css?v=<?php echo filemtime('assets/css/paper-dashboard.css'); ?>" rel="stylesheet"/>

   
    <style type="text/css">
        html{
            font-family:tahoma, Arial,"Times New Roman";
            font-size:14px;
        }
        body{
            font-family:tahoma, Arial,"Times New Roman";
            font-size:14px;
        }    
        
.center {
    display: block;
    margin: auto;
    width: 100%;
}
    </style>
    
    </head>
<body>  

    		<?php
      include ('Include/Menu.php'); ?>
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="card" style="overflow: auto;">
                            <div class="header">
                                <h4 class="title" style="font-family: 'Trirong', serif;">สรุปรายการจองโต๊ะ</h4><br><br>
                            </div>
                            
                            <div class="center" style="text-align: center;">
                            <div class="col-md-5">
                                </br><label style="float: left; color: black;">เลือกวันที่</label>
                                <input type="date" name="start_date" id="SelectDate" class="form-control border-input" style="text-align:  center;"/>
                                <script>
                                    let today = new Date().toISOString().substr(0, 10);
                                    document.querySelector("#SelectDate").value = today;
                                </script>
                            </div>    
                              <div class="col-md-5" >   
                                </br><label style="float: left; color: black;">เลือกร้านอาหาร</label>
                                <select class="form-control border-input" id="category" style="text-align-last:center;">
                                  <option value="">กรุณาเลือกร้านอาหาร</option>
                                  <option value="KeereeMantra">KeereeMantra</option>
                                  <option value="KeereeTara">KeereeTara</option>
                                  <option value="Loft">Loft Restuarant &amp; Bar</option>
                                </select>
                            </div>   
                            <div class="col-md-1" style="padding-bottom: 30px;">  
                               </br><label style="float: left;">&nbsp;&nbsp;</label>
                                 <button type="submit" name="search" id="search" class="btn btn-success btn-fill btn-wd" style="margin-top: 0;">ค้นหา</button>
                            </div>    
                            </div>
                            <div class="content">
                            <div class="content table-responsive table-full-width" id="show_product" > 
                                <table id="product_data" class=" table table-striped" style="width:100%">
                                 <thead>
                                    <th style="text-align: center; width:5%;"><img src="images/MantraPlan/HeadTable/rank.jpg" style="height: 80%;"></th>
                                    <th style="text-align: center; width:12%;"><img src="images/MantraPlan/HeadTable/CompanyName.jpg" style="height: 80%;"></th>
                                    <th style="text-align: center; width:12%;"><img src="images/MantraPlan/HeadTable/GuestName.jpg" style="height: 80%;"></th>
                                    <th style="text-align: center; width:12%;"><img src="images/MantraPlan/HeadTable/TableNunber.jpg" style="height: 80%;"></th>
                                    <th style="text-align: center; width:12%;"><img src="images/MantraPlan/HeadTable/Tel.jpg" style="height: 80%;"></th>
                                    <th style="text-align: center; width:12%;"><img src="images/MantraPlan/HeadTable/DateTime.jpg" style="height: 80%;"></th>
                                    <th style="text-align: center; width:12%;"><img src="images/MantraPlan/HeadTable/GuestNum.jpg" style="height: 80%;"></th>
                                    <th style="text-align: center; width:12%;"><img src="images/MantraPlan/HeadTable/TableStatus.jpg" style="height: 80%;"></th>
                                    <th style="text-align: center; width:12%;"><img src="images/MantraPlan/HeadTable/Space.jpg" style="height: 80%;"></th>
                                 </thead>
                                </table>
                            </div>
                            </div>
                        </div>
                </div> 
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right" style="text-align:  right;">
                    &copy; Copyright By Marketing-KGroup 2018 <br> All rights reserved
                </div>
            </div>
        </footer>

    </div>
</div>

</body> 
    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

<?php
      include ('Include/JScriptGuestList.php');
	  ?>

<?php }?>