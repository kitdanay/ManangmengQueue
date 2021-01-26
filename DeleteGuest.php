<?php
    require_once("Include/EncodeDecode.php");
	require_once 'connection.php';

if ($_REQUEST['DeleteGuest']) 
{
    $GuestID=base64url_decode($_REQUEST['DeleteGuest']);
	$sql = "DELETE FROM guest ";
	$sql .="WHERE GuestID = '".$GuestID."' ";
    $result = mysqli_query($conn, $sql) ;
    
    $sql2 = "DELETE FROM bookingres ";
	$sql2 .="WHERE GuestID = '".$GuestID."' ";
    $result2 = mysqli_query($conn, $sql2) ;

	if ($result && $result2) {
			echo "<center><p style='font-size:25px; color:blue;'; ></br>ลบข้อมูลการจองโต๊ะลูกค้าเสร็จสิ้น ...</br></br></center>";
    }
    else{
            
            echo "<br><br><p style=text-align:center;>Sorry there was an error. Please try again later</p><br><br>";
    }
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}
?>