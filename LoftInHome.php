<?php session_start();?>
<?php 
 @ini_set('display_errors', '0');
 require_once("connection.php");
 require_once("Include/EncodeDecode.php");
 require_once("Include/SessionTable.php");
 
$_SESSION["ResName"];
$_SESSION["ZoneName"];
$_SESSION["SelectDate"];
$_SESSION["Username"];
$_SESSION["SelectTime"];

if (!$_SESSION["UserID"]){  //check session

	  	Header("Location: index.html"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}elseif(!$_SESSION["ResName"]){
        Header("Location: Management.php");

}elseif(!$_SESSION["SelectDate"]){
        echo "<script>alert('กรุณาเลือกวันที่และช่วงเวลา ก่อนเลือกโซนที่นั่ง');history.back();</script>";
    
}else{
        include ('Include/SessionExpire.php');
?>
<!doctype html>
<html lang="en">

<head>
    <?php
      include ('Include/header.php');
	  ?>
</head>

<body onLoad="countdown()">
    <?php
      include ('Include/Menu.php');
	  ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-lg-8 col-md-7">
                            <div class="card">
                            <div class="header">
                              <h4 class="title" style="font-family: 'Trirong', serif;">แผนผังร้าน ลอฟท์</h4>
                            </div>
                                <br><p id="rcorners2">โซนในบ้าน</p>
                            <div class="content table-responsive table-full-width">
                                <div class="canvas">
                                    <div class="main-content">
                                    <table style="width:100%">
                                        <tr><td>แสดงข้อมูลการจองโต๊ะวันที่ : <input type="text" name="GuestName" id="GuestName" class="form-control border-input" value="<?php echo DateThai($_SESSION["SelectDate"]);?>  เวลา : <?php echo $_SESSION["SelectTime"];?>" readonly style="width: 100%; margin-bottom: 10px; text-align: center; background-color: #fffcf5; font-weight: 600;"></td>
                                            <td><a href="LoftPlan.php?ResName=<?php echo $_SESSION["ResName"];?>">
                                            <img src="images/MantraPlan/Button-Back.png" style="width: 80px; float: right; margin-top: 20px;"></a></td></tr></table>
                                        
                                        <table width="100%" border="2" style="border: solid #DCDCDC;">
                                          <tr>
                                            <td style="width:50%">
                                              <table width="100%" border="0" class="LoftFrontStage2">
                                            <tr>
                                                <?php 
                                                require_once("connection.php");
                                                $rn = 0;
                                                $PathIcon = "images/MantraPlan/TableIcon/";
                                                $sql = "SELECT * FROM (SELECT tablemantraplan.*,bookingres.BKStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE bookingres.DataIn = '$_SESSION[SelectDate]' AND bookingres.TimeRange = '$_SESSION[SelectTime]' AND tablemantraplan.TableZone ='3' AND tablemantraplan.TableGroup ='A' AND tablemantraplan.ResName ='Loft' UNION All SELECT tablemantraplan.*,tablemantraplan.TableStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE TableZone ='3' AND TableGroup ='A' AND tablemantraplan.ResName ='Loft') As TBid GROUP BY TBid.TableID ORDER BY TBid.Orders ASC";
                                                $query = mysqli_query($conn,$sql);
                                                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                                               {
                                                    $NewVar = (int)substr($result["TableNumber"], 3, 2);
                                                    if($rn++ % 2 == 0 && $rn > 1){
                                                        echo '</tr><tr>';
                                                    }
                                                    
                                                    echo '<td>';
                                                    
                                                    include ('Include/QueryTable.php');
                                                    
                                                    echo '</td>';
                                                    ?>
                                                    <?php } ?>
                                                    </tr>
                                            </table>
                                              </td>
                                              
                                              <td style="width:50%">
                                              <table width="100%"  class="LoftInHome">
                                            <tr>
                                                <?php 
                                                require_once("connection.php");
                                                $rn = 0;
                                                $PathIcon = "images/MantraPlan/TableIcon/";
                                                $sql = "SELECT * FROM (SELECT tablemantraplan.*,bookingres.BKStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE bookingres.DataIn = '$_SESSION[SelectDate]' AND bookingres.TimeRange = '$_SESSION[SelectTime]' AND tablemantraplan.TableZone ='3' AND tablemantraplan.TableGroup ='B' AND tablemantraplan.ResName ='Loft' UNION All SELECT tablemantraplan.*,tablemantraplan.TableStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE TableZone ='3' AND TableGroup ='B' AND tablemantraplan.ResName ='Loft') As TBid GROUP BY TBid.TableID ORDER BY TBid.Orders ASC";
                                                $query = mysqli_query($conn,$sql);
                                                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                                               {
                                                    $NewVar = (int)substr($result["TableNumber"], 3, 2);
                                                    if($rn++ % 1 == 0 && $rn > 1){
                                                        echo '</tr><tr>';
                                                    }
                                                    
                                                    echo '<td>';
                                                    
                                                    include ('Include/QueryTable.php');
                                                    
                                                    echo '</td>';
                                                    ?>
                                                    <?php } ?>
                                                    </tr>
                                            </table>
                                              </td>
                                          </tr>
                                        </table>
                                        
                                    <img src="<?php echo $PathIcon;?>TableStatus.png" style="width: 100%; padding-top:20px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                                <?php 
                                if($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Admin'){
                                include ('SelectMenuLoft.php');
                
                                }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
                                include ('SelectMenuLoft.php');
            
                                }elseif($_SESSION["UserResName"]==$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
			                    include ('SelectMenuLoft.php');
            
                                }elseif($_SESSION["UserResName"]!=$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                include ('Include/SelectMenuTurnOff.php');
                            
                                }elseif($_SESSION["UserResName"]==$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                include ('SelectMenuLoft.php');
            
                                }elseif($_SESSION["UserResName"]!=$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                include ('Include/SelectMenuTurnOff.php');
            
                                }elseif($_SESSION["UserResName"]==$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                include ('Include/SelectMenuTurnOff.php');
                        
                                }elseif($_SESSION["UserResName"]!=$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                include ('Include/SelectMenuTurnOff.php');
                                }?>
                         
                    </div>
                </div>
            </div>

        <?php
      include ('Include/footer.php');
	  ?>
<?php
      include ('Include/GetGuest.php');
	  ?>
</html>
<?php }
?>
 <?php
mysqli_close($conn);
?>