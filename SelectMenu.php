
<?php 
include ('Include/header.php');
$_SESSION["ResName"];
$_SESSION["ZoneName"];
$_SESSION["User"];
$_SESSION["SelectDate"];
$_SESSION["SelectTime"];
@ini_set('display_errors', '0');

?>                                                      
                        <script language="javascript">
                            function fncSubmit(strPage)
                            {
                                if(strPage == "page1")
                                {
                                    document.form1.action="DeleteAll.php?action=search";
                                }
                                
                                if(strPage == "page2")
                                {
                                    document.form1.action="MoveTable.php?action=MoveTable";
                                }
                                
                                if(strPage == "page3")
                                {
                                    document.form1.action="CancelMove.php?action=CancelMove";
                                }
                                
                                if(strPage == "page4")
                                {
                                    document.form1.action="DeleteOneTable.php?action=DeleteOneTable";
                                }
                                
                                if(strPage == "page5")
                                {
                                    document.form1.action="CancelDelete.php?action=CancelDelete";
                                }
                                
                                if(strPage == "page6")
                                {
                                    document.form1.action="AddTable.php?action=AddTable";
                                }
                                if(strPage == "page7")
                                {
                                    document.form1.action="ChangeIconTable.php?action=ChangeIconTable.php";
                                }
                                
                                document.form1.submit();
                            }
                        </script>

                        <form method="post" id="InsertGuest" name="form1">
                            <div class="col-lg-4 col-md-5">
                            <div class="card card-user">
                                <div class="content">
                                    <?php   
                                    require_once("connection.php"); 
                                    function ListPrice($conn)  
                                    {  
                                    $output = '';  
                                    $sql = "SELECT ListPrice FROM listmenu Where ResName = '$_SESSION[ResName]' GROUP BY ListPrice ORDER BY ListPrice ASC";
                                    $result = mysqli_query($conn, $sql);  
                                    while($row = mysqli_fetch_array($result))  
                                    {  
                                    $output .= '<option value="'.$row["ListPrice"].'">'.number_format($row["ListPrice"]).' บาท  </option>';
                                    }  
                                    return $output;  
                                    }  
                                    ?>  
                                        <h5 class="title" style="text-align: center; font-weight: bold;">จำนวนโต๊ะจอง วันที่ <?php echo DateThai($_SESSION["SelectDate"]);?> </br></br></h5>
                                        <?php
                                        require_once("connection.php");
                                        $sql2 = "SELECT count( TableID ) AS totalmember FROM bookingres WHERE bookingres.ResName = '$_SESSION[ResName]' AND DataIn = '$_SESSION[SelectDate]' AND TimeRange = '10:00 - 12:00 น.'"; 
                                        $query2 = mysqli_query($conn,$sql2);
                                        $rown=mysqli_fetch_array($query2); 
                                        ?>
                                        <h5 class="title" style="text-align: center; ">
                                        ช่วงเวลา 10:00 - 12:00 น.<p style="display: inline-block; color: red;">&emsp; จองแล้ว <?php echo $rown['totalmember'];?> โต๊ะ </p>
                                        
                                        <?php
                                        $sql2 = "SELECT count( TableID ) AS totalmember FROM bookingres WHERE bookingres.ResName = '$_SESSION[ResName]' AND DataIn = '$_SESSION[SelectDate]' AND TimeRange = '13:00 - 16:00 น.'"; 
                                        $query2 = mysqli_query($conn,$sql2);
                                        $rown=mysqli_fetch_array($query2); ?>
                                        </br>ช่วงเวลา 13:00 - 16:00 น.<p style="display: inline-block; color: red;">&emsp; จองแล้ว <?php echo $rown['totalmember'];?> โต๊ะ </p>
                                
                                        <?php
                                        $sql2 = "SELECT count( TableID ) AS totalmember FROM bookingres WHERE bookingres.ResName = '$_SESSION[ResName]' AND DataIn = '$_SESSION[SelectDate]' AND TimeRange = '17:00 - 19:00 น.'"; 
                                        $query2 = mysqli_query($conn,$sql2);
                                        $rown=mysqli_fetch_array($query2); ?>
                                        </br>ช่วงเวลา 17:00 - 19:00 น.<p style="display: inline-block; color: red;">&emsp; จองแล้ว <?php echo $rown['totalmember'];?> โต๊ะ </p></h5>
                                        <hr></br>
                            
                                    <div class="text-center">
                                    <?php if(!$_SESSION["MoveTable"]){?>
                                    <?php if(!$_SESSION["GetDeleteTable"]){?>
                                    <?php if(!$_SESSION["GetNewTable"]){?>
                                    <?php if(!$_SESSION["GetChangeIcon"]){?>    
                                    <h5 class="title" style="font-weight: 600; text-align: center;">เลือกจองโต๊ะหมายเลข</h5>
                                    <?php }else{?>
                                    <?php
                                          include ('Include/ChangeIcon.php');?>                 
                                    <?php }?>   
                                    <?php }else{?>
                                    <h5 class="title" style="color: red; font-weight: 600; text-align: center;">กำลังเลือกเพิ่มโต๊ะลูกค้า 
                                    <p style="color: black; display: inline-block;">คุณ : <?php echo base64url_decode($_SESSION["GuestName"]);?> <?php echo base64url_decode($_SESSION["GuestCompany"]);?></p>
                                    <br> เพิ่มโต๊ะหมายเลข<br></h5>
                                    <?php }?>    
                                    <?php }else{?>
                                    <h5 class="title" style="color: red; font-weight: 600; text-align: center;">กำลังเลือกลบโต๊ะหมายเลข <br>
                                    <p style="color: black; display: inline-block; font-size: 18px;"><?php echo base64url_decode($_SESSION["TableID"]);?></p></h5>
                                    <input class="btn btn-success" type="button" value="ยืนยัน"  onClick="JavaScript:fncSubmit('page4')">
                                    <input class="btn btn-danger" type="button" value="ยกเลิก"  onClick="JavaScript:fncSubmit('page5')">
                                    <?php }?>
                                    <?php }else{?>
                                    <h5 class="title" style="color: red; font-weight: 600; text-align: center;">กำลังเลือกย้ายโต๊ะหมายเลข <?php echo base64url_decode($_SESSION["TableID"]);?></h5>
                                    <?php }?>

                                    <div class="row">
                                    <?php   
                                        if(!empty($_SESSION["shopping_cart"]))  
                                        {  
                                        foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                        {  
                                    ?>  
                                    <div class="tableNumber">
                                    <?php if(!$_SESSION["MoveTable"]){?>
                                        <?php if(!$_SESSION["GetNewTable"]){?>
                                        <h5><?php echo $values["item_name"]; ?>
                                        </h5><small>หมายเลขโต๊ะ</small>
                                        <h6><a href="<?php echo $_SESSION["ZoneName"]; ?>.php?action=delete&id=<?php echo base64url_encode($values["item_id"]);?>"></br>ลบ</a></h6><br>
                                        <?php }else{?>
                                        <h5><?php echo $values["item_name"]; ?></h5>
                                    <?php }?>
                                    <?php }else{?>
                                        <h5 style="color: red;">ย้ายโต๊ะหมายเลข<br></h5><h5><?php echo base64url_decode($_SESSION["TableID"]);?> <i class="ti-angle-double-right"></i> <?php echo $values["item_name"]; ?></h5>
                                    <?php }?>
                                    </div>
                                  
                                    <input type="hidden" id="TableID" name="TableID[]" value="<?php echo $values["item_id"]; ?>">
                                    <input type="hidden" id="ResName" name="ResName" value="<?php echo $_SESSION["ResName"]; ?>">
                                    <input type="hidden" id="RecordBy" name="RecordBy" value="<?php echo $_SESSION["User"]; ?>">
                                    
                                        <?php }}?>
                                        <?php if($values["item_id"]==''){?>
                                        <p style='display: inline-block; color: red; margin-top:10px'>กรุณาเลือกโต๊ะก่อนบันทึกข้อมูล </p>
                                        <?php }else{?>
                                        <?php if(!$_SESSION["MoveTable"]){?>
                                        <?php if(!$_SESSION["GetNewTable"]){?>
                                        </br><input class="btn btn-primary btn-sm" type="button" value="ลบทั้งหมดที่เลือก"  onClick="JavaScript:fncSubmit('page1')">
                                        <?php }else{?>
                                        </br></br><input class="btn btn-success" type="button" value="ยืนยัน"  onClick="JavaScript:fncSubmit('page6')">
                                        <input class="btn btn-danger" type="button" value="ยกเลิก"  onClick="JavaScript:fncSubmit('page3')">
                                        <?php }?>  
                                        <?php }else{?>
                                        </br></br><input class="btn btn-success" type="button" value="ยืนยัน"  onClick="JavaScript:fncSubmit('page2')">
                                        <input class="btn btn-danger" type="button" value="ยกเลิก"  onClick="JavaScript:fncSubmit('page3')">
                                        <?php }?>
                                        <br><br><div id="timer"></div>
                                        <?php } ?>

                                    </div>
                                    </div></br><hr>

                            </br><h5 class="title">กรอกข้อมูลลูกค้า</h5></br>
                                <div class="container" style="width:100%;">  
                                   <div class="control-group">
                                        <label class="control-label" >ชื่อบริษัท</label>
                                        <div class="controls">
                                            <input type="text" name="GuestCompany" id="GuestCompany" placeholder="กรุณากรอกชื่อบริษัท" class="form-control border-input" required/>
                                        </div>
                                    </div>

                                   <div class="control-group">
                                        <br/><label class="control-label" for="input1">ชื่อ - นามสกุล (ลูกค้า)</label>
                                        <div class="controls">
                                            <input type="text" name="GuestName" id="GuestName" placeholder="กรุณากรอกชื่อ - นามสกุล (ลูกค้า)" class="form-control border-input" required/>
                                        </div>
                                    </div>

                                   <div class="control-group">
                                        <br/><label class="control-label" for="input5">อีเมล</label>
                                        <div class="controls">
                                            <input type="text" name="GuestEmail" id="GuestEmail" placeholder="กรุณากรอก E-mail " class="form-control border-input" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <br/><label class="control-label" for="input3">เบอร์โทรติดต่อ</label>
                                        <div class="controls">
                                            <input type="text" name="GuestTel" id="GuestTel" placeholder="กรุณากรอกเบอร์โทรติดต่อ"  class="form-control border-input" maxlength="10" required/>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <br/><label class="control-label" for="input3">เบอร์โทรติดต่อสำรอง</label>
                                        <div class="controls">
                                            <input type="text" name="GuestTelBackup" id="GuestTelBackup" placeholder="กรุณากรอกเบอร์โทรสำรอง"  class="form-control border-input" maxlength="10" />
                                        </div>
                                    </div>

                                   <div class="control-group">
                                        <br/><label class="control-label" for="input3">Line ID</label>
                                        <div class="controls">
                                            <input type="text" name="LineID" id="LineID" placeholder="กรุณากรอก Line ID" class="form-control border-input" maxlength="10" required/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <br/><label class="control-label" for="input4">วันเวลาที่เข้าร้าน</label>
                                        <div class="controls">
                                            <input type="text" class="form-control border-input" value="<?php echo DateThai($_SESSION["SelectDate"]);?>" readonly style="text-align: center; background-color:#fffcf5; font-weight: 600;">
                                            <input type="hidden" name="DataIn" id="DataIn" class="form-control border-input" value="<?php echo $_SESSION["SelectDate"];?>">
                                            <input type="hidden" name="TimeRange" id="TimeRange" class="form-control border-input" value="<?php echo $_SESSION["SelectTime"];?>">
                                            
                                            <table style="width:100%">
                                                <tr><td style="width:50%">
                                                    <select name="Hour" id="Hour" class="toggle-divs form-control border-input" onchange="countryChange(this);" required>
                                                        <option value="" disabled selected>เลือกชั่วโมง</option>
                                                        <?php if($_SESSION["SelectTime"] == '10:00 - 12:00 น.')
                                                        {?>
                                                        <option value="10">10 นาฬิกา</option>
                                                        <option value="11">11 นาฬิกา</option>  
                                                        <option value="12">12 นาฬิกา</option> 
                                                        <?php }?>
                                                        <?php if($_SESSION["SelectTime"] == '13:00 - 16:00 น.')
                                                        {?>
                                                        <option value="13">13 นาฬิกา</option>
                                                        <option value="14">14 นาฬิกา</option>  
                                                        <option value="15">15 นาฬิกา</option> 
                                                        <option value="16">16 นาฬิกา</option>
                                                        <?php }?>
                                                        <?php if($_SESSION["SelectTime"] == '17:00 - 19:00 น.')
                                                        {?>
                                                        <option value="17">17 นาฬิกา</option>
                                                        <option value="18">18 นาฬิกา</option>  
                                                        <option value="19">19 นาฬิกา</option> 
                                                        <?php }?>
                                                    </select>
                                                    </td>
                                                    <td style="width:50%">
                                                    <select name="Minute" id="Minute" class="toggle-divs form-control border-input" required >
                                                        <option value="" disabled selected>เลือกนาที</option>
                                                    </select>
                                                    </td></tr>
                                            </table>
                                            
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <br/><label class="control-label" for="input4">จำนวนลูกค้า</label>
                                        <div class="controls">
                                            <input type="text"  name="GuestNum" id="GuestNum"  placeholder="กรอกจำนวนลูกค้า" class="form-control border-input" required/>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <br/><label class="control-label" for="input6">รวมราคาอาหาร</label>
                                        <div class="controls">
                                            <input type="text" name="TotalPrice" id="TotalPrice" placeholder="รวมราคาอาหาร" class="form-control border-input" />
                                        </div>
                                    </div>

                                   <div class="control-group">
                                        <br/><label class="control-label" for="input6">จำนวนเงินมัดจำ</label>
                                        <div class="controls">
                                            <input type="text" name="Pledge" id="Pledge" placeholder="จำนวนเงินมัดจำ" class="form-control border-input" />
                                        </div>
                                    </div>

                                        <div class="control-group">
                                        <br/><label class="control-label" for="input6">เลือกประเภทรายการอาหาร</label>
                                            <select name="GuestType" id="GuestType" class="toggle-divs form-control border-input" >
                                                <option value="">ประเภทรายการอาหาร</option>  
                                                <option value="1">รายการอาหารลูกค้าทั่วไป</option>
                                                <option value="2">รายการอาหารลูกค้ากรุ๊ปทัวร์</option>  
                                                <option value="3">รายการอาหารลูกค้าVIP</option> 
                                            </select>
                                        </div>
                                        
                                        <div class="control-group">
                                            <div class="div1" style="display:none;">
                                             <br/><label>กรอกรายการอาหารตามสั่ง / หมายเหตุ</label>
                                            <textarea rows="4" name="MenuOther1" class="form-control border-input" placeholder="กรอกรายการอาหาร" ></textarea>
                                        </div>

                                        <div class="div2" style="display:none; text-align:  center;">
                                            <br><label class="control-label" for="input6"style="float:left;">เลือกสีไอคอนโต๊ะอาหาร</label>
                                            
                                            <table width="100%" border="0" style="margin-left: -20px;">
                                              <tr>
                                                <td><div class="radio div2" style="display:none;">
                                              <label><input type="radio" name="SelectColor" value="Blue" />
                                                <img src="images/MantraPlan/TableIcon/CircleBlue.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>

                                                <td><div class="radio div2" style="display:none;">
                                              <label><input type="radio" name="SelectColor" value="Yellow" />
                                                <img src="images/MantraPlan/TableIcon/CircleYellow.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>

                                                <td><div class="radio div2" style="display:none;">
                                              <label><input type="radio" name="SelectColor" value="Magenta" />
                                                <img src="images/MantraPlan/TableIcon/CircleMagenta.png" width="35px" style="float: left;">
                                              </label>
                                            </div></td>

                                                <td><div class="radio div2" style="display:none;">
                                              <label><input type="radio" name="SelectColor" value="Red" />
                                                <img src="images/MantraPlan/TableIcon/CircleReserved.png" width="35px" style="float: left;">
                                              </label>
                                            </div></td>
                                              </tr>
                                            </table>                                   

                                        <label class="control-label" for="input6"style="float:left;">เลือกรายการอาหาร</label>
                                            <select name="ListPriceSel" id="ListPriceSel" class="form-control border-input" >
                                              <option value="">-- เลือกเซทราคาอาหาร --</option>  
                                              <?php echo ListPrice($conn); ?>  
                                         </select>  
                                         <br/>
                                            <script>  
                                            $(document).ready(function(){  
                                                $('#ListPriceSel').change(function(){  
                                                    var ListPrice = $(this).val();  
                                                    $.ajax({  
                                                    url:"SelectLoadData.php",  
                                                    method:"POST",  
                                                    data:{ListPrice:ListPrice},  
                                                    success:function(data){  
                                                $('#showMenu').html(data);  
                                                    }  
                                                });  
                                            });  
                                            });  
                                        </script> 
                                            <script>
                                                var elem = document.getElementById("ListPriceSel");
                                                elem.onchange = function(){
                                                    var hiddenDiv = document.getElementById("showMenu");
                                                    hiddenDiv.style.display = (this.value == "") ? "none":"block";
                                                };
                                            </script>

                                         <div id="showMenu" style='display:none;'>
                                        </div> 
                                            <label style="float: left;">กรอกรายการอาหารตามสั่ง / หมายเหตุ</label>
                                            <textarea rows="4" name="MenuOther2" class="form-control border-input" placeholder="กรอกรายการอาหาร" ></textarea>
                                            <div class="checkbox div2" style="display:none;">
                                            <label><input type="checkbox" name="Rice" value="1.ข้าวสวย " >ข้าวสวย</label>
                                            </div>
                                            <div class="checkbox div2" style="display:none;">
                                            <label><input type="checkbox" name="Fruit" value="2.ผลไม้ " >ผลไม้</label>
                                            </div>
                                            <div class="checkbox div2" style="display:none;">
                                            <label><input type="checkbox" name="Drink" value="3.เครื่องดื่ม " >เครื่องดื่ม</label>
                                            </div>
                                        </div>
                                
                                            <div class="div3" style="display:none;">
                                             <br/><label>กรอกรายการอาหารตามสั่ง / หมายเหตุ</label>
                                            <textarea rows="4" name="MenuOther3" class="form-control border-input" placeholder="กรอกรายการอาหาร" ></textarea>
                                            </div>
                                            
                                            <div class="div3" style="display:none; text-align:  center;">
                                                
                                            <br><label class="control-label" for="input6"style="float:left;">เลือกรายการอาหาร</label>
                                            <select name="ListPriceSelVIP" id="ListPriceSelVIP" class="form-control border-input" >
                                              <option value="">-- เลือกเซทราคาอาหาร --</option>  
                                              <?php echo ListPrice($conn); ?>  
                                         </select>  
                                         <br/>
                                            
                                         <div id="showMenuVIP" style='display:none;'>
                                        </div> 
                                            <div class="checkbox div3" style="display:none;">
                                            <label><input type="checkbox" name="RiceVIP" value="1.ข้าวสวย " >ข้าวสวย</label>
                                            </div>
                                            <div class="checkbox div3" style="display:none;">
                                            <label><input type="checkbox" name="FruitVIP" value="2.ผลไม้ " >ผลไม้</label>
                                            </div>
                                            <div class="checkbox div3" style="display:none;">
                                            <label><input type="checkbox" name="DrinkVIP" value="3.เครื่องดื่ม " >เครื่องดื่ม</label>
                                            </div></br>
                                                
                                            <label class="control-label" for="input6"style="float:left;">เลือกสีไอคอนโต๊ะอาหาร</label>
                                            <table width="100%" border="0" style="margin-left: -20px; margin-bottom: -30px;">
                                              <tr>
                                                <td><div class="radio div3" style="display:none;">
                                              <label><input type="radio" name="SelectColor" value="BlueVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleBlueVIP.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>

                                                <td><div class="radio div3" style="display:none;">
                                              <label><input type="radio" name="SelectColor" value="YellowVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleYellowVIP.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>

                                                <td><div class="radio div3" style="display:none;">
                                              <label><input type="radio" name="SelectColor" value="MagentaVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleMagentaVIP.png" width="35px" style="float: left;">
                                              </label>
                                            </div></td>

                                                <td><div class="radio div3" style="display:none;">
                                              <label><input type="radio" name="SelectColor" value="RedVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleVIP.png" width="35px" style="float: left;">
                                              </label>
                                            </div></td>
                                              </tr>
                                            </table>        
                                                
                                        <script>
                                            $(document).ready(function() {
                                            $('.toggle-divs').on('change', function() {
                                            var nextAside = $(this).parent('.control-group').next('.control-group');
                                            nextAside.find("div").hide();
                                            nextAside.find(".div" + this.value).show()
                                            });
                                            })
                                        </script>
                                            
                                        </div>
                                        </div>
                                    
                                        <script>  
                                            $(document).ready(function(){  
                                                $('#ListPriceSelVIP').change(function(){  
                                                    var ListPrice = $(this).val();  
                                                    $.ajax({  
                                                    url:"SelectLoadData.php",  
                                                    method:"POST",  
                                                    data:{ListPrice:ListPrice},  
                                                    success:function(data){  
                                                $('#showMenuVIP').html(data);  
                                                    }  
                                                });  
                                            });  
                                        });  
                                        </script> 
                                            <script>
                                                var elem = document.getElementById("ListPriceSelVIP");
                                                elem.onchange = function(){
                                                    var hiddenDiv = document.getElementById("showMenuVIP");
                                                    hiddenDiv.style.display = (this.value == "") ? "none":"block";
                                                };
                                            </script>

                                    <?php if($values["item_id"]==''){?>
                                        <br/><div class="form-actions" style="text-align:  center;">
                                        <p style='display: inline-block; color: red; padding-top:5px;padding-bottom:10px'>
                                        กรุณาเลือกโต๊ะก่อนบันทึกข้อมูล </p><br/>
                                        <button type="submit" class="btn btn-success" style="width:49%;" disabled>
                                        <i class="icon-ok icon-white"></i> บันทึกข้อมูล</span></button>
                                        
                                    <?php }else{?>
                                        <br/><input type="hidden" name="insert" id="insert" value="submit" >
                                        <button type="submit" class="btn btn-success" style="width:49%;" >
                                            <i class="icon-ok icon-white"></i> บันทึกข้อมูล</span></button>
                                    <?php }
                                            ?>
                                        <button type="reset" class="btn btn-warning" style="width:49%;" onClick="JavaScript:fncSubmit('page1')">
                                            <i class="icon-refresh icon-black"></i> ยกเลิก
                                        </button>

                                    </div>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                            </div>
                                <script>  
                                    $("#InsertGuest").submit(function(){     
                                    $("#sendingmail").html("ระบบกำลังทำการส่งข้อมูลโปรดรอสักครู่.....");     
                                        return true; });
                                 </script>
                                <script>  
                                    $(document).ready(function(){
                                     $('#InsertGuest').on("submit", function(event){  
                                      event.preventDefault();  
                                       
                                        $.ajax({  
                                        url:"insertGuest.php",  
                                        method:"POST",  
                                        data:$('#InsertGuest').serialize(),  

                                        success:function(data){  
                                        
                                             if(!alertify.showSuccess){
                                             alertify.dialog('showSuccess',function factory(){
                                                return{
                                                    build:function(){
                                                    var errorHeader = '<span class="fa fa-check-circle fa-2x" '
                                                    +    'style="vertical-align:middle;color:#00CC00;">'
                                                    + '</span>&nbsp;&nbsp; เพิ่มข้อมูลสำเร็จ';
                                                    this.setHeader(errorHeader);
                                                                    }
                                                    };
                                                },true,'alert');
                                        }
                                            alertify.defaults.theme.ok = "btn btn-primary";
                                            $(function(){alertify.showSuccess('<p style="font-size:18px;">เพิ่มข้อมูลการจองลูกค้าสำเร็จ<br/><br/>',
                                                function (e) {
                                                if (e) {
                                                window.location.reload();
                                                } else {
                                                return false;
                                                }
                                            });
                                        });
                                    }  
                                   });  
                                 }); 
                                });
                                 </script>