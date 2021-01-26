<?php session_start();?>
<?php
        //fetch.php
        require_once("connection.php");
        require_once("Include/EncodeDecode.php");
        
        $query = "SELECT *, GROUP_CONCAT(bookingres.TableID SEPARATOR ', ') AS TableID 
        FROM guest INNER JOIN bookingres ON guest.GuestID = bookingres.GuestID WHERE ";

        //ดึงข้อมูลตามวันที่ปัจจุบัน
        if(isset($_POST["is_category"]) == '')
        {
         $query .= 'guest.DataIn = DATE_FORMAT(NOW(),"%Y-%m-%d") AND';
        }

        if(isset($_POST["is_category"]))
        {
         $query .= 'guest.DataIn = "'.$_POST["SelectDate"].'" AND bookingres.ResName = "'.$_POST["is_category"].'" AND ';
        }

        if(isset($_POST["search"]["value"]))
        {
         //$query .= '(guest.GuestID LIKE "%'.$_POST["search"]["value"].'%" ';
         $query .= '(bookingres.TableID LIKE "%'.$_POST["search"]["value"].'%" ';
         $query .= 'OR guest.GuestCompany LIKE "%'.$_POST["search"]["value"].'%" ';
         $query .= 'OR guest.GuestName LIKE "%'.$_POST["search"]["value"].'%") ';
         //$query .= 'OR guest.GuestTel LIKE "%'.$_POST["search"]["value"].'%") ';

         $query .= 'GROUP BY guest.GuestID ORDER BY guest.TimeIn ASC ';
        }

        $query1 = '';
        if($_POST["length"] != 1)
        {
         $query1 .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
        }

        $number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
        $result = mysqli_query($conn, $query . $query1) or die (mysqli_error($conn) . " Error Query [".$query."]");

        $data = array();

        $item = 1;
        while($row = mysqli_fetch_array($result))
        {
         $sub_array = array();
         $sub_array[] = $_POST['start']+$item;

         if(utf8_strlen($row["GuestCompany"]) < '12'){
            $sub_array[] = $row["GuestCompany"];
         }elseif(utf8_strlen($row["GuestCompany"])>= '12'){
            $sub_array[] =  mb_substr(strip_tags($row["GuestCompany"]), $MinText, $MaxText, "UTF-8") . '...';
         };

         $sub_array[] = $row["GuestName"];
         
         //หมายเลขโต๊ะ    
         if ($row["ResName"]=='Loft') {
            $NewValue = str_replace("100"," ",$row["TableID"]);
            $sub_array[] =  $NewValue;
         }else{
            $sub_array[] = $row["TableID"];
         };
         //จบการแสดงหมายเลขโต๊ะ
            
         $sub_array[] = $row["GuestTel"];
         $sub_array[] = DateThai($row["DataIn"]).'<br>'.'เวลา '.date('H:i',strtotime($row["TimeIn"])).' น.';
         $sub_array[] = $row["GuestNum"];

        if($_SESSION["UserResName"]==$row["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                if($row["GuestStatus"] == '1') {
                 $sub_array[] = '<button id="UpST" class="btn btn-success btn-fill" data-id="'.$row["GuestID"].'>">รอการยืนยัน</button>';
                }elseif($row["GuestStatus"] == '2'){
                 $sub_array[] = '<button id="ClearTable" class="btn btn-warning btn-fill" data-id="'.$row["GuestID"].'>">ยืนยันแล้ว</button>';
                }elseif($row["GuestStatus"] == '3'){
                 $sub_array[] = '<button class="btn btn-danger btn-fill">เคลียร์โต๊ะแล้ว</button></td>';
                };  
            
        }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Admin'){
                if($row["GuestStatus"] == '1') {
                 $sub_array[] = '<button id="UpST" class="btn btn-success btn-fill" data-id="'.$row["GuestID"].'>">รอการยืนยัน</button>';
                }elseif($row["GuestStatus"] == '2'){
                 $sub_array[] = '<button id="ClearTable" class="btn btn-warning btn-fill" data-id="'.$row["GuestID"].'>">ยืนยันแล้ว</button>';
                }elseif($row["GuestStatus"] == '3'){
                 $sub_array[] = '<button class="btn btn-danger btn-fill">เคลียร์โต๊ะแล้ว</button></td>';
                };
            
        }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
                 if($row["GuestStatus"] == '1') {
                 $sub_array[] = '<button id="UpST" class="btn btn-success btn-fill" data-id="'.$row["GuestID"].'>">รอการยืนยัน</button>';
                }elseif($row["GuestStatus"] == '2'){
                 $sub_array[] = '<button id="ClearTable" class="btn btn-warning btn-fill" data-id="'.$row["GuestID"].'>">ยืนยันแล้ว</button>';
                }elseif($row["GuestStatus"] == '3'){
                 $sub_array[] = '<button class="btn btn-danger btn-fill">เคลียร์โต๊ะแล้ว</button></td>';
                };
        
        }elseif($_SESSION["UserResName"]!=$row["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                $sub_array[] = '<button class="btn btn-success">รอการยืนยัน</button>';
            
        }elseif($_SESSION["UserResName"]==$row["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                 if($row["GuestStatus"] == '1') {
                 $sub_array[] = '<button id="UpST" class="btn btn-success btn-fill" data-id="'.$row["GuestID"].'>">รอการยืนยัน</button>';
                }elseif($row["GuestStatus"] == '2'){
                 $sub_array[] = '<button id="ClearTable" class="btn btn-warning btn-fill" data-id="'.$row["GuestID"].'>">ยืนยันแล้ว</button>';
                }elseif($row["GuestStatus"] == '3'){
                 $sub_array[] = '<button class="btn btn-danger btn-fill">เคลียร์โต๊ะแล้ว</button></td>';
                };
        
        }elseif($_SESSION["UserResName"]!=$row["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                 if($row["GuestStatus"] == '1') {
                 $sub_array[] = '<button id="UpST" class="btn btn-success btn-fill" data-id="'.$row["GuestID"].'>">รอการยืนยัน</button>';
                }elseif($row["GuestStatus"] == '2'){
                 $sub_array[] = '<button id="ClearTable" class="btn btn-warning btn-fill" data-id="'.$row["GuestID"].'>">ยืนยันแล้ว</button>';
                }elseif($row["GuestStatus"] == '3'){
                 $sub_array[] = '<button class="btn btn-danger btn-fill">เคลียร์โต๊ะแล้ว</button></td>';
                };
            
        }elseif($_SESSION["UserResName"]==$row["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                 if($row["GuestStatus"] == '1') {
                 $sub_array[] = '<button id="UpST" class="btn btn-success btn-fill" data-id="'.$row["GuestID"].'>">รอการยืนยัน</button>';
                }elseif($row["GuestStatus"] == '2'){
                 $sub_array[] = '<button id="ClearTable" class="btn btn-warning btn-fill" data-id="'.$row["GuestID"].'>">ยืนยันแล้ว</button>';
                }elseif($row["GuestStatus"] == '3'){
                 $sub_array[] = '<button class="btn btn-danger btn-fill">เคลียร์โต๊ะแล้ว</button></td>';
                };
            
         }elseif($_SESSION["UserResName"]!=$row["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                 if($row["GuestStatus"] == '1') {
                 $sub_array[] = '<button id="UpST" class="btn btn-success btn-fill" data-id="'.$row["GuestID"].'>">รอการยืนยัน</button>';
                }elseif($row["GuestStatus"] == '2'){
                 $sub_array[] = '<button id="ClearTable" class="btn btn-warning btn-fill" data-id="'.$row["GuestID"].'>">ยืนยันแล้ว</button>';
                }elseif($row["GuestStatus"] == '3'){
                 $sub_array[] = '<button class="btn btn-danger btn-fill">เคลียร์โต๊ะแล้ว</button></td>';
                };
         };
                

         //แสดงปุ่ม
            
         if($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Admin'){
         $sub_array[] = '<a target ="_blank" id="Print" href=PrintGuest.php?GuestID='.base64url_encode($row["GuestID"]).' style="color:#000000">
                         <i class="ti-printer" style="font-size: 1.3em;"></i></a>&emsp;
                         
                         <a data-toggle="modal" data-target="#userModal" id="update" data-id='.$row["GuestID"].' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-search update" id="update" style="font-size: 1.3em;" ></i></a>&emsp;
                         
                         <a data-toggle="modal" id="DeleteGuest" data-id='.base64url_encode($row["GuestID"]).' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-eraser" style="font-size: 1.3em;" ></i></a>&emsp;</td>';
             
         }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
         $sub_array[] = '<a target ="_blank" id="Print" href=PrintGuest.php?GuestID='.base64url_encode($row["GuestID"]).' style="color:#000000">
                         <i class="ti-printer" style="font-size: 1.3em;"></i></a>&emsp;
                         
                         <a data-toggle="modal" data-target="#userModal" id="update" data-id='.$row["GuestID"].' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-search update" id="update" style="font-size: 1.3em;" ></i></a>&emsp;
                         
                         <a data-toggle="modal" id="DeleteGuest" data-id='.base64url_encode($row["GuestID"]).' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-eraser" style="font-size: 1.3em;" ></i></a>&emsp;</td>';
             
        }elseif($_SESSION["UserResName"]==$row["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
        $sub_array[] = '<a target ="_blank" id="Print" href=PrintGuest.php?GuestID='.base64url_encode($row["GuestID"]).' style="color:#000000">
                         <i class="ti-printer" style="font-size: 1.3em;"></i></a>&emsp;
                         
                         <a data-toggle="modal" data-target="#userModal" id="update" data-id='.$row["GuestID"].' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-search update" id="update" style="font-size: 1.3em;" ></i></a>&emsp;
                         
                         <a data-toggle="modal" id="DeleteGuest" data-id='.base64url_encode($row["GuestID"]).' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-eraser" style="font-size: 1.3em;" ></i></a>&emsp;</td>';
        
        }elseif($_SESSION["UserResName"]!=$row["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
        $sub_array[] = '<a target ="_blank" id="Print" href=PrintGuest.php?GuestID='.base64url_encode($row["GuestID"]).' style="color:#000000">
                         <i class="ti-printer" style="font-size: 1.3em;"></i></a>&emsp;
                         
                         <a data-toggle="modal" data-target="#userModal3" id="update3" data-id='.$row["GuestID"].' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-search update" id="update3" style="font-size: 1.3em;" ></i></a>&emsp;</td>';
             
        }elseif($_SESSION["UserResName"]==$row["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
        $sub_array[] = '<a target ="_blank" id="Print" href=PrintGuest.php?GuestID='.base64url_encode($row["GuestID"]).' style="color:#000000">
                         <i class="ti-printer" style="font-size: 1.3em;"></i></a>&emsp;
                         
                         <a data-toggle="modal" data-target="#userModal" id="update" data-id='.$row["GuestID"].' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-search update" id="update" style="font-size: 1.3em;" ></i></a>&emsp;</td>';
        
        }elseif($_SESSION["UserResName"]!=$row["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
        $sub_array[] = '<a target ="_blank" id="Print" href=PrintGuest.php?GuestID='.base64url_encode($row["GuestID"]).' style="color:#000000">
                         <i class="ti-printer" style="font-size: 1.3em;"></i></a>&emsp;
                         
                         <a data-toggle="modal" data-target="#userModal" id="update" data-id='.$row["GuestID"].' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-search update" id="update" style="font-size: 1.3em;" ></i></a>&emsp;</td>';
        
        }elseif($_SESSION["UserResName"]==$row["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
        $sub_array[] = '<a target ="_blank" id="Print" href=PrintGuest.php?GuestID='.base64url_encode($row["GuestID"]).' style="color:#000000">
                         <i class="ti-printer" style="font-size: 1.3em;"></i></a>&emsp;
                         
                         <a data-toggle="modal" data-target="#userModal" id="update" data-id='.$row["GuestID"].' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-search update" id="update" style="font-size: 1.3em;" ></i></a>&emsp;</td>';
            
        }elseif($_SESSION["UserResName"]!=$row["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
        $sub_array[] = '<a target ="_blank" id="Print" href=PrintGuest.php?GuestID='.base64url_encode($row["GuestID"]).' style="color:#000000">
                         <i class="ti-printer" style="font-size: 1.3em;"></i></a>&emsp;
                         
                         <a data-toggle="modal" data-target="#userModal" id="update" data-id='.$row["GuestID"].' 
                         href="javascript:void(0)" style="color:#000000"><i class="ti-search update" id="update" style="font-size: 1.3em;" ></i></a>&emsp;</td>';
        };
            
        //จบแสดงปุ่ม

         $data[] = $sub_array;
         $item++;
        }

        function get_all_data($conn)
        {
         $query = "SELECT * FROM tablemantraplan INNER JOIN bookingres ON tablemantraplan.TableID = bookingres.TableID INNER JOIN guest ON guest.GuestID = bookingres.GuestID GROUP BY guest.GuestID ";
         $result = mysqli_query($conn, $query);
         return mysqli_num_rows($result);
        }

        $output = array(
         "draw"    => intval($_POST["draw"]),
         "recordsTotal"  =>  get_all_data($conn),
         "recordsFiltered" => $number_filter_row,
         "data"    => $data
        );

        echo json_encode($output);

?>

