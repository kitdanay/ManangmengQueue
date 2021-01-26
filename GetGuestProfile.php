<?php session_start();?>

<?php
	require_once("connection.php");
	if (isset($_REQUEST['GuestID'])) {
			
        $GuestID = $_REQUEST['GuestID'];
		$sql = "SELECT * FROM tablemantraplan INNER JOIN bookingres ON  tablemantraplan.TableID = bookingres.TableID INNER JOIN guest ON guest.GuestID=bookingres.GuestID Where guest.GuestID ='".$GuestID."' ORDER BY guest.GuestID ASC";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
        {?>
		<div class="table-responsive">
        <table class="table table-striped table-bordered">
		    <tr>
                <?php   if($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Admin'){
                             require_once("Include/GetGuestProfileEdit.php");
                
                        }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
                            require_once("Include/GetGuestProfileEdit.php");
            
                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
			                require_once("Include/GetGuestProfileEdit.php"); 
            
                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                            require_once("Include/GetGuestProfileNoEdit.php");
                        
                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                             require_once("Include/GetGuestProfileEdit.php"); 
            
                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                            require_once("Include/GetGuestProfileNoEdit.php");
            
                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                            require_once("Include/GetGuestProfileNoEdit.php");
                        
                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                            require_once("Include/GetGuestProfileNoEdit.php");
            
                        }?>
		</div><?php } ?>
		<?php } ?>

    <script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>   

    <script language="JavaScript">
    document.onkeydown = chkEvent 
    function chkEvent(e) {
        var keycode;
        if (window.event) keycode = window.event.keyCode; //*** for IE ***//
        else if (e) keycode = e.which; //*** for Firefox ***//
        if(keycode==13)
        {
            return false;
        }
    }
    </script>
    <script>
		function showEdit(editableObj) {
			$(editableObj).css("background","#FFF");
		} 
		
		function saveToDatabase(editableObj,column,GuestID) {
			$(editableObj).css("background","#FFF url(images/loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "SaveChange.php",
				type: "POST",
				data:'column='+column+'&editval='+editableObj.innerHTML+'&GuestID='+GuestID,
				success: function(data){
					$(editableObj).css("background","#FDFDFD");
				}        
		   });
		}
    
    	function showEdit(ediNumtable) {
			$(ediNumtable).css("background","#FFF");
		} 
    
        function saveEditTable(ediNumtable,column,BookingID,GuestID) {
			$(ediNumtable).css("background","#FFF url(images/loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "SaveChange2.php",
				type: "POST",
				data:'column='+column+'&editval='+ediNumtable.innerHTML+'&BookingID='+BookingID+'&GuestID='+GuestID,
				success: function(data){
					$(ediNumtable).css("background","#FDFDFD");
				}        
		   });
		}
        
        function showEdit(ediNumtable) {
			$(ediNumtable).css("background","#FFF");
		} 
    
        function saveChangeTable(ediNumtable,column,BookingID,) {
			$(ediNumtable).css("background","#FFF url(images/loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "SaveChange3.php",
				type: "POST",
				data:'column='+column+'&editval='+ediNumtable.innerHTML+'&BookingID='+BookingID,
				success: function(data){
					$(ediNumtable).css("background","#FDFDFD");
				}        
		   });
		}
        
        function showEdit(ediNumtable) {
			$(ediNumtable).css("background","#FFF");
		} 
    
        function saveChangeTable2(ediNumtable,column,BookingID,) {
			$(ediNumtable).css("background","#FFF url(images/loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "SaveChange3.php",
				type: "POST",
				data:'column='+column+'&editval='+'100'+ediNumtable.innerHTML+'&BookingID='+BookingID,
				success: function(data){
					$(ediNumtable).css("background","#FDFDFD");
				}        
		   });
		}
		</script>
