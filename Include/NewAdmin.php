 
<?php 
require_once("connection.php");
if(isset($_POST['submit'])){
    
        $username = $_REQUEST["Username"];
        // เช็คว่ามีข้อมูลนี้อยู่หรือไม่
	    $check = "select * from user where Username = '$username' ";
	    $result1 = mysqli_query($conn, $check);
		$num=mysqli_num_rows($result1); 
        if($num > 0)   		
       
        //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
        { ?>
             <script type="text/javascript">
                                        if(!alertify.showSuccess){
                                            alertify.dialog('showSuccess',function factory(){
                                                return{
                                                    build:function(){
                                                    var errorHeader = '<span class="fa fa-times-circle fa-2x" '
                                                    +    'style="vertical-align:middle;color:#e10000;">'
                                                    + '</span>&nbsp;&nbsp; เพิ่มข้อมูลไม่สำเร็จ';
                                                    this.setHeader(errorHeader);
                                                                    }
                                                    };
                                                },true,'alert');
                                        }
                                        alertify.defaults.theme.ok = "btn btn-primary";
                                        $(function(){alertify.showSuccess('มี Username นี้ในระบบแล้ว กรุณาเปลี่ยน Username ใหม่ <br/><br/>');})
                </script>

		<?php }else{
    
		$username = $_POST['Username'];
        $password = $_POST['password'];
        $firstname = $_POST['Firstname'];
		$lastname = $_POST['Lastname'];
		$telphone 	= $_POST['Tel'];
        $UserResName = $_POST['UserResName'];
		
		$options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		$sql = "insert into user (Username, Password, Firstname, Lastname, Tel, Userlevel, UserResName) value('".$username."', '".$hashPassword."', '".$firstname."','".$lastname."','".$telphone."','".$_POST["Userlevel"]."','".$UserResName."')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{?>   
                        <script type="text/javascript">
                                        if(!alertify.showSuccess){
                                            alertify.dialog('showSuccess',function factory(){
                                                return{
                                                    build:function(){
                                                    var errorHeader = '<span class="fa fa-check-circle fa-2x" '
                                                    +    'style="vertical-align:middle;color:#00CC00;">'
                                                    + '</span>&nbsp;&nbsp; เพิ่มข้อมูลสำเร็จ';
                                                    this.setHeader(errorHeader);
                                                                    }
                                                    };
                                                },true,'alert');
                                        }
                                        alertify.defaults.theme.ok = "btn btn-primary";
                                        $(function(){alertify.showSuccess('เพิ่มข้อมูลผู้ดูแลระบบลงในฐานข้อมูลเสร็จสิ้น<br/><br/>',
                                                function (e) {
                                                if (e) {
                                                window.location.href='ManageAdmin.php';
                                                } else {
                                                return false;
                                                }
                                            });
                                        });
    </script>  
<?php
}
}
}
?> 