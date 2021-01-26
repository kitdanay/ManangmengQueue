<?php session_start();?>
<?php
    require_once("connection.php");
    require_once("Include/EncodeDecode.php");

    if(!isset($_POST["TableID"])){
        header("location:$_SESSION[ZoneName].php");
    
    }else{
        
    if(isset($_GET['action']) and $_GET['action'] == 'MoveTable'){
    foreach($_POST["TableID"] as $row => $art){
    
    $TableID = mysqli_real_escape_string($conn, $_POST['TableID'][$row]);
    $BookingID = base64url_decode($_SESSION["MoveTable"]);
    $GuestID = base64url_decode($_SESSION["GuestID"]);
    
    $query = "update bookingres set TableID='$TableID', DataIn='$_SESSION[SelectDate]', TimeIn='$_SESSION[SelectTime]' where BookingID='$BookingID'";
    $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
    $query = "update guest set  DataIn='$_SESSION[SelectDate]', TimeIn='$_SESSION[SelectTime]' where GuestID='$GuestID'";
    $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
    $query2 = "update tablemantraplan set TableStatus='1', UserRecord='' where TableID='$TableID'";
    $Recordset2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
         
        foreach($_SESSION["shopping_cart"] as $keys => $values){  
            if($values["item_id"] == $TableID){  
             
             unset($_SESSION["shopping_cart"][$keys]);
             unset($_SESSION["MoveTable"]);  
            }  
        }  
         header("location:$_SESSION[ZoneName].php");
        } 
    }
}
?>