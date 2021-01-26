                    <tr>
                        <th style="vertical-align: initial; width: 45%;"><label>ชื่อบริษัท</label></th>
                        <td><input type="text" name="GuestCompany" id="GuestCompany" class="form-control border-input" /></td>
                    </tr>
                    <tr>
                        <th><label>ชื่อ - นามสกุล (ลูกค้า)</label></th>
                        <td><input type="text" name="GuestName" id="GuestName" class="form-control border-input" /></td>
                    </tr>
                    <tr>
                        <th><label>อีเมล</label></th>
                        <td><input type="text" name="GuestEmail" id="GuestEmail" class="form-control border-input" /></td>
                    </tr>
                    <tr>
                        <th style="vertical-align: initial;"><label>เบอร์โทรติดต่อ / เบอร์โทรสำรอง</label></th>
                        <td><input type="text" name="GuestTel" id="GuestTel" class="form-control border-input" />
                        <input type="text" name="GuestTelBackup" id="GuestTelBackup" class="form-control border-input" /></td>
                    </tr>
                    <tr>
                        <th><label>Line ID</label></th>
                        <td><input type="text" name="GuestLine" id="GuestLine" class="form-control border-input " /></td>
                    </tr>
                    <tr>
                        <th style="vertical-align: initial;"><label>วัน เวลาที่เข้าร้าน</label></th>
                        <td><input type="date" name="DataIn" id="DataIn" class="form-control border-input " />
                        <input type="time" name="TimeIn" id="TimeIn" class="form-control border-input " /></td>
                    </tr>
                    <tr>
                        <th><label>จำนวนลูกค้า</label></th>
                        <td><input type="text" name="GuestNum" id="GuestNum" class="form-control border-input " /></td>
                    </tr>
                    <tr>
                        <th><label>จองเมื่อวันที่</label></th>
                        <td><input style="background-color: #fffcf5;" type="text" name="DateRecode" id="DateRecode" class="form-control border-input " READONLY/></td>
                    </tr>
                    <tr>
                        <th><label>บันทึกข้อมูลโดย : </label></th>
                        <td><input  style="background-color: #fffcf5;" type="text" name="RecordBy" id="RecordBy" class="form-control border-input " READONLY/></td>
                    </tr>

                    <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                 <div class="modal-dialog"> 
                                      <div class="modal-content"> 

                                           <div class="modal-header"> 
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                <h4 class="modal-title" style="font-family: 'Trirong', serif;">
                                                    <i class="ti-info-alt"></i> ข้อมูลลูกค้า
                                                </h4> 
                                           </div> 
                                           <div class="modal-body"> 
                                            <div class="modal-footer"> 
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                                            </div> 

                                     </div> 
                                  </div>
                    </div><!-- /.modal --> 
    
    
