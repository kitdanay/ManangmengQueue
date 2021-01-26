<?php session_start();?>
<?php
    require_once("connection.php");
    require_once("Include/EncodeDecode.php");
    
    if(!isset($_POST["TableID"])){
         header("location:$_SESSION[ZoneName].php");
    
    }else{
    $GuestID = $_SESSION["GetNewTable"];
    $ResName = $_SESSION["ResName"];
    $DataIn = $_SESSION["DataIn"];
    $TimeIn = $_SESSION["TimeIn"];
    $TimeRange = $_SESSION["TimeRange"];
    $ListPrice = $_SESSION["ListPrice"];
    $RecordBy = $_SESSION["RecordBy"];
    $MenuName1 = $_SESSION["MenuName1"];
    $MenuName2 = $_SESSION["MenuName2"];
    $MenuName3 = $_SESSION["MenuName3"];
    $MenuName4 = $_SESSION["MenuName4"];
    $MenuName5 = $_SESSION["MenuName5"];
    $MenuName6 = $_SESSION["MenuName6"];
    $MenuName7 = $_SESSION["MenuName7"];
    $MenuName8 = $_SESSION["MenuName8"];
    $MenuName9 = $_SESSION["MenuName9"];
    $MenuName10 = $_SESSION["MenuName10"];
    $MenuOther = $_SESSION["MenuOther"];
    $BKStatus = $_SESSION["BKStatus"];
        
    if(isset($_GET['action']) and $_GET['action'] == 'AddTable'){
    foreach($_POST["TableID"] as $row => $art){
    $TableID = mysqli_real_escape_string($conn, $_POST['TableID'][$row]);
    
    $sql2 = "INSERT INTO bookingres(GuestID,TableID,ResName,DataIn,TimeIn,TimeRange,ListPrice,RecordBy,MenuName1,MenuName2,MenuName3,MenuName4,MenuName5,MenuName6,MenuName7,MenuName8,MenuName9,MenuName10,MenuOther,BKStatus) VALUES('$GuestID','$TableID','$ResName','$DataIn','$TimeIn','$TimeRange','$ListPrice','$RecordBy','$MenuName1','$MenuName2','$MenuName3','$MenuName4','$MenuName5','$MenuName6','$MenuName7','$MenuName8','$MenuName9','$MenuName10','$MenuOther','$BKStatus')";
    $result2 = mysqli_query($conn, $sql2) or die (mysqli_error($conn));
    
    $query = "update tablemantraplan set TableStatus='1', UserRecord='' where TableID='$TableID'";
    $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
        foreach($_SESSION["shopping_cart"] as $keys => $values){  // Clear Session Table ทั้งหมด
            if($values["item_id"] == $TableID){  
             unset($_SESSION["shopping_cart"][$keys]);
             unset($_SESSION["GetNewTable"]);
             
            }  
        }  
          header("location:$_SESSION[ZoneName].php");
        } 
    }
}

?>