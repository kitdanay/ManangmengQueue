<?php session_start();?>
<?php
    require_once("connection.php");
    require_once("Include/EncodeDecode.php");
    
    if(!isset($_SESSION["GetChangeIcon"])){
         //header("location:$_SESSION[ZoneName].php");
    
    }else{
    echo $GuestID = $_SESSION["GetChangeIcon"];
    echo $BKStatus = mysqli_real_escape_string($conn, $_POST['SelectColor']);
        
    
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
    else{
        $BKStatus = '4';
    }
        
    if(isset($_GET['action']) and $_GET['action'] == 'ChangeIconTable.php'){

    $query = "update bookingres set BKStatus='$BKStatus' where GuestID='$GuestID'";
    $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
       
            unset($_SESSION["GetChangeIcon"]);
            
            header("location:$_SESSION[ZoneName].php");
    }
}

?>