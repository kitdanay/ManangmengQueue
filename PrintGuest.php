<?php session_start();?>
<?php 
require_once("connection.php");
require_once("Include/EncodeDecode.php");

if (!$_SESSION["UserID"]){ 

	  	Header("Location: index.html"); 

}else{?>

 <!DOCTYPE html>  
 <html>  
      <head>  
    <meta charset="utf-8" />
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>KGroup Restaurant</title>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
            <script type="text/javascript">document.ondragstart = function () { return false; }; </script>
          
<style type="text/css" media="print">
@page 
    {
        size: auto;   /* กำหนดขนาดของหน้าเอกสารเป็นออโต้ครับ */
        margin: 4mm;  /* กำหนดขอบกระดาษเป็น 0 มม. */
    }

    body 
    {
        margin: 7px;  /* เป็นการกำหนดขอบกระดาษของเนื้อหาที่จะพิมพ์ก่อนที่จะส่งไปให้เครื่องพิมพ์ครับ */
      
    }
</style>
          
     </head>  
        <br /><br /> 
        <form method="post" style="text-align: center;">  
            <input type="submit" name="create_pdf" class="btn btn-primary" value="Print สั่งพิมพ์" onclick="printDiv('divprint')"/>  
        </form> 
      <body style="font-family: 'Kanit', sans-serif;">  
          
          <div id="divprint"> 
           <div class="container" style="width:700px; vertical-align: bottom;">  
                <?php
                if (isset($_REQUEST['GuestID'])) {
                $GuestID = base64url_decode($_REQUEST['GuestID']);
                $sql = "SELECT *,'bookingres.ResName' FROM tablemantraplan INNER JOIN bookingres ON  tablemantraplan.TableID = bookingres.TableID INNER JOIN guest ON guest.GuestID=bookingres.GuestID Where guest.GuestID ='".$GuestID."' ORDER BY guest.GuestID ASC";
                $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
                {?>
               
               <?php if($result["ResName"]=='KeereeMantra'){?>
               <img src="images/icons/KeereeMantra.png" width="35%">
               <ul style="display: inline-block; font-size: 13px; vertical-align: bottom; line-height: 14px; font-weight: 600;">
               <p>88/8 ถ.กาญจนบุรี-ไทรโยค ต.หนองบัว เมืองกาญจนบุรี 71000</p>
               <p>โทร : 034-540889 / 095-7654978</p>
               <p>https://www.facebook.com/keereemantra</p></ul>
               <hr style="margin-top: 0px; border-top: 2px solid #969595;">
               <?php }?>
               
               <?php if($result["ResName"]=='KeereeTara'){?>
                <img src="images/icons/Keereetara.png" width="40%">
               <ul style="display: inline-block; font-size: 13px; vertical-align: bottom; line-height: 14px; font-weight: 600;">
               <p>431/1 ถ.แม่น้ำแคว ต.ท่ามะขาม เมืองกาญจนบุรี 71000</p>
               <p>โทร : 034-624093 / 087-4158111</p>
               <p>www.keereetara.com</p></ul>
               <hr style="margin-top: 0px; border-top: 2px solid #969595;">  
               <?php }?>
               
               <?php if($result["ResName"]=='Loft'){?>
                <img src="images/icons/Loft.png" width="40%">
               <ul style="display: inline-block; font-size: 13px; vertical-align: bottom; line-height: 14px; font-weight: 600;">
               <p>433 ถ.แม่น้ำแคว ต.ท่ามะขาม เมืองกาญจนบุรี 71000</p>
               <p>โทร : 034-513000 / 095-7635949</p>
               <p>https://www.facebook.com/LoftReataurantBar</p></ul>
               <hr style="margin-top: 0px; border-top: 2px solid #969595;">  
               <?php }?>
               
               
                <h4 align="center" style="margin-top: 10px; margin-bottom: -10px; font-size: 15px;">ใบยืนยันการจองรายการอาหาร</h4><br />  
                <div class="table-responsive">  
                    <table class="table table-bordered" style="font-size: 12px;">  
                        <tr>
                            <th colspan="2">หมายเลขโต๊ะ : 
                              <?php 
                            $setColumn=8; 
                            $ColumnStart=1; 
                    
                            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                            while($result2 = mysqli_fetch_array($query,MYSQLI_ASSOC))
                            {?>
                    
                            โต๊ะ : <?php if ($result2["ResName"]=='Loft'){
                                            echo $NewVar = (int)substr($result2["TableNumber"], 3, 2);
                                        }else{ 
                                            echo $result2["TableNumber"]; 
                                        } ?>&emsp;
                            <?php
                            if($ColumnStart==$setColumn){
                            echo '<br>';
                            $ColumnStart=0;
                            }
                            $ColumnStart++;
                            } ?>
                
                              </th>
                          </tr>  
                          <tr>
                            <td width="50%">ชื่อบริษัท : <?php echo $result["GuestCompany"]; ?></td>
                            <td width="50%">ชื่อ - นามสกุล (ผู้จอง) : <?php echo $result["GuestName"]; ?></td>
                          </tr>
                          <tr>
                            <td>E-Mail : <?php echo $result["GuestEmail"]; ?></td>
                            <td>เบอร์โทรติดต่อ : <?php echo $result["GuestTel"]; ?> <?php if(!empty($result["GuestTelBackup"])){  ?>  ( <?php echo $result["GuestTelBackup"]; ?> )<?php }?></td>
                          </tr>
                          <tr>
                            <td>Line ID : <?php echo $result["GuestLine"]; ?></td>
                            <td>วันที่เข้าร้าน : <?php echo DateThai($result["DataIn"]); ?>  เวลา : <?php echo date('H:i',strtotime($result["TimeIn"])); ?> น.</td>
                          </tr>
                         <tr>
                            <td>จองเมื่อวันที่ : <?php echo DateThai($result["DateRecode"]); ?></td>
                            <td>จำนวนลูกค้า : <?php echo $result["GuestNum"]; ?></td>
                          </tr>
                          <tr>
                            <td>ติดต่อ : คุณจิ๊บ (034-624093, 087-4158111) </td>
                            <td>บันทึกข้อมูลโดย : <?php echo $result["RecordBy"]; ?></td>
                          </tr>
                        </table>
                    
                    <?php if(!empty($result["MenuName1"])){ ?>
                    <h4 align="left" style="margin-top: -5px; margin-bottom: -10px; font-size: 15px;">รายการอาหาร</h4><br />  
                            <table class="table table-bordered" width="50%" style="font-size: 12px;">
                              <tr>
                                <td width="40%" >รายการที่ 1 : <?php echo $result["MenuName1"]; ?></td>
                                <td width="40%" >รายการที่ 2 : <?php echo $result["MenuName2"]; ?></td>
                              </tr>
                              <tr>
                                <td>รายการที่ 3 : <?php echo $result["MenuName3"]; ?></td>
                                <td>รายการที่ 4 : <?php echo $result["MenuName4"]; ?></td>
                              </tr>
                            <tr>
                                <td>รายการที่ 5 : <?php echo $result["MenuName5"]; ?></td>
                                <td>รายการที่ 6 : <?php echo $result["MenuName6"]; ?></td>
                              </tr>
                              <tr>
                                <td>รายการที่ 7 : <?php echo $result["MenuName7"]; ?></td>
                                
                                <td>รายการที่ 8 : <?php echo $result["MenuName8"]; ?></td>
                              </tr>
                                <tr>
                                <td>รายการที่ 9 : <?php echo $result["MenuName9"]; ?></td>
                                <td>รายการที่ 10 : <?php echo $result["MenuName10"]; ?></td>
                              </tr>
                              <?php if(!empty($result["MenuOther"])){ ?>
                              <tr>
                                <td colspan="2">รายการอาหารอื่นๆ / หมายเหตุ : <?php echo $result["MenuOther"]; ?></td>
                              </tr>
                              <?php } ?>
                            </table>
                        <?php } ?>
                          
                <ul style="font-size: 16px; line-height: 13px; margin-left: -30px; margin-top: auto;">
                <p>กรุณามัดจำการจองรายการอาหารล่วงหน้าก่อนเข้ารับบริการ </p>
                <p style="display: inline-block;"> เป็นจำนวนเงิน 
                <p  style="display: inline-block; font-size: 18px;">
                &nbsp; <?php echo number_format($result["Pledge"]); ?> &nbsp;</p>บาท 
                จากจำนวนเต็ม<p style="display: inline-block; font-size: 18px;">
                &nbsp; <?php echo number_format($result["TotalPrice"]); ?> &nbsp;</p>บาท </p>
                    
                <p style="margin-top: -7px;">มาที่ : ชื่อบัญชี บจ.คีรีธารา ริเวอร์แคว ธนาคารกรุงเทพ สาขา โรบินสัน กาญจนบุรี </br>
                <p style="display: inline-block;">บัญชีเงินฝากสะสมทรัพย์ เลขที่บัญชี &nbsp;
                <p style="display: inline-block; font-size: 18px;">632-7-03208-9</p> </p>
                <p style="margin-top: -7px;">กรุณาแฟกซ์หลักฐานการโอนมาที่เบอร์ 034-513000</p>
                    
               <ul style="font-size: 12px; line-height: 12px; margin-left: -40px;">
               <p style="font-weight: 600; text-decoration: underline; margin-top: 10px;">
               <br>หมายเหตุ</p>
               <p>1. Soft Drink 150 บาทต่อท่าน : Soft Drink ประกอบด้วย น้ำเปล่า โซดา และน้ำอัดลมต่างๆ (บริการ 4 ชั่วโมง)</p>
               <p>2. ทางร้านของดนำอาหารและเครื่องดื่มประเภทอื่น เข้ามารับประทานในร้าน</p>
               <p>3. จำนวนลูกค้าขั้นต่ำ 50 ท่าน แจ้งยอดการันตีลูกค้าล่วงหน้าก่อนวันเข้ารับบริการ 3 วัน</p>
               <p>4. ชำระเงินด้วยบัตรเครดิตมีค่าธรรมเนียมเพิ่ม 3%</p>
               <p>5. ทางร้านจัดอาหารสำหรับ ทีมงาน 6 ท่าน + คนขับรถ 4 ท่าน (ข้าวกล่อง)</p></ul>
                    
               <br><p style="font-weight: 600; font-size: 14px; text-decoration: underline; line-height: 25px;">
                    <?php $ResultDate = date("d-m-Y",strtotime("+7 days",strtotime($result["DataIn"]))); ?>
                    *** กรุณาลงรายมือชื่อ ในช่องผู้ยืนยันการจองและส่งกลับมาภายในวันที่ <?php echo DateThai($ResultDate); ?>      
                <br>ที่เบอร์ Fax 034-624603, 034-513-000</p></ul>
               <?php }?><?php }?>
     
               <br><p style="font-weight: 600;">
                <img src="images/icons/Licence.png" width="40%" style="float:  right;"></ul><br><br><br><br>
                </div>  
           </div>
        </div> 
      </body>  
 </html> 

        <script type="text/javascript"> 
            function printDiv(divName) { 
            var printContents = document.getElementById(divName).innerHTML; 
            var originalContents = document.body.innerHTML; 

            document.body.innerHTML = printContents; 
            window.print(); 
            document.body.innerHTML = originalContents; 
            } 
        </script> 
        <?php }?>
