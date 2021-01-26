<?php
// $conn= mysqli_connect("localhost","kgroupre_Admin","kgroup1234","kgroupre_kgrouprestaurant") or die("Error: " . mysqli_error($conn));
$conn= mysqli_connect("localhost","","","kgroupre_kgrouprestaurant") or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' "); 
date_default_timezone_set("Asia/Bangkok");
?>
<?php
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}
?>
<?php

        // แปลงวันที่แบบสากล เป็นแบบไทย
        $thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
        $thai_month_arr=array(
         "0"=>"",
         "1"=>"มกราคม",
         "2"=>"กุมภาพันธ์",
         "3"=>"มีนาคม",
         "4"=>"เมษายน",
         "5"=>"พฤษภาคม",
         "6"=>"มิถุนายน", 
         "7"=>"กรกฎาคม",
         "8"=>"สิงหาคม",
         "9"=>"กันยายน",
         "10"=>"ตุลาคม",
         "11"=>"พฤศจิกายน",
         "12"=>"ธันวาคม"     
        );
        function ThaiDate($time){
         global $thai_day_arr,$thai_month_arr;
         $thai_date_return = "วัน".$thai_day_arr[date("w",$time)];
         $thai_date_return.= date(" ที่ j",$time);
         $thai_date_return.= " ".$thai_month_arr[date("n",$time)];
         $thai_date_return.= " พ.ศ. ".(date("Y",$time)+543);
         //$thai_date_return.= "  ".date("H:i",$time)." น.";
         return $thai_date_return;
        }
            //$dt1=strtotime($result["DataIn"]);  //กำหนดตัวแปล
            //echo ThaiDate($dt1); //การแสดงผล

?>
