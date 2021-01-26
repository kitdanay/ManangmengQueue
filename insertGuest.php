<?php session_start();?>
<?php
    
    $_SESSION["shopping_cart"];
        
    require_once("connection.php");
    include ('Include/header.php');

    $CompName = mysqli_real_escape_string($conn, $_POST['GuestCompany']);
    $GuestName = mysqli_real_escape_string($conn, $_POST['GuestName']);
    $GuestEmail = mysqli_real_escape_string($conn, $_POST['GuestEmail']);
    $GuestTel = mysqli_real_escape_string($conn, $_POST['GuestTel']);
    $GuestTelBackup = mysqli_real_escape_string($conn, $_POST['GuestTelBackup']);
    $LineID = mysqli_real_escape_string($conn, $_POST['LineID']);
    $DataIn = mysqli_real_escape_string($conn, $_POST['DataIn']);
    $Hour = mysqli_real_escape_string($conn, $_POST['Hour']);
    $Minute = mysqli_real_escape_string($conn, $_POST['Minute']);
    $TimeRange = mysqli_real_escape_string($conn, $_POST['TimeRange']);
    $GuestNum = mysqli_real_escape_string($conn, $_POST['GuestNum']);
    $TotalPrice = mysqli_real_escape_string($conn, $_POST['TotalPrice']);
    $Pledge = mysqli_real_escape_string($conn, $_POST['Pledge']);
    $GuestType = mysqli_real_escape_string($conn, $_POST['GuestType']);
    $ResName = mysqli_real_escape_string($conn, $_POST['ResName']);
    $RecordBy = mysqli_real_escape_string($conn, $_POST['RecordBy']);
    $MenuOther1 = mysqli_real_escape_string($conn, $_POST['MenuOther1']);
    $MenuOther2 = mysqli_real_escape_string($conn, $_POST['MenuOther2']);
    $MenuOther3 = mysqli_real_escape_string($conn, $_POST['MenuOther3']);
    $ListPrice = mysqli_real_escape_string($conn, $_POST['ListPriceSel']);
    $MenuName1 = mysqli_real_escape_string($conn, $_POST['MenuName1']);
    $MenuName2 = mysqli_real_escape_string($conn, $_POST['MenuName2']);
    $MenuName3 = mysqli_real_escape_string($conn, $_POST['MenuName3']);
    $MenuName4 = mysqli_real_escape_string($conn, $_POST['MenuName4']);
    $MenuName5 = mysqli_real_escape_string($conn, $_POST['MenuName5']);
    $MenuName6 = mysqli_real_escape_string($conn, $_POST['MenuName6']);
    $MenuName7 = mysqli_real_escape_string($conn, $_POST['MenuName7']);
    $MenuName8 = mysqli_real_escape_string($conn, $_POST['MenuName8']);
    $MenuName9 = mysqli_real_escape_string($conn, $_POST['MenuName9']);
    $MenuName10 = mysqli_real_escape_string($conn, $_POST['MenuName10']);
    $Rice = mysqli_real_escape_string($conn, $_POST['Rice']);
    $Fruit = mysqli_real_escape_string($conn, $_POST['Fruit']);
    $Drink = mysqli_real_escape_string($conn, $_POST['Drink']);
    $BKStatus = mysqli_real_escape_string($conn, $_POST['BKStatus']);
    $RiceVIP = mysqli_real_escape_string($conn, $_POST['RiceVIP']);
    $FruitVIP = mysqli_real_escape_string($conn, $_POST['FruitVIP']);
    $DrinkVIP = mysqli_real_escape_string($conn, $_POST['DrinkVIP']);
    $BKStatus = mysqli_real_escape_string($conn, $_POST['BKStatus']);

  
    if($_POST["SelectColor"] == 'Blue'){
        $BKStatus = '5';
    }
    elseif($_POST["SelectColor"] == 'Yellow'){
        $BKStatus = '6';
    }
    elseif($_POST["SelectColor"] == 'Magenta'){
        $BKStatus = '7';
    }
    elseif($_POST["SelectColor"] == 'Red'){
        $BKStatus = '4';
    }
    elseif($_POST["SelectColor"] == 'BlueVIP'){
        $BKStatus = '8';
    }
    elseif($_POST["SelectColor"] == 'YellowVIP'){
        $BKStatus = '9';
    }
    elseif($_POST["SelectColor"] == 'MagentaVIP'){
        $BKStatus = '10';
    }
    elseif($_POST["SelectColor"] == 'RedVIP'){
        $BKStatus = '11';
    }
    elseif($_POST["GuestType"] == '2'){
        $BKStatus = '4';
    }
    elseif($_POST["GuestType"] == '3'){
        $BKStatus = '11';
    }
    elseif($_POST["MenuOther1"] == ''){
        $BKStatus = '3';
    }
    elseif($_POST["MenuOther1"] !== ''){
        $BKStatus = '4';
    }
    elseif($_POST["MenuName1"] == ''){
        $BKStatus = '3';
    }
    elseif($_POST["MenuName1"] !== ''){
        $BKStatus = '4';
    }
    else{
        $BKStatus = '4';
    }

    $query = "INSERT INTO guest(GuestCompany,GuestName,GuestEmail,GuestTel,GuestTelBackup,GuestLine,DataIn,TimeIn,TimeRange,GuestNum, TotalPrice,Pledge,GuestType,GuestStatus)  
    VALUES('$CompName','$GuestName','$GuestEmail','$GuestTel','$GuestTelBackup','$LineID','$DataIn','$Hour:$Minute','$TimeRange','$GuestNum', '$TotalPrice','$Pledge','$GuestType','1')";
     $result = mysqli_query($conn, $query)or die (mysqli_error($conn));

            $LastID = mysqli_insert_id($conn); 
            foreach($_POST['TableID'] as $row => $art){
            $TableID = mysqli_real_escape_string($conn, $_POST['TableID'][$row]);
             
            $sql2 = "INSERT INTO bookingres(GuestID,TableID,ResName,DataIn,TimeIn,TimeRange,ListPrice,RecordBy,MenuOther,MenuName1,MenuName2,MenuName3,MenuName4,MenuName5,MenuName6,MenuName7,MenuName8,MenuName9,MenuName10,BKStatus)
            VALUES('$LastID','$TableID','$ResName','$DataIn','$Hour:$Minute','$TimeRange','$ListPrice','$RecordBy','$MenuOther1$MenuOther2$MenuOther3','$MenuName1','$MenuName2','$MenuName3','$MenuName4','$MenuName5','$MenuName6','$MenuName7','$MenuName8','$MenuName9','$MenuName10$Rice$Fruit$Drink$RiceVIP$FruitVIP$DrinkVIP','$BKStatus')";
	        $result2 = mysqli_query($conn, $sql2) or die (mysqli_error($conn));
            
            $query = "update tablemantraplan set TableStatus='1', UserRecord='' where TableID='$TableID'";
            $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
                foreach($_SESSION["shopping_cart"] as $keys => $values){  // Clear Session Table ทั้งหมด
                    if($values["item_id"] == $TableID){  
                     unset($_SESSION["shopping_cart"][$keys]);  
                    }  
                }  
            }

            if($result && $result2) {   
            }else{ ?>
                                <script type="text/javascript">
                                        if(!alertify.showSuccess){
                                            alertify.dialog('showSuccess',function factory(){
                                                return{
                                                    build:function(){
                                                    var errorHeader = '<span class="fa fa-times-circle fa-2x" '
                                                    +    'style="vertical-align:middle;color:#e10000;">'
                                                    + '</span>&nbsp;&nbsp; เพิ่มข้อมูลไม่สำเร็จ';
                                                    this.setHeader(errorHeader);
                                                                    }
                                                    };
                                                },true,'alert');
                                        }
                                        alertify.defaults.theme.ok = "btn btn-primary";
                                        $(function(){alertify.showSuccess('เพิ่มข้อมูลการจองลูกค้าผิดพลาด โปรดกรอกข้อมูลให้ครบ<br/><br/>',
                                                function (e) {
                                                if (e) {
                                               // window.location.reload();
                                                } else {
                                                return false;
                                                }
                                            });
                                        });
                                </script>  

  <?php  } ?>
<?php
	mysqli_close($conn);
?>