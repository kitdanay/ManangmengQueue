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
                                <br><p id="rcorners2">ห้องคาราโอเกะ + ห้องจัดเลี้ยง</p>
                            <div class="content table-responsive table-full-width">
                                <div class="canvas">
                                    <div class="main-content">
                                    <table style="width:100%">
                                        <tr><td>แสดงข้อมูลการจองโต๊ะวันที่ : <input type="text" name="GuestName" id="GuestName" class="form-control border-input" value="<?php echo DateThai($_SESSION["SelectDate"]);?>  เวลา : <?php echo $_SESSION["SelectTime"];?>" readonly style="width: 100%; margin-bottom: 10px; text-align: center; background-color: #fffcf5; font-weight: 600;"></td>
                                            <td><a href="LoftPlan.php?ResName=<?php echo $_SESSION["ResName"];?>">
                                            <img src="images/MantraPlan/Button-Back.png" style="width: 80px; float: right; margin-top: 20px;"></a></td></tr></table>
                                        
                                        <table width="100%" border="2" style="border: solid #DCDCDC;">
                                          <tr>
                                            </br><p style="font-size: 34px; text-align: center;">ห้องคาราโอเกะ</p>
                                              <table width="100%" border="0" class="LoftFrontStage2">
                                            <tr>
                                                <?php 
                                                require_once("connection.php");
                                                $rn = 0;
                                                $PathIcon = "images/MantraPlan/TableIcon/";
                                                $sql = "SELECT * FROM (SELECT tablemantraplan.*,bookingres.BKStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE bookingres.DataIn = '$_SESSION[SelectDate]' AND bookingres.TimeRange = '$_SESSION[SelectTime]' AND tablemantraplan.TableZone ='7' AND tablemantraplan.TableGroup ='A' AND tablemantraplan.ResName ='Loft' UNION All SELECT tablemantraplan.*,tablemantraplan.TableStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE TableZone ='7' AND TableGroup ='A' AND tablemantraplan.ResName ='Loft') As TBid GROUP BY TBid.TableID ORDER BY TBid.Orders ASC";
                                                $query = mysqli_query($conn,$sql);
                                                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                                               {
                                                    $NewVar = (int)substr($result["TableNumber"], 3, 3);
                                                    if($rn++ % 3 == 0 && $rn > 1){
                                                        echo '</tr><tr>';
                                                    }
                                                    
                                                    echo '<td>';
                                                    
                                                    if($result["TableStatus"] == '1' && $result["BKStatus"] == '3' && $result["BKStatus"] == '4' && $result["BKStatus"] == '5' && $result["BKStatus"] == '6' && $result["BKStatus"] == '7'){
                                                    echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                                                            
                                                    }elseif($result["TableStatus"] == '2'){
                                                        if($_SESSION["Username"] == $result["UserRecord"]){
                                                            echo '<a href='.$_SESSION["ZoneName"].'.php?action=delete&id='.base64url_encode($result["TableID"]).'><img src="'.$PathIcon.$result["TableIconMR"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                        }else{
                                                             echo '<img src="'.$PathIcon.$result["TableIconMR"].'" style="width: 70%;"></br>'.$NewVar;
                                                        }
                                                    
                                                    }elseif($result["BKStatus"] == '3'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconReserved"].'" style="width: 70%;"></br></a>'.$NewVar;
				                                
                                                    }elseif($result["BKStatus"] == '4'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconFood"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '5'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconBlue"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '6'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconYellow"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '7'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconMagenta"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                        
                                                    }elseif($result["BKStatus"] == '8'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableBlueVIP"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '9'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableYellowVIP"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '10'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableMagentaVIP"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '11'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableRedVIP"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                        
                                                    }else{
                                                    echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 70%;"></br></a>'.$NewVar;
                                                    }
                                                    
                                                    echo '</td>';
                                                    ?>
                                                    <?php } ?>
                                                    </tr>
                                            </table>
                                            </br></br><p style="font-size: 34px; text-align: center;">ห้องจัดเลี้ยง</p>
                                              <table width="100%"  class="LoftInHome">
                                            <tr>
                                                <?php 
                                                require_once("connection.php");
                                                $rn = 0;
                                                $PathIcon = "images/MantraPlan/TableIcon/";
                                                $sql = "SELECT * FROM (SELECT tablemantraplan.*,bookingres.BKStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE bookingres.DataIn = '$_SESSION[SelectDate]' AND bookingres.TimeRange = '$_SESSION[SelectTime]' AND tablemantraplan.TableZone ='7' AND tablemantraplan.TableGroup ='B' AND tablemantraplan.ResName ='Loft' UNION All SELECT tablemantraplan.*,tablemantraplan.TableStatus FROM tablemantraplan LEFT JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID WHERE TableZone ='7' AND TableGroup ='B' AND tablemantraplan.ResName ='Loft') As TBid GROUP BY TBid.TableID ORDER BY TBid.Orders ASC";
                                                $query = mysqli_query($conn,$sql);
                                                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                                               {
                                                    $NewVar = (int)substr($result["TableNumber"], 3, 3);
                                                    if($rn++ % 1 == 0 && $rn > 1){
                                                        echo '</tr><tr>';
                                                    }
                                                    
                                                    echo '<td>';
                                                    
                                                    
                                                    if($result["TableStatus"] == '1' && $result["BKStatus"] == '3' && $result["BKStatus"] == '4' && $result["BKStatus"] == '5' && $result["BKStatus"] == '6' && $result["BKStatus"] == '7'){
                                                    echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                                                            
                                                    }elseif($result["TableStatus"] == '2'){
                                                        if($_SESSION["Username"] == $result["UserRecord"]){
                                                            echo '<a href='.$_SESSION["ZoneName"].'.php?action=delete&id='.base64url_encode($result["TableID"]).'><img src="'.$PathIcon.$result["TableIconMR"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                        }else{
                                                             echo '<img src="'.$PathIcon.$result["TableIconMR"].'" style="width: 35%;"></br>'.$NewVar;
                                                        }
                                                    
                                                    }elseif($result["BKStatus"] == '3'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconReserved"].'" style="width: 35%;"></br></a>'.$NewVar;
				                                
                                                    }elseif($result["BKStatus"] == '4'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconFood"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '5'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconBlue"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '6'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconYellow"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '7'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconMagenta"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                        
                                                    }elseif($result["BKStatus"] == '8'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableBlueVIP"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '9'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableYellowVIP"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '10'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableMagentaVIP"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '11'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableRedVIP"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                        
                                                    }else{
                                                    echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 35%;"></br></a>'.$NewVar;
                                                    }
                                                    
                                                    
                                                    echo '</td>';
                                                    ?>
                                                    <?php } ?>
                                                    </tr>
                                            </table>
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