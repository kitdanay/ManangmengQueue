<th style="vertical-align: initial; width: 45%;">หมายเลขโต๊ะ</th>
				<th> 
                    <?php 
                    $setColumn=3; 
                    $ColumnStart=1; 
                    
                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    while($result2 = mysqli_fetch_array($query,MYSQLI_ASSOC))
                    {?>
                    <?php if ($result2["ResName"]=='Loft') { ?>
                    โต๊ะ : <?php echo $NewVar = substr($result2["TableNumber"], 3, 3); ?>&emsp;
                    <?php }else{ ?>
                    โต๊ะ : <?php echo $result2["TableNumber"]; ?>&emsp;
                    <?php } ?>
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
                     รายการ 1. <?php echo $result["MenuName1"]; ?><br>
                     รายการ 2. <?php echo $result["MenuName2"]; ?><br>
                     รายการ 3. <?php echo $result["MenuName3"]; ?><br>
                     รายการ 4. <?php echo $result["MenuName4"]; ?><br>
                     รายการ 5. <?php echo $result["MenuName5"]; ?><br>
                     รายการ 6. <?php echo $result["MenuName6"]; ?><br>
                     <?php if(!empty($result["MenuName7"])){ ?>
                     รายการ 7. <?php echo $result["MenuName7"]; ?><br><?php }?>
                     <?php if(!empty($result["MenuName8"])){ ?>
                     รายการ 8. <?php echo $result["MenuName8"]; ?><br><?php }?>
                     <?php if(!empty($result["MenuName9"])){ ?>
                     รายการ 9. <?php echo $result["MenuName9"]; ?><br><?php }?><br>
                     <?php if(!empty($result["MenuName10"])){ ?>
                     เพิ่มเติม <?php echo $result["MenuName10"]; ?><br><?php }?></td>
                <?php } ?>
			</tr>
            <tr>
				<th style="vertical-align: initial;" >รายการอาหารอื่นๆ</th>
				<td style="vertical-align: initial;" ><?php echo nl2br($result['MenuOther']); ?></td>
			</tr>