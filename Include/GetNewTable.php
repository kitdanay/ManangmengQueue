<?php session_start();?>
<?php
require_once("../connection.php");

if(isset($_GET["GuestID"]))  
 {  
    $_SESSION["GetNewTable"] = $_GET["GuestID"];
    $_SESSION["GuestName"] = $_GET["GuestName"];
    $_SESSION["GuestCompany"] = $_GET["GuestCompany"];
    
    $sql="SELECT * FROM bookingres Where GuestID='".$_SESSION["GetNewTable"]."'";
    $result = mysqli_query($conn,$sql)or die("Error: " . mysqli_error($conn));
    $row = mysqli_fetch_array($result);

        $_SESSION["ResName"] = $row["ResName"];
        $_SESSION["DataIn"] = $row["DataIn"];
        $_SESSION["TimeIn"] = $row["TimeIn"];
        $_SESSION["TimeRange"] = $row["TimeRange"];
        $_SESSION["ListPrice"] = $row["ListPrice"];
        $_SESSION["DateRecode"] = $row["DateRecode"];
        $_SESSION["RecordBy"] = $row["RecordBy"];
        $_SESSION["MenuName1"] = $row["MenuName1"];
        $_SESSION["MenuName2"] = $row["MenuName2"];
        $_SESSION["MenuName3"] = $row["MenuName3"];
        $_SESSION["MenuName4"] = $row["MenuName4"];
        $_SESSION["MenuName5"] = $row["MenuName5"];
        $_SESSION["MenuName6"] = $row["MenuName6"];
        $_SESSION["MenuName7"] = $row["MenuName7"];
        $_SESSION["MenuName8"] = $row["MenuName8"];
        $_SESSION["MenuName9"] = $row["MenuName9"];
        $_SESSION["MenuName10"] = $row["MenuName10"];
        $_SESSION["MenuOther"] = $row["MenuOther"];
        echo $_SESSION["BKStatus"] = $row["BKStatus"];
    
        unset($_SESSION["MoveTable"]);
        unset($_SESSION["GetChangeIcon"]);
        unset($_SESSION["GetDeleteTable"]); 
    
        header("location:../$_SESSION[ZoneName].php");
    
     
    
}


 ?>