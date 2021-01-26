                                                <?php
                                                if($result["TableStatus"] == '1' && $result["BKStatus"] == '3' && $result["BKStatus"] == '4' && $result["BKStatus"] == '5' && $result["BKStatus"] == '6' && $result["BKStatus"] == '7'){
                                                    
                                                        if($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Admin'){
                                                        $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        
                                                        }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
                                                        $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                                        $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                                        $tmp .= '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                            
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                                        $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                                        $tmp .= '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                            
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                                        $tmp .= '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                       
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                                        $tmp .= '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        }
                                                    
                                                
                                                    }elseif($result["TableStatus"] == '2'){
                                                        if($_SESSION["Username"] == $result["UserRecord"]){
                                                            $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?action=delete&id='.base64url_encode($result["TableID"]).'><img src="'.$PathIcon.$result["TableIconMR"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        }else{
                                                             $tmp .= '<img src="'.$PathIcon.$result["TableIconMR"].'" style="width: 30px;"></br>'.$result["TableNumber"];
                                                        }
                                                    
                                                    }elseif($result["BKStatus"] == '3'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconReserved"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
				                                
                                                }elseif($result["BKStatus"] == '4'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconFood"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                
                                                }elseif($result["BKStatus"] == '5'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconBlue"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                
                                                }elseif($result["BKStatus"] == '6'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconYellow"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                    
                                                }elseif($result["BKStatus"] == '7'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconMagenta"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                    
                                                }elseif($result["BKStatus"] == '8'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableBlueVIP"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                    
                                                }elseif($result["BKStatus"] == '9'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableYellowVIP"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                    
                                                }elseif($result["BKStatus"] == '10'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableMagentaVIP"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                    
                                                }elseif($result["BKStatus"] == '11'){
                                                    $tmp .= '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableRedVIP"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                    
                                                }else{
                                                    
                                                        if($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Admin'){
                                                        $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        
                                                        }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
                                                        $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                                        $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                                        $tmp .= '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                            
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                                        $tmp .= '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                                        $tmp .= '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                            
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                                        $tmp .= '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                       
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                                        $tmp .= '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$result["TableNumber"];
                                                        }
                                                }
                                                ?>