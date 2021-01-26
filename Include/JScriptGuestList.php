
<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="ti-pencil-alt"></i> แก้ไขข้อมูลลูกค้า</h4>
				</div>
				<div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                    <tr>
                       <div id="modal-loader" style="display: none; text-align: center;">
                       	   </div>
                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>
                        </div> 
                    </tr>
                        <?php require_once("Include/ReadEdit.php"); ?>
                    </table>
				</div>
                </div>
				<div class="modal-footer">
					<input type="hidden" name="GuestID" id="GuestID" />
                    <input type="hidden" name="TimeRange" id="TimeRange" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="ตกลง" />
					<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
				</div>
			</div>
		</form>
	</div>
</div>


<div id="userModal2" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form2" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="ti-pencil-alt"></i> แก้ไขข้อมูลลูกค้า</h4>
				</div>
				<div class="modal-body">
                    <p style='font-size:18px;'; >ยืนยันอัพเดทสถานะการจองโต๊ะลูกค้า ?</br></br>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="GuestID2" id="GuestID2" />
					<input type="hidden" name="operation2" id="operation2" />
					<input type="submit" name="action2" id="action" class="btn btn-success" value="ตกลง" />
					<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div id="userModalClear" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="FormClear" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="ti-pencil-alt"></i> แก้ไขข้อมูลลูกค้า</h4>
				</div>
				<div class="modal-body">
                    <p style='font-size:18px;'; >ยืนยันการเคลียร์โต๊ะลูกค้า ?</br></br>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="GuestID3" id="GuestID3" />
					<input type="hidden" name="operation3" id="operation3" />
					<input type="submit" name="action4" id="action4" class="btn btn-success" value="ตกลง" />
					<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
				</div>
			</div>
		</form>
	</div>
</div>


<div id="userModal3" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form3" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title3"><i class="ti-pencil-alt"></i> แก้ไขข้อมูลลูกค้า</h4>
				</div>
				<div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                    <tr>
                       <div id="modal-loader3" style="display: none; text-align: center;">
                       	   </div>
                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content3"></div>
                        </div> 
                    </tr>
                       <?php require_once("Include/ReadOnly.php"); ?>
                    </table>
				</div>
                </div>
				<div class="modal-footer">
					<input type="hidden" name="GuestID" id="GuestID" />
                    <input type="hidden" name="TimeRange" id="TimeRange" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action3" id="action3" class="btn btn-success" value="ตกลง" />
					<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
				</div>
			</div>
		</form>
	</div>
</div>


        <script src="js/bootbox.min.js"></script>	
        <script type="text/javascript" language="javascript" >
        
          $(document).ready(function(){
          $('.input-daterange').datepicker({
          todayBtn:'linked',
          format: "yyyy-mm-dd",
          });
              
         load_data();
         function load_data(is_category, SelectDate='', category=''){
          var dataTable = $('#product_data').DataTable({

           "processing":true,
           "serverSide":true,
           "order":[],
           "ajax":{
            url:"FetchDataGuest.php",
            type:"POST",
            data:{is_category:is_category, SelectDate:SelectDate,category:category}
           },
           "columnDefs":[
            {
             "targets":[2],
             "orderable":false,
            },
           ],
            "language": {
           "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
            "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
            "sInfoFiltered":   "",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "แสดง _MENU_ รายการ",
            "sLoadingRecords": "กำลังโหลดข้อมูล...",
            "sProcessing":     "กำลังดำเนินการ...",
            "sSearch":         "ค้นหา : ",
            "sZeroRecords":    "ไม่พบข้อมูล",
            "oPaginate": {
                "sFirst":    "หน้าแรก",
            "sPrevious": "ก่อนหน้า",
                "sNext":     "ถัดไป",
            "sLast":     "หน้าสุดท้าย"
            },
            "oAria": {
                "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
            "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
            }
          }
          });
         
        $(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var GuestCompany = $('#GuestCompany').val();
		var GuestName = $('#GuestName').val();
        var GuestEmail = $('#GuestEmail').val();
		var GuestTel = $('#GuestTel').val();
        var GuestTelBackup = $('#GuestTelBackup').val();
		var GuestLine = $('#GuestLine').val();
        var DataIn = $('#DataIn').val();
		var TimeIn = $('#TimeIn').val();
        var TimeRange = $('#TimeRange').val();   
        var GuestNum = $('#GuestNum').val();
		var DateRecode = $('#DateRecode').val();
        var RecordBy = $('#RecordBy').val();
        var MenuName1 = $('#MenuName1').val();
        var MenuName2 = $('#MenuName2').val();
        var MenuName3 = $('#MenuName3').val();
        var MenuName4 = $('#MenuName4').val();
        var MenuName5 = $('#MenuName5').val();
        var MenuName6 = $('#MenuName6').val();
        var MenuName7 = $('#MenuName7').val();
        var MenuName8 = $('#MenuName8').val();
        var MenuName9 = $('#MenuName9').val();
        var MenuName10 = $('#MenuName10').val();
        var MenuOther = $('#MenuOther').val();
		
			$.ajax({
				url:"EditDataGuest.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		
	});
	
	$(document).on('click', '#update', function(){
		var GuestID = $(this).attr("data-id");
		$.ajax({
			url:"FetchGuestSingle.php",
			method:"POST",
			data:{GuestID:GuestID},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#GuestCompany').val(data.GuestCompany);
				$('#GuestName').val(data.GuestName);
                $('#GuestEmail').val(data.GuestEmail);
				$('#GuestTel').val(data.GuestTel);
                $('#GuestTelBackup').val(data.GuestTelBackup);
				$('#GuestLine').val(data.GuestLine);
                $('#DataIn').val(data.DataIn);
				$('#TimeIn').val(data.TimeIn);
                $('#TimeRange').val(data.TimeRange);
                $('#GuestNum').val(data.GuestNum);
				$('#DateRecode').val(data.DateRecode);
                $('#RecordBy').val(data.RecordBy);
                $('#MenuName1').val(data.MenuName1);
                $('#MenuName2').val(data.MenuName2);
                $('#MenuName3').val(data.MenuName3);
                $('#MenuName4').val(data.MenuName4);
                $('#MenuName5').val(data.MenuName5);
                $('#MenuName6').val(data.MenuName6);
                $('#MenuName7').val(data.MenuName7);
                $('#MenuName8').val(data.MenuName8);
                $('#MenuName9').val(data.MenuName9);
                $('#MenuName10').val(data.MenuName10);
                $('#MenuOther').val(data.MenuOther);
                
				$('.modal-title').text("แก้ไขข้อมูลลูกค้า");
				$('#GuestID').val(GuestID);
				$('#action').val("ตกลง");
				$('#operation').val("Edit");
			}
		})
	});
             
    $(document).on('submit', '#user_form3', function(event){
		event.preventDefault();
		var GuestCompany = $('#GuestCompany3').val();
		var GuestName = $('#GuestName3').val();
        var GuestEmail = $('#GuestEmail3').val();
		var GuestTel = $('#GuestTel3').val();
        var GuestTelBackup = $('#GuestTelBackup3').val();
		var GuestLine = $('#GuestLine3').val();
        var DataIn = $('#DataIn3').val();
		var TimeIn = $('#TimeIn3').val();
        var TimeRange = $('#TimeRange3').val();   
        var GuestNum = $('#GuestNum3').val();
		var DateRecode = $('#DateRecode3').val();
        var RecordBy = $('#RecordBy3').val();
        var MenuName1 = $('#MenuName1').val();
        var MenuName2 = $('#MenuName2').val();
        var MenuName3 = $('#MenuName3').val();
        var MenuName4 = $('#MenuName4').val();
        var MenuName5 = $('#MenuName5').val();
        var MenuName6 = $('#MenuName6').val();
        var MenuName7 = $('#MenuName7').val();
        var MenuName8 = $('#MenuName8').val();
        var MenuName9 = $('#MenuName9').val();
        var MenuName10 = $('#MenuName10').val();
        var MenuOther = $('#MenuOther').val();
		
			$.ajax({
				url:"EditDataGuest.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					$('#user_form3')[0].reset();
					$('#userModal3').modal('hide');
					dataTable.ajax.reload();
				}
			});
		
	});
	
	$(document).on('click', '#update3', function(){
		var GuestID = $(this).attr("data-id");
		$.ajax({
			url:"FetchGuestSingle.php",
			method:"POST",
			data:{GuestID:GuestID},
			dataType:"json",
			success:function(data)
			{
				$('#userModal3').modal('show');
				$('#GuestCompany3').val(data.GuestCompany);
				$('#GuestName3').val(data.GuestName);
                $('#GuestEmail3').val(data.GuestEmail);
				$('#GuestTel3').val(data.GuestTel);
                $('#GuestTelBackup3').val(data.GuestTelBackup);
				$('#GuestLine3').val(data.GuestLine);
                $('#DataIn3').val(data.DataIn);
				$('#TimeIn3').val(data.TimeIn);
                $('#TimeRange3').val(data.TimeRange);
                $('#GuestNum3').val(data.GuestNum);
				$('#DateRecode3').val(data.DateRecode);
                $('#RecordBy3').val(data.RecordBy);
                $('#MenuName1').val(data.MenuName1);
                $('#MenuName2').val(data.MenuName2);
                $('#MenuName3').val(data.MenuName3);
                $('#MenuName4').val(data.MenuName4);
                $('#MenuName5').val(data.MenuName5);
                $('#MenuName6').val(data.MenuName6);
                $('#MenuName7').val(data.MenuName7);
                $('#MenuName8').val(data.MenuName8);
                $('#MenuName9').val(data.MenuName9);
                $('#MenuName10').val(data.MenuName10);
                $('#MenuOther').val(data.MenuOther);
                
				$('.modal-title3').text("แก้ไขข้อมูลลูกค้า");
				$('#GuestID').val(GuestID);
				$('#action3').val("ตกลง");
				$('#operation').val("Edit");
			}
		})
	});
             
     $(document).on('submit', '#user_form2', function(event){
		event.preventDefault();
		
			$.ajax({
				url:"EditDataGuest.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					$('#user_form2')[0].reset();
					$('#userModal2').modal('hide');
					dataTable.ajax.reload();
				}
			});
		
	});
             
     $(document).on('submit', '#FormClear', function(event){
		event.preventDefault();
		
			$.ajax({
				url:"EditDataGuest.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					$('#FormClear')[0].reset();
					$('#userModalClear').modal('hide');
					dataTable.ajax.reload();
				}
			});
		
	});
	
	$(document).on('click', '#UpST', function(){
		var GuestID = $(this).attr("data-id");
		$.ajax({
			url:"FetchGuestSingle.php",
			method:"POST",
			data:{GuestID:GuestID},
			dataType:"json",
			success:function(data)
			{
				$('#userModal2').modal('show');
				$('.modal-title').text("ยืนยัน");
				$('#GuestID2').val(GuestID);
				$('#action2').val("ตกลง");
				$('#operation2').val("Edit");
			}
		})
	});
             
    $(document).on('click', '#ClearTable', function(){
		var GuestID = $(this).attr("data-id");
		$.ajax({
			url:"FetchGuestSingle.php",
			method:"POST",
			data:{GuestID:GuestID},
			dataType:"json",
			success:function(data)
			{
				$('#userModalClear').modal('show');
				$('.modal-title').text("ยืนยัน");
				$('#GuestID3').val(GuestID);
				$('#action4').val("ตกลง");
				$('#operation3').val("Edit");
			}
		})
	});

              
         $(document).on('click', '#search', function(){
          var category = $('#category').val();
          var SelectDate = $('#SelectDate').val();
          $('#product_data').DataTable().destroy();
          if(category != '' && SelectDate != ''){
           load_data(category,SelectDate);
          
          }
            else
          {
           load_data(bootbox.alert('<p style="text-align: center;"><br><br>กรุณาเลือกวันที่ และร้านอาหาร ที่ต้องการแสดงข้อมูลก่อนกดค้นหา</br></br></p>'));
          }
         });
       
	$(document).on('click', '#update', function(e){
		e.preventDefault();
		var GuestID = $(this).attr("data-id");   // it will get id of clicked row
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		$.ajax({
			url: 'GetGuestProfile.php',
			type: 'POST',
			data:{GuestID:GuestID},
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('Something went wrong, Please try again...');
			$('#modal-loader').hide();
		});
	});
             
    	$(document).on('click', '#update3', function(e){
		e.preventDefault();
		var GuestID = $(this).attr("data-id");   // it will get id of clicked row
		$('#dynamic-content3').html(''); // leave it blank before ajax call
		$('#modal-loader3').show();      // load ajax loader
		$.ajax({
			url: 'GetGuestProfile.php',
			type: 'POST',
			data:{GuestID:GuestID},
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content3').html('');    
			$('#dynamic-content3').html(data); // load response 
			$('#modal-loader3').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content3').html('Something went wrong, Please try again...');
			$('#modal-loader3').hide();
		});
	});
      }
	});
</script>
    <script>
	$(document).ready(function(){
        $(document).on('click', '#DeleteGuest', function(e){
			e.preventDefault();
			var pid = $(this).attr('data-id');
			var parent = $(this).parent("td").parent("tr");
			
			bootbox.dialog({
			  message: "<p style='font-size:18px;'; >ยืนยันลบข้อมูลการจองโต๊ะลูกค้า ?</br></br>",
			  title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
			  buttons: {
				
				danger: {
				  label: "Delete!",
				  className: "btn-danger",
				  callback: function() {
					  
					  $.ajax({
						  type: 'POST',
						  url: 'DeleteGuest.php',
						  data: 'DeleteGuest='+pid
					  })
					  .done(function(response){
						  bootbox.alert(response);
						  parent.fadeOut('slow');
					  })
					  .fail(function(){
						  bootbox.alert('Something Went Wrog ....');
					  })
				  }
				},success: {
				  label: "Cancel",
				  className: "btn-success",
				  callback: function() {
					 $('.bootbox').modal('hide');
				  }
			  }
				}
			});
		});
	});
</script>
    