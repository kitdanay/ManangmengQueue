<?php session_start();?>
<?php
    require_once("connection.php");
    require_once("Include/EncodeDecode.php");

    if(!isset($_POST["TableID"])){
        header("location:$_SESSION[ZoneName].php");
    
    }else{
        
    if(isset($_GET['action']) and $_GET['action'] == 'CancelMove'){
    foreach($_POST["TableID"] as $row => $art){
    $TableID = mysqli_real_escape_string($conn, $_POST['TableID'][$row]);
        
    $query2 = "update tablemantraplan set TableStatus='1', UserRecord='' where TableID='$TableID'";
    $Recordset2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
         
        unset($_SESSION["shopping_cart"]);
        unset($_SESSION["MoveTable"]);
        unset($_SESSION["GetNewTable"]);
              
         header("location:$_SESSION[ZoneName].php");
        } 
    }
}
?>