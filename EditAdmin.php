<?php session_start();?>
<?php 
require_once("Include/EncodeDecode.php");
if (!$_SESSION["UserID"]){  //check session

	  	Header("Location: index.html"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>


<!doctype html>
<html lang="en">

<head>
    <?php
      require_once("connection.php");
      include ('Include/header.php');
      header("Refresh: 30*60; URL=logout.php");
	  ?>

</head>

<body>
    <?php
      include ('Include/Menu.php');

    if(isset($_GET["UserID"]))
   {
        $UserID=base64url_decode($_GET["UserID"]);
   }  
    ?>
        <div class="content">
            <div class="container-fluid">
               
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Admin</h4></br>
                        </div>
                       
                            <div class="content table-responsive table-full-width" style=" margin:auto;">
                                <div class="main-content" >
                                <?php 
                                            $sql = "SELECT * FROM user WHERE ID = '".$UserID."' ";
                                            $query = mysqli_query($conn,$sql);
                                            $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
                                            {?>
                                    
                                 <h5 class="title" style=" font-family: 'Trirong', serif;margin-left: 12px;">
                                 แก้ไขข้อมูลผู้ดูแลระบบ Username : <?php echo $result["Username"];?></h5></br>
                                
                                <form action="SaveEdit.php?UserID=<?php echo $url_send=urlencode(base64_encode(base64_encode($result["ID"])));?>" method="post" onSubmit="JavaScript:return fncSubmit();" name="form">
                                    
                                        <div class="col-md-6">
                                            <input type="hidden" name="UserID" value="<?php echo $result["ID"];?>">
                                            <label>&nbsp;&nbsp;Username</label>
                                            <input type="text" value="<?php echo $result["Username"];?>" class="form-control border-input" disabled placeholder="Username">
                                            <!--What the user sees-->
                                            <input type="hidden" value="<?php echo $result["Username"];?>" name="Username">

                                        </div>
                                        <div class="col-md-6">
                                            <label>&nbsp;&nbsp;รหัสผ่าน</label>
                                            <input type="password" class="form-control border-input" name="password" maxlength="15" placeholder="รหัสผ่าน" onblur="check_num(this)">


                                            <script type="text/javascript">
                                                if (!alertify.errorAlert) {
                                                    alertify.dialog('errorAlert', function factory() {
                                                        return {
                                                            build: function() {
                                                                var errorHeader = '<span class="fa fa-times-circle fa-2x" ' +
                                                                    'style="vertical-align:middle;color:#e10000;">' +
                                                                    '</span>&nbsp;&nbsp; เพิ่มข้อมูลไม่สำเร็จ';
                                                                this.setHeader(errorHeader);
                                                            }
                                                        };
                                                    }, true, 'alert');
                                                }

                                                function check_num(elm) {
                                                    if (elm.value.length < 8 || elm.value.length > 15) {
                                                        alertify.defaults.theme.ok = "btn btn-primary";
                                                        alertify.errorAlert("กรุณากรอก Password จำนวนตัวอักษร 8 - 15 ตัวอักษรเท่านั้น! <br/><br/>");
                                                    }
                                                }
                                            </script>
                                        </div>
                                        <div class="col-md-4">
                                            <label>&nbsp;&nbsp;ชื่อจริง</label>
                                            <input type="text" class="form-control border-input" name="Firstname" value="<?php echo $result["Firstname"];?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>&nbsp;&nbsp;นามสกุล</label>
                                            <input type="text" class="form-control border-input" name="Lastname" value="<?php echo $result["Lastname"];?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>&nbsp;&nbsp;เบอร์โทรติดต่อ</label>
                                            <input type="text" class="form-control border-input" name="Tel" maxlength="10" value="<?php echo $result["Tel"];?>" OnKeyPress="return chkNumber(this)">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="dropdown">
                                                <label>สถานะแอดมิน</label>
                                                <select name="Userlevel" id="Userlevel" class="form-control border-input">
                                                    <option value="" disabled selected>กรุณาเลือก</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Editor">Editor</option>
                                                    <option value="Viewer">Viewer</option></select>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6">
                                            <div class="dropdown">
                                            <label>ดูแลประจำร้าน</label>
                                            <?php if($_SESSION["UserResName"]=='All'){?>    
                                            <select name="UserResName" id="UserResName" class=" toggle-divs form-control border-input" >
                                            <option value="" disabled selected>กรุณาเลือก ร้านที่ดูแล</option>
                                            <option value="KeereeMantra">KeereeMantra</option>
                                            <option value="KeereeTara">KeereeTara</option>
                                            <option value="Loft">Loft</option>
                                            <option value="All">แอดมินระบบดูได้ทุกร้าน</option></select>
                                            
                                            <?php }elseif($_SESSION["UserResName"]!='All'){?>    
                                            <input style="background-color: #fffcf5;" type="text" class="form-control border-input" value="ประจำร้าน <?php echo $_SESSION["UserResName"];?>" disabled>
                                            <input type="hidden" name="UserResName" id="UserResName" class="form-control border-input" value="<?php echo $_SESSION["UserResName"];?>">
                                            <?php }?>
                                            </div></div>
                                    </div>
                                    <div class="text-center">
                                       <button type="submit" name="submit" class="btn btn-info btn-fill btn-wd" style="margin-top: 20px;">บันทึก</button>
                                    </div>
                                    <div class="clearfix"></div>

                                    <script language="JavaScript">
                                        function chkNumber(ele) {
                                            var vchar = String.fromCharCode(event.keyCode);
                                            if (vchar < '0' || vchar > '9') return false;
                                            ele.OnKeyPress = vchar;
                                        }
                                    </script>
                                    <script type="text/javascript">
                                        if (!alertify.errorAlert) {
                                            alertify.dialog('errorAlert', function factory() {
                                                return {
                                                    build: function() {
                                                        var errorHeader = '<span class="fa fa-times-circle fa-2x" ' +
                                                            'style="vertical-align:middle;color:#e10000;">' +
                                                            '</span>&nbsp;&nbsp; เพิ่มข้อมูลไม่สำเร็จ';
                                                        this.setHeader(errorHeader);
                                                    }
                                                };
                                            }, true, 'alert');
                                        }

                                        function fncSubmit() {
                                            if (document.form.Username.value == "") {
                                                alertify.defaults.theme.ok = "btn btn-primary";
                                                alertify.errorAlert("กรุณากรอก Username! <br/><br/>");
                                                document.form.Username.focus();
                                                return false;
                                            }

                                            if (document.form.password.value == "") {
                                                document.form.password.focus();
                                                return false;
                                            }

                                            if (document.form.Firstname.value == "") {
                                                alertify.defaults.theme.ok = "btn btn-primary";
                                                alertify.errorAlert("กรุณากรอกชื่อจริง! <br/><br/>");
                                                document.form.Firstname.focus();
                                                return false;
                                            }
                                            if (document.form.Lastname.value == "") {
                                                alertify.defaults.theme.ok = "btn btn-primary";
                                                alertify.errorAlert("กรุณากรอกนามสกุล! <br/><br/>");
                                                document.form.Lastname.focus();
                                                return false;
                                            }
                                            if (document.form.Tel.value == "") {
                                                alertify.defaults.theme.ok = "btn btn-primary";
                                                alertify.errorAlert("กรุณากรอกเบอร์โทรติดต่อ! <br/><br/>");
                                                document.form.Tel.focus();
                                                return false;
                                            }
                                            if(document.form.Userlevel.value == "")
	                                           {
		                                         alertify.defaults.theme.ok = "btn btn-primary";
                                                   alertify.errorAlert("กรุณาเลือกสถานะผู้ดูแลระบบ! <br/><br/>");
		                                          document.form.Userlevel.focus();		
		                                          return false;
	                                           }
                                            if(document.form.UserResName.value == "")
	                                           {
		                                         alertify.defaults.theme.ok = "btn btn-primary";
                                                   alertify.errorAlert("กรุณาเลือกร้านที่ดูแล! <br/><br/>");
		                                          document.form.UserResName.focus();		
		                                          return false;
	                                           }
                                            document.form.submit();
                                        }
                                    </script>
                                </form>
                                <?php
                                        }
                                        ?>
                            
                        </div>
                    </div>
                </div>
            </div> 
    <?php
      include ('Include/footer.php');
	  ?>
        </div>
        
<?php }?>
<?php
mysqli_close($conn);
?>