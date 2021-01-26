<?php
require_once("connection.php");
if(isset($_REQUEST["GuestID"]))
{
	$output = array();
    $GuestID = $_REQUEST['GuestID'];
	$sql = "SELECT * FROM tablemantraplan 
    INNER JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID 
    INNER JOIN guest ON guest.GuestID=bookingres.GuestID Where guest.GuestID ='".$GuestID."' 
    ORDER BY guest.GuestID ASC";
	
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
		$output["GuestCompany"] = $result["GuestCompany"];
		$output["GuestName"] = $result["GuestName"];
        $output["GuestEmail"] = $result["GuestEmail"];
		$output["GuestTel"] = $result["GuestTel"];
        $output["GuestTelBackup"] = $result["GuestTelBackup"];
		$output["GuestLine"] = $result["GuestLine"];
        $output["DataIn"] = $result["DataIn"];
		$output["TimeIn"] = date('H:i',strtotime($result["TimeIn"]));
        $output["TimeRange"] = $result["TimeRange"];
        $output["GuestNum"] = $result["GuestNum"];
		$output["DateRecode"] = DateThai($result["DateRecode"]);
        $output["RecordBy"] = $result["RecordBy"];
        $output["MenuName1"] = $result["MenuName1"];
        $output["MenuName2"] = $result["MenuName2"];
        $output["MenuName3"] = $result["MenuName3"];
        $output["MenuName4"] = $result["MenuName4"];
        $output["MenuName5"] = $result["MenuName5"];
        $output["MenuName6"] = $result["MenuName6"];
        $output["MenuName7"] = $result["MenuName7"];
        $output["MenuName8"] = $result["MenuName8"];
        $output["MenuName9"] = $result["MenuName9"];
        $output["MenuName10"] = $result["MenuName10"];
        $output["MenuOther"] = $result["MenuOther"];
        $output["GuestStatus"] = $result["GuestStatus"];
	
	echo json_encode($output);
}
?>