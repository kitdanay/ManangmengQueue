<?php

if(isset($_GET["TableID"]))  
 {  
     $TableID=base64url_decode($_GET["TableID"]);
     $Username=base64url_decode($_GET["Username"]);
     $query = "update tablemantraplan set TableStatus='2', UserRecord='$Username' where TableID='$TableID'";
     $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
     
           if(isset($_SESSION["shopping_cart"]))  
           {  
                $is_available = 0;  
                foreach($_SESSION["shopping_cart"] as $keys => $values)  
                {  
                     if($_SESSION["shopping_cart"][$keys]['TableID'] == base64url_decode($_GET["TableID"]))  
                     {  
                          $is_available++;  
                     }  
                }  
                if($is_available < 1)  
                {  
                     $item_array = array(  
                     'item_id'                  =>     base64url_decode($_GET["TableID"]),
                     'item_name'                =>     base64url_decode($_GET["TableNumber"])
                     );  
                     $_SESSION["shopping_cart"][] = $item_array;
                     $_SESSION['start'] = time(); 
                     $_SESSION['expire'] = $_SESSION['start'] + (10*60);
                    
                     unset($_SESSION["GetDeleteTable"]); 
                     unset($_SESSION["GetChangeIcon"]);
                     header("location:$_SESSION[ZoneName].php");
                }  
           }  
           else  
           {  
                    $item_array = array(  
                    'item_id'                   =>     base64url_decode($_GET["TableID"]),
                    'item_name'                 =>     base64url_decode($_GET["TableNumber"])
                    );  
                    $_SESSION["shopping_cart"][] = $item_array;
                    $_SESSION['start'] = time(); 
                    $_SESSION['expire'] = $_SESSION['start'] + (10*60);
               
                    unset($_SESSION["GetDeleteTable"]);
                    unset($_SESSION["GetChangeIcon"]);
                    header("location:$_SESSION[ZoneName].php");
           }  
}  
if(isset($_GET["action"]))  
 {  
     $TableID=base64url_decode($_GET["id"]);
     $query = "update tablemantraplan set TableStatus='1', UserRecord='' where TableID='$TableID'";
     $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == base64url_decode($_GET["id"]))
                {  
                     unset($_SESSION["shopping_cart"][$keys],$values["item_id"]); 
                     //header("location:$_SESSION[ZoneName].php");
                }  
           }  
      }  
 }  
?>