<th style="vertical-align: initial; width: 45%;">หมายเลขโต๊ะ</th>
				<th> 
                    <?php 
                    $setColumn=3; 
                    $ColumnStart=1; 
                    
                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    while($result2 = mysqli_fetch_array($query,MYSQLI_ASSOC))
                    {?>
                    <?php if ($result2["ResName"]=='Loft') { ?>
                    โต๊ะ : <p class="GetGuestProfile" contenteditable="true" onBlur="saveChangeTable2(this,'TableID','<?php echo $result2["BookingID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $NewVar = substr($result2["TableNumber"], 3, 3); ?>
                    <?php }else{ ?>
                    โต๊ะ : <p class="GetGuestProfile" contenteditable="true" onBlur="saveChangeTable(this,'TableID','<?php echo $result2["BookingID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result2["TableNumber"]; ?> 
                    <?php } ?></p>
                    <?php
                    if($ColumnStart==$setColumn){
                    echo '<br>';
                    $ColumnStart=0;
                    }
                    $ColumnStart++;
                    } ?>
                
                </th>
            <tr>
				<th style="vertical-align: initial;">รายการอาหาร</th>
				<td> <?php if(!empty($result["MenuName1"])){ ?>
                     รายการ 1. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName1','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName1"]; ?></p><br>
                     รายการ 2. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName2','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName2"]; ?></p><br>
                     รายการ 3. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName3','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName3"]; ?></p><br>
                     รายการ 4. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName4','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName4"]; ?></p><br>
                     รายการ 5. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName5','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName5"]; ?></p><br>
                     รายการ 6. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName6','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName6"]; ?></p><br>
                     <?php if(!empty($result["MenuName7"])){ ?>
                     รายการ 7. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName7','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName7"]; ?></p><br><?php }?>
                     <?php if(!empty($result["MenuName8"])){ ?>
                     รายการ 8. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName8','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName8"]; ?></p><br><?php }?>
                     <?php if(!empty($result["MenuName9"])){ ?>
                     รายการ 9. <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName9','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName9"]; ?></p><br><?php }?><br>
                     <?php if(!empty($result["MenuName10"])){ ?>
                     เพิ่มเติม <p class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuName10','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo $result["MenuName10"]; ?></p><br><?php }?></td>
                <?php } ?>
			</tr>
            <tr>
				<th style="vertical-align: initial;" >รายการอาหารอื่นๆ</th>
				<td style="vertical-align: initial; width: 55%;" class="GetGuestProfile" contenteditable="true" onBlur="saveEditTable(this,'MenuOther','<?php echo $result["BookingID"]; ?>','<?php echo $result["GuestID"]; ?>')" onClick="showEdit(this);" style="display: inline;"><?php echo nl2br($result['MenuOther']); ?></td>
			</tr>