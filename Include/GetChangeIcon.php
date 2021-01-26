<?php session_start();?>
<?php
require_once("../connection.php");

if(isset($_GET["GuestID"]))  
 {  
    $_SESSION["GetChangeIcon"] = $_GET["GuestID"];
    $_SESSION["GuestNameCI"] = $_GET["GuestName"];
    $_SESSION["GuestCompanyCI"] = $_GET["GuestCompany"];
    
    $sql="SELECT * FROM bookingres Where GuestID='".$_SESSION["GetChangeIcon"]."'";
    $result = mysqli_query($conn,$sql)or die("Error: " . mysqli_error($conn));
    $row = mysqli_fetch_array($result);

        $_SESSION["MenuName1"] = $row["MenuName1"];
        $_SESSION["MenuOther"] = $row["MenuOther"];
    
        unset($_SESSION["MoveTable"]);
        unset($_SESSION["GetDeleteTable"]);
        unset($_SESSION["GetNewTable"]);
    
        header("location:../$_SESSION[ZoneName].php");
    
     
    
}


 ?>