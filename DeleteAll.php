<?php session_start();?>
<?php
    require_once("connection.php");

    if(!isset($_POST["TableID"])){
        header("location:$_SESSION[ZoneName].php");
    
    }else{
        
    if(isset($_GET['action']) and $_GET['action'] == 'search'){
    foreach($_POST["TableID"] as $row => $art){
    $TableID = mysqli_real_escape_string($conn, $_POST['TableID'][$row]);
    
    $query = "update tablemantraplan set TableStatus='1', UserRecord='' where TableID='$TableID'";
    $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
         
        foreach($_SESSION["shopping_cart"] as $keys => $values){  // Clear Session Table ทั้งหมด
            if($values["item_id"] == $TableID){  
             unset($_SESSION["shopping_cart"][$keys]);  
            }  
        }  
         header("location:$_SESSION[ZoneName].php");
        } 
    }
}
?>