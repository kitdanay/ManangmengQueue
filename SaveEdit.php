<?php session_start();?>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
      require_once("connection.php");
      include ('Include/header.php');

 $password = $_POST['password'];
 $hashPassword = password_hash($password,PASSWORD_BCRYPT);
 $UserResName = $_POST['UserResName'];

	$sql = "UPDATE user SET 
			Username = '".$_POST["Username"]."' ,
            Password = '".$hashPassword."' ,
			Firstname = '".$_POST["Firstname"]."' ,
			Lastname = '".$_POST["Lastname"]."' ,
			Tel = '".$_POST["Tel"]."' ,
			Userlevel = '".$_POST["Userlevel"]."',
            UserResName = '".$UserResName."'
			WHERE ID = '".$_POST["UserID"]."' ";

	$query = mysqli_query($conn,$sql);

	if($query) 	{?>   
                        <script type="text/javascript">
                                        if(!alertify.showSuccess){
                                            alertify.dialog('showSuccess',function factory(){
                                                return{
                                                    build:function(){
                                                    var errorHeader = '<span class="fa fa-check-circle fa-2x" '
                                                    +    'style="vertical-align:middle;color:#00CC00;">'
                                                    + '</span>&nbsp;&nbsp; แก้ไขข้อมูลสำเร็จ';
                                                    this.setHeader(errorHeader);
                                                                    }
                                                    };
                                                },true,'alert');
                                        }
                                        alertify.defaults.theme.ok = "btn btn-primary";
                                        $(function(){alertify.showSuccess('แก้ไขข้อมูลผู้ดูแลระบบเสร็จสิ้น<br/><br/>',
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
?> 
<?php
	mysqli_close($conn);
?>