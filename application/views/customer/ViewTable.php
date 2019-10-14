<div class="well">
	<div class="row">
		<div class="col-md-12">
			<div style="text-align: center;padding: 15px;"><h3>List Customer</h3></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				<label>Filtering</label>
				<select class="form-control Filtering">
					<option value="" selected>All</option>
					<option value="-1">Day of Expire -1</option>
					<option value="0">Day of Expire is today</option>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table" id = "tbl_client">
					<thead>
						<tr>
							<th style="width: 5%;text-align: left;">No</th>
							<th style = "width: 20%;text-align: left;">Username</th>
							<th style = "width: 20%;text-align: left;">Pass</th>
							<th style = "width: 10%;text-align: left;">Phone</th>
							<th style = "width: 10%;text-align: left;">Email</th>
							<th style = "width: 5%;text-align: left;">Device</th>
							<th style = "width: 10%;text-align: left;">Exp</th>
							<th style = "width: 5%;text-align: left;">Left</th>
							<th style = "width: 15%;text-align: left;">Action</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				<br/>
				<p style="color: red">* Yellow : Day of Expire -1</p>
				<p style="color: red">* Red : Day of Expire is today</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var AppData = {
		LoadData : function()
		{
             var recordTable = $('#tbl_client').DataTable({	
                 "processing": true,
                 "serverSide": false,
                 "pageLength": 10,
                 "ajax":{
                     url : base_url_js+"customer/action", // json datasource
                     ordering : false,
                     type: "post",  // method  , by default get
                     // data : {token : token} 
                     data: function(token){
                               // Read values
	                   			var Filtering = $('.Filtering option:selected').val();
	                   			var data = {
	                                   action : 'read',
	                                   Filtering : Filtering,
	                               };

                               // Append to data
                               var token = 
                               token.token = jwt_encode(data,'UAP)(*');
                     }                                   
                 },
                   'columnDefs': [
                      {
                         'targets': 0,
                         'searchable': false,
                         'orderable': false,
                         'className': 'dt-body-center',
                      },
                          {
                         'targets': 8,
                         'searchable': false,
                         'orderable': false,
                         'className': 'dt-body-center',
                         'render': function (data, type, full, meta){
                             var btnAction = '<div class="btn-group">' +
                                 '  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                                 '    <i class="fa fa-pencil"></i> <span class="caret"></span>' +
                                 '  </button>' +
                                 '  <ul class="dropdown-menu" style="min-width:50px !important;">' +
                                 '    <li><a href="javascript:void(0);" class="btnEdit" data-id="'+full[10]+'" data = "'+full[11]+'"><i class="fa fa fa-edit"></i></a></li>' +
                                 '    <li role="separator" class="divider"></li>' +
                                 '    <li><a href="javascript:void(0);" class="btnRemove" data-id="'+full[10]+'"><i class="fa fa fa-trash"></i></a></li>' +
                                 '    <li><a href="javascript:void(0);" class="btnSendEmail" data-id="'+full[10]+'"><i class="fa fa fa-envelope"></i></a></li>' +
                                 '  </ul>' +
                                 '</div>';
                             return btnAction;
                         }
                      },
                      {
                         'targets': 7,
                         'searchable': false,
                         'orderable': true,
                         'className': 'dt-body-center',
                         'render': function (data, type, full, meta){
                             return full[9];
                         }
                      },
                   ],
                 'createdRow': function( row, data, dataIndex ) {
                     if (data[9] == -1) {
                     	$( row ).attr('style','background-color:yellow');
                     } 

                     if (data[9] == 0) {
                     	$( row ).attr('style','background-color:red');
                     }    
                 },
                 "order": [[ 7, "desc" ]],
                 dom: 'l<"toolbar">frtip',
                 initComplete: function(){
                   $('select[name="tbl_client_length"]').attr('class','form-control');
                   // $('input[type="search"]').attr('class','form-control');
                }  
             });

             recordTable.on( 'order.dt search.dt', function () {
             		        recordTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
             		            cell.innerHTML = i+1;
             		        } );
             		    } ).draw();

             oTable = recordTable;
		},

		DeleteData : function(action='delete',ID){
        	if (confirm('Are you sure ?')) {
	            var dataform = {
	                ID : ID,
	                action : action,
	            };
	            var token = jwt_encode(dataform,"UAP)(*");
	            var url = base_url_js + "customer/action";
	            $.post(url,{ token:token },function (resultJson) {
	            	    
		    	}).done(function(resultJson) {
		    	    AppForm.LoadSetDefault();
		    	    oTable.ajax.reload( null, false );
		    	    toastr.success('Remove success');
		    	}).fail(function() {
		    	    toastr.error("Connection Error, Please try again", 'Error!!');
		    	}).always(function() {

		    	}); 
        	}
		}

	};

	$(document).ready(function(){
		AppData.LoadData();
	});

	$(document).off('click', '.btnRemove').on('click', '.btnRemove',function(e) {
		var ID = $(this).attr('data-id');
		var action = 'delete';
		AppData.DeleteData(action,ID);
	})

	$(document).off('click', '.btnRemove').on('click', '.btnRemove',function(e) {
		var ID = $(this).attr('data-id');
		var action = 'delete';
		AppData.DeleteData(action,ID);
	})

	$(document).off('click', '.btnEdit').on('click', '.btnEdit',function(e) {
        var ID = $(this).attr('data-id');
        var Token = $(this).attr('data');
        var data = jwt_decode(Token);
        for(var key in data) {
        	if (key == 'Device') {
        		$(".input[name='Device'] option").filter(function() {
        		   //may want to use $.trim in here
        		   return $(this).val() == data.Device; 
        		 }).prop("selected", true);
        	}
        	else
        	{
        		$('.input[name="'+key+'"]').val(data[key]);
        	}
        }
        
        $('#btnSave').attr('action','edit');
        $('#btnSave').attr('data-id',ID);
    })

    $(document).off('change', '.Filtering').on('change', '.Filtering',function(e) {
    	oTable.ajax.reload( null, false );
    })
</script>