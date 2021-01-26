<?php session_start();?>
<?php 
 @ini_set('display_errors', '0');
 require_once("connection.php");
 require_once("Include/EncodeDecode.php");
 require_once("Include/SessionTable.php");
 
if(!$_SESSION["UserID"]){  //check session

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
                              <h4 class="title" style="font-family: 'Trirong', serif;">แผนผังร้าน คีรีมันตรา</h4>
                            </div>
                                <br><p id="rcorners2">อาคาร 3 เทอร์เรซ 3 </p>
                            <div class="content table-responsive table-full-width">
                                <div class="canvas">
                                    <div class="main-content">
                                    <table style="width:100%">
                                        <tr><td>แสดงข้อมูลการจองโต๊ะวันที่ : <input type="text" name="GuestName" id="GuestName" class="form-control border-input" value="<?php echo DateThai($_SESSION["SelectDate"]);?>  เวลา : <?php echo $_SESSION["SelectTime"];?>" readonly style="width: 100%; margin-bottom: 10px; text-align: center; background-color: #fffcf5; font-weight: 600;"></td>
                                            <td><a href="MantraPlan.php?ResName=<?php echo $_SESSION["ResName"];?>">
                                            <img src="images/MantraPlan/Button-Back.png" style="width: 80px; float: right; margin-top: 20px;"></a></td></tr></table>
                                        
                                        <?php 
                                            require_once("connection.php");
                                            $max_row = 6;
                                            $loop = 0;
                                            $output = '';
                                            $rn = 0;
                                            $PathIcon = "images/MantraPlan/TableIcon/";
                                            $sql = "SELECT * FROM (SELECT tablemantraplan.*,bookingres.BKStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE bookingres.DataIn = '$_SESSION[SelectDate]' AND bookingres.TimeRange = '$_SESSION[SelectTime]' AND tablemantraplan.TableZone ='3' AND tablemantraplan.TableGroup ='A'  AND tablemantraplan.ResName ='KeereeMantra' UNION All SELECT tablemantraplan.*,tablemantraplan.TableStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE TableZone ='3' AND TableGroup ='A' AND tablemantraplan.ResName ='KeereeMantra') As TBid GROUP BY TBid.TableID ORDER BY TBid.TableID ASC";
                                            $query = mysqli_query($conn,$sql);
	                                        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                                           {						
                                                if($loop == 0) {
                                                    $tmp = '<tr>';
                                                }
                                                 $tmp .= '<td>';
                                                
                                                include ('Include/QueryTableMantra.php');
				                                   
                                                $tmp .= '</td>';
                                                $loop++;

                                                if($loop == $max_row) {
                                                    $tmp .= '</tr>';
                                                    $output = $tmp . $output;
                                                    $loop = 0;
                                                }
                                            }
                                            if($loop > 0) {
                                                for ($i = $loop; $i < $max_row; $i++) { 
                                                    $tmp .= '<td></td>';
                                                }
                                                $output = $tmp . $output;
                                            }?>
                                        
                                        <table border="0" cellpadding="0" cellspacing="0" class="MTPlan">
                                            <tr>
                                                <td colspan="3" style="padding-top: 20px; padding-bottom: 20px;">
                                                    
                                                  <table border="0" cellspacing='0' cellpadding='0' style="width: 40%" class="test"> 
                                                    <tr>
                                                <?php 
                                                $sql = "SELECT * FROM (SELECT tablemantraplan.*,bookingres.BKStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE bookingres.DataIn = '$_SESSION[SelectDate]' AND bookingres.TimeRange = '$_SESSION[SelectTime]' AND tablemantraplan.TableZone ='3' AND tablemantraplan.TableGroup ='D' AND tablemantraplan.ResName ='KeereeMantra' UNION All SELECT tablemantraplan.*,tablemantraplan.TableStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE TableZone ='3' AND TableGroup ='D' AND tablemantraplan.ResName ='KeereeMantra') As TBid GROUP BY TBid.TableID ORDER BY TBid.TableID DESC";
                                                $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                                               {
                                                    $NewVar = $result["TableNumber"];
                                                    if($rn++ % 4 == 0 && $rn > 1){
                                                        echo '</tr><tr>';
                                                    }
                                                    
                                                    echo '<td>';
                                                    
                                                    include ('Include/QueryTable.php');
                                                    
                                                    echo '</td>';
                                                    ?>
                                                    <?php } ?>
                                                    
                                                </tr></table></td>
                                            </tr>            
                                            <tr>
                                                <td style="width:20%" >
                                                    <table border="0" cellspacing='0' cellpadding='0' style="width: 100%" class="MTPlan">
                                                        <?php echo $output; ?></table></td>
                                                
                                                <td style="width:5%">
                                                <table border="0" cellspacing='0' cellpadding='0' style="width: 100%" class="MTPlan"> 
                                                <?php 
                                                $sql = "SELECT * FROM (SELECT tablemantraplan.*,bookingres.BKStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE bookingres.DataIn = '$_SESSION[SelectDate]' AND bookingres.TimeRange = '$_SESSION[SelectTime]' AND tablemantraplan.TableZone ='3' AND tablemantraplan.TableGroup ='B' AND tablemantraplan.ResName ='KeereeMantra' UNION All SELECT tablemantraplan.*,tablemantraplan.TableStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE TableZone ='3' AND TableGroup ='B' AND tablemantraplan.ResName ='KeereeMantra') As TBid GROUP BY TBid.TableID ORDER BY TBid.TableID DESC";
                                                
                                                $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                                               {
                                                    $NewVar = $result["TableNumber"];
                                                    if($rn++ % 1 == 0 && $rn > 1){
                                                        echo '</tr><tr>';
                                                    }
                                                    
                                                    echo '<td>';
                                                    
                                                    include ('Include/QueryTable.php');
                                                    
                                                    echo '</td>';
                                                    ?>
                                                    <?php } ?>
                                         
                                                </table></td>
                                        
                                                <td style="width:5%">
                                                <table border="0" cellspacing='0' cellpadding='0' style="width: 100%" class="MTPlan"> 
                                                <?php 
                                                $sql = "SELECT * FROM (SELECT tablemantraplan.*,bookingres.BKStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE bookingres.DataIn = '$_SESSION[SelectDate]' AND bookingres.TimeRange = '$_SESSION[SelectTime]' AND tablemantraplan.TableZone ='3' AND tablemantraplan.TableGroup ='C' AND tablemantraplan.ResName ='KeereeMantra' UNION All SELECT tablemantraplan.*,tablemantraplan.TableStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE TableZone ='3' AND TableGroup ='C' AND tablemantraplan.ResName ='KeereeMantra') As TBid GROUP BY TBid.TableID ORDER BY TBid.TableID DESC";
                                                $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                                               {
                                                    $NewVar = $result["TableNumber"];
                                                    if($rn++ % 1 == 0 && $rn > 1){
                                                        echo '</tr><tr>';
                                                    }
                                                    
                                                    echo '<td>';
                                                    
                                                    include ('Include/QueryTable.php');
                                                    
                                                    echo '</td>';
                                                    ?>
                                                    <?php } ?>

                                                </table></td>
                                            </tr>
                                            <tr>
                                                 <td colspan="3"></td>
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
                                include ('SelectMenu.php');
                
                                }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
                                include ('SelectMenu.php');
            
                                }elseif($_SESSION["UserResName"]==$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
			                    include ('SelectMenu.php');
            
                                }elseif($_SESSION["UserResName"]!=$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                include ('Include/SelectMenuTurnOff.php');
                            
                                }elseif($_SESSION["UserResName"]==$_SESSION["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                include ('SelectMenu.php');
            
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
<?php }?>
 <?php
mysqli_close($conn);
?>