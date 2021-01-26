<?php
    require_once("connection.php");

    if($_POST["TimeIn"] < '12:30:00'){
        $TimeRange = '10:00 - 12:00 น.';
    }
    if($_POST["TimeIn"] > '12:30:00'){
        $TimeRange = '13:00 - 16:00 น.';
    }
    if($_POST["TimeIn"] > '16:59:00'){
        $TimeRange = '17:00 - 19:00 น.';
    }

    if(isset($_POST["operation"]))
    {
        if($_POST["operation"] == "Edit")
        {
            
            $sql = "UPDATE guest SET GuestCompany = '".$_POST["GuestCompany"]."', GuestName = '".$_POST["GuestName"]."', GuestEmail = '".$_POST["GuestEmail"]."', GuestTel = '".$_POST["GuestTel"]."', GuestTelBackup = '".$_POST["GuestTelBackup"]."', GuestLine = '".$_POST["GuestLine"]."', DataIn = '".$_POST["DataIn"]."', TimeIn = '".$_POST["TimeIn"]."', TimeRange = '".$TimeRange."', GuestNum = '".$_POST["GuestNum"]."' WHERE GuestID = '".$_POST["GuestID"]."' ";
            $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            
            $sql = "UPDATE bookingres SET DataIn = '".$_POST["DataIn"]."', TimeIn = '".$_POST["TimeIn"]."', TimeRange = '".$TimeRange."' WHERE GuestID = '".$_POST["GuestID"]."' ";
            $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        }
    }

	if(isset($_POST["operation2"]))
    {
        if($_POST["operation2"] == "Edit")
        {
        if (isset($_REQUEST['GuestID2'])) {

            $GuestID = $_REQUEST['GuestID2'];
            $query = "update guest set GuestStatus='2' where GuestID='$GuestID'";
            $result = mysqli_query($conn, $query);

        }
    }
}

if(isset($_POST["operation3"]))
    {
        if($_POST["operation3"] == "Edit")
        {
        if (isset($_REQUEST['GuestID3'])) {

            $GuestID = $_REQUEST['GuestID3'];
            $sql = "update guest set GuestStatus='3' where GuestID='$GuestID'";
            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            
            $sql = "UPDATE bookingres SET BKStatus = '12' WHERE GuestID = '".$GuestID."' ";
            $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));

        }
    }
}

?>