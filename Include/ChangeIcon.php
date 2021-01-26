                                    <h5 class="title" style="color: red; font-weight: 600; text-align: center;">กำลังเลือกเปลี่ยนสีไอคอนโต๊ะลูกค้า 
                                    <p style="color: black; display: inline-block;">คุณ : <?php echo base64url_decode($_SESSION["GuestNameCI"]);?> <?php echo base64url_decode($_SESSION["GuestCompanyCI"]);?></p>
                                        <br><p style="color: black; display: inline-block;"> เลือกสีไอคอนโต๊ะที่ต้องการ<br></p></h5>
                                            <div class="div2" style="text-align: center;">
                                            <table width="100%" border="0" style="margin-left: -20px;">
                                              <?php if($_SESSION["MenuName1"]=='' && $_SESSION["MenuOther"]==''){?>
                                              <tr>
                                                <td><div class="radio div2" >
                                              <label><input type="radio" name="SelectColor" value="BlueVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleBlueVIP.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2" >
                                              <label><input type="radio" name="SelectColor" value="YellowVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleYellowVIP.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2" >
                                              <label><input type="radio" name="SelectColor" value="MagentaVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleMagentaVIP.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2" >
                                              <label><input type="radio" name="SelectColor" value="RedVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleVIP.png" width="35px" style="float: left;">
                                              </label>
                                            </div></td>
                                              </tr><?php }else{?>
                                            <tr>
                                                <td><div class="radio div2">
                                              <label><input type="radio" name="SelectColor" value="Blue" />
                                                <img src="images/MantraPlan/TableIcon/CircleBlueFood.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2">
                                              <label><input type="radio" name="SelectColor" value="Yellow" />
                                                <img src="images/MantraPlan/TableIcon/CircleYellowFood.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2">
                                              <label><input type="radio" name="SelectColor" value="Magenta" />
                                                <img src="images/MantraPlan/TableIcon/CircleMagentaFood.png" width="35px" style="float: left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2">
                                              <label><input type="radio" name="SelectColor" value="Red" />
                                                <img src="images/MantraPlan/TableIcon/CircleReservedFood.png" width="35px" style="float: left;">
                                              </label>
                                            </div></td>
                                              </tr>  
                                            <tr>
                                                <td><div class="radio div2" >
                                              <label><input type="radio" name="SelectColor" value="BlueVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleBlueVIP.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2" >
                                              <label><input type="radio" name="SelectColor" value="YellowVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleYellowVIP.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2" >
                                              <label><input type="radio" name="SelectColor" value="MagentaVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleMagentaVIP.png" width="35px" style="float:left;">
                                              </label>
                                            </div></td>
                                                <td><div class="radio div2" >
                                              <label><input type="radio" name="SelectColor" value="RedVIP" />
                                                <img src="images/MantraPlan/TableIcon/CircleVIP.png" width="35px" style="float: left;">
                                              </label>
                                            </div></td>
                                              </tr><?php }?>
                                            </table> 
                                        <input class="btn btn-success" type="button" value="ยืนยัน"  onClick="JavaScript:fncSubmit('page7')">
                                        <input class="btn btn-danger" type="button" value="ยกเลิก"  onClick="JavaScript:fncSubmit('page5')">
                                        </div> 