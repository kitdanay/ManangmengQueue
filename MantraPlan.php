<?php session_start();?>
<?php
@ini_set('display_errors', '0');
require_once("connection.php");
require_once("Include/EncodeDecode.php");

$_SESSION["ResName"] = $_GET["ResName"];
$_SESSION["MoveTable"];

if (!$_SESSION["UserID"]){  //check session

	  	Header("Location: index.html"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}elseif(!$_SESSION["ResName"]){
        Header("Location: Management.php");

}elseif(isset($_POST["sumit"])){
         $_SESSION["SelectDate"] = $_POST["SelectDate"];
         $_SESSION["SelectTime"] = $_POST["SelectTime"];
         Header("Location: MantraPlan.php?ResName=KeereeMantra");

}else{?>

<!doctype html>
<html lang="en">
<head>
	<?php
      include ('Include/header.php');
      header("Refresh: 30*60; URL=logout.php");
	  ?>
     <!-- Jquery -->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>

    <!-- Confirm Modal -->
    <script type="text/javascript" src="js/confirm.js"></script>
    </head>
<body>

    <?php
      include ('Include/Menu.php');
	  ?>
<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                      <h4 class="title" style="font-family: 'Trirong', serif;">แผนผังร้าน คีรีมันตรา</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <div class="canvas">
                         
                    <form method="post" action="" style="padding-bottom: 20px;">  
                        <table style="width:100%;  margin: auto;" cellpadding="10">
                          <tr><label class="control-label" for="input4" style="font-size:16px; color: black;">เลือกวันที่และช่วงเวลา :</label>
                            <td style="width:100%;">
                                <input id="today" type="date" name="SelectDate" value="" class="form-control border-input" required style=" text-align: center; "/>
                                
                                <select name="SelectTime" id="SelectTime" class="toggle-divs form-control border-input" style="text-align-last: center;" required>
                                    <option value="" disabled selected style="display: none;">
                                        <?php
                                        if(!isset($_SESSION["SelectDate"]) && !isset($_SESSION["SelectTime"])){ ?>
                                        <label class="control-label" for="input4" style="font-size:18px; color: black;">กรุณาเลือกช่วงเวลา</label>
                                        <?php }else{?>
                                            <label class="control-label" for="input4" style="font-size:18px; color: black;">
                                        เวลา : <?php echo $_SESSION["SelectTime"];?></label>
                                       <?php }?>
                                    </option>  
                                    <option value="10:00 - 12:00 น.">ช่วงสาย 10:00 - 12:00 น.</option>
                                    <option value="13:00 - 16:00 น.">ช่วงบ่าย 13:00 - 16:00 น.</option>  
                                    <option value="17:00 - 19:00 น.">ช่วงเย็น 17:00 - 19:00 น.</option> 
                                </select></td>
                              
                            <td style="display: inline-flex; width:auto"> 
                            &emsp;<input type="submit" name="sumit" value="ยืนยัน" class="btn btn-success">
                            </td></tr></table><br>
                        
                            <?php
                            if(!isset($_SESSION["SelectDate"]) && !isset($_SESSION["SelectTime"])){ ?>
                            <label class="control-label" for="input4" style="font-size:18px; color: black;">กรุณาเลือกวันที่ และช่วงเวลาก่อนเลือกโซนที่นั่ง </label>
                            <?php }else{?>
                                <label class="control-label" for="input4" style="font-size:18px; color: black;">
                            วันที่เลือก : <?php echo DateThai($_SESSION["SelectDate"]);?> เวลา : <?php echo $_SESSION["SelectTime"];?></label>
                           <?php }?>
                       </form>
                        
                        <script>
                            let today = new Date().toISOString().substr(0, 10);
                            document.querySelector("#today").value = today;
                        </script>

                        <div class="main-content">
                            <div class="portfolio">
                                <div class="one">
                                    <a href="Include/GetSession.php?ZoneName=MantraPlanZone3">
                                    <img src="images/MantraPlan/Zone3PNG.png" style="width: 100%; object-fit: contain"></a></div>
                                <div class="two">
                                    <img src="images/MantraPlan/Sward01.png" style="width: 100%; object-fit: contain"></div>
                                <div class="three">
                                    <a href="Include/GetSession.php?ZoneName=MantraPlanTerraces1">
                                    <img src="images/MantraPlan/Terraces01PNG.png" style="width: 100%; object-fit: contain"></a></div>
                                <div class="four">
                                    <a href="Include/GetSession.php?ZoneName=MantraPlanZone2">
                                    <img src="images/MantraPlan/Zone2PNG.png" style="width: 100%; object-fit: contain"></a></div>
                                <div class="five">
                                    <img src="images/MantraPlan/kitchenPNG.png" style="width: 100%; object-fit: contain"></div>
                                <div class="six">
                                    <a href="Include/GetSession.php?ZoneName=MantraPlanZone1">
                                    <img src="images/MantraPlan/Zone1PNG.png" style="width: 100%; object-fit: contain"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
   <?php
      include ('Include/footer.php');
	  ?>
</html>
<?php }?>

    