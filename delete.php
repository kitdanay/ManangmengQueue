<?php
    require_once("Include/EncodeDecode.php");
	require_once 'connection.php';

if ($_REQUEST['delete']) 
{
    $UserID=base64url_decode($_REQUEST['delete']);
	$sql = "DELETE FROM user ";
	$sql .="WHERE ID = '".$UserID."' ";
	$result = mysqli_query($conn, $sql);
	if ($result) {
			echo "<center><p style='font-size:25px; color:blue;'; ></br>ลบข้อมูลผู้ดูแลระบบเสร็จสิ้น ...</br></br></center>";
		}
    
    else{
            
            echo "<br><br><p style=text-align:center;>Sorry there was an error. Please try again later</p><br><br>";
    }
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}