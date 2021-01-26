                                                <?php
                                                if($result["TableStatus"] == '1' && $result["BKStatus"] == '3' && $result["BKStatus"] == '4' && $result["BKStatus"] == '5' && $result["BKStatus"] == '6' && $result["BKStatus"] == '7'){
                                                    
                                                        if($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Admin'){
                                                        echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                        }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
                                                        echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                                        echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                                        echo '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                            
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                                        echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                                        echo '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                            
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                                        echo '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                       
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                                        echo '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        }
                                                            
                                                    }elseif($result["TableStatus"] == '2'){
                                                        if($_SESSION["Username"] == $result["UserRecord"]){
                                                            echo '<a href='.$_SESSION["ZoneName"].'.php?action=delete&id='.base64url_encode($result["TableID"]).'><img src="'.$PathIcon.$result["TableIconMR"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        }else{
                                                             echo '<img src="'.$PathIcon.$result["TableIconMR"].'" style="width: 30px;"></br>'.$NewVar;
                                                        }
                                                    
                                                    }elseif($result["BKStatus"] == '3'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconReserved"].'" style="width: 30px;"></br></a>'.$NewVar;
				                                
                                                    }elseif($result["BKStatus"] == '4'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconFood"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '5'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconBlue"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '6'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconYellow"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '7'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableIconMagenta"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                    }elseif($result["BKStatus"] == '8'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableBlueVIP"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '9'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableYellowVIP"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '10'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableMagentaVIP"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                
                                                    }elseif($result["BKStatus"] == '11'){
                                                    echo '<a data-toggle="modal" data-target="#view-modal" id="getUser" data-id="'.$result["TableID"].'" href=""><img src="'.$PathIcon.$result["TableRedVIP"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                    }else{
                                                        
                                                        if($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Admin'){
                                                        echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                        }elseif($_SESSION["UserResName"]=='All' && $_SESSION["Userlevel"] == 'Editor'){
                                                        echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                                        echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Admin'){
                                                        echo '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                            
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                                        echo '<a href='.$_SESSION["ZoneName"].'.php?TableID='.base64url_encode($result["TableID"]).'&TableNumber='.base64url_encode($result["TableNumber"]).'&Username='.base64url_encode($_SESSION["Username"]).'><img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Editor'){
                                                        echo '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                            
                                                        }elseif($_SESSION["UserResName"]==$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                                        echo '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                       
                                                        }elseif($_SESSION["UserResName"]!=$result["ResName"] && $_SESSION["Userlevel"] == 'Viewer'){
                                                        echo '<img src="'.$PathIcon.$result["TableIcon"].'" style="width: 30px;"></br></a>'.$NewVar;
                                                        }
                                                    }
                                                    ?>