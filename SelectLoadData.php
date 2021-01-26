<?php  
require_once("connection.php");
 $output = '';  
 if(isset($_POST["ListPrice"]))  
 {  
        $sql = "SELECT ListTopic FROM listmenu WHERE ListPrice = '".$_POST["ListPrice"]."' GROUP BY ListTopic";
        $result = mysqli_query($conn, $sql);  
        while($row = mysqli_fetch_array($result))  
        {  
            $output .= '<select name="MenuName'.$row["ListTopic"].'" id="MenuName" class="form-control border-input">  '; 
            $output .= '<option value="">-- เลือกรายการอาหารที่ '.$row["ListTopic"].' --</option>';
            
            $sql2 = "SELECT MenuName FROM listmenu WHERE ListTopic = '".$row["ListTopic"]."' and ListPrice ='".$_POST["ListPrice"]."'";
            $result2 = mysqli_query($conn, $sql2);
            while($row2 = mysqli_fetch_array($result2))
            {
            $output .= '<option value="'.$row2["MenuName"].'">'.$row2["MenuName"].'</option>';
            }
            $output .= '</select></br>';
            $output .= '<input type="hidden" name="BKStatus" id="BKStatus" value="4">'; 
        }  
      echo $output;  
 }  
 ?>  