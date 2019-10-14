<div class="thumbnail">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
	           <div class="panel-heading">
	               <h4 class="panel-title">Input</h4>
	           </div>
	           <div class="panel-body" style="min-height: 100px;">
	               <div class="form-group">
	                   <label>Username</label>
	                   <input type="text" class="form-control input" name = "Username">
	               </div>
	               <div class="form-group">
	                   <label>Password</label>
	                   <input type="text" class="form-control input" name = "Password">
	               </div>
	               <div class="form-group">
	                   <label>Phone</label>
	                   <input type="text" class="form-control input" name = "Phone">
	               </div>
	               <div class="form-group">
	                   <label>Email</label>
	                   <input type="text" class="form-control input" name = "Email">
	               </div>
	               <div class="form-group">
	                   <label>Device</label>
	                   <select class="form-control input" name = "Device"></select>
	               </div>
	               <div class="form-group">
	                   <label>Expired</label>
	                   <div class="input-group input-append date datetimepicker">
	                       <input data-format="yyyy-MM-dd" class="form-control input" type=" text" readonly="" value = "<?php echo date('Y-m-d') ?>" name = "Expired">
	                       <span class="input-group-addon add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i></span>
	                   </div>
	               </div>
	           </div>
	           <div class="panel-footer" style="text-align: right;">
	               <button class="btn btn-success" action= "add" data-id ="" id="btnSave">Save</button>
	           </div>
	       </div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var AppForm = {
		LoadSelectOPDevice : function(selected =null)
		{
			var selector = $('.input[name="Device"]');
			var OP = 4;
			var html =  '';
			for (var i = 1; i <= OP; i++) {
				var s = (selected == i) ? 'selected' : '';
				html += '<option value = "'+i+'"  '+s+'>'+i+'</option>';
			}

			selector.html(html);
		},

		LoadSetDefault : function(){
				$('input').val('');
				AppForm.LoadSelectOPDevice();
				$('.input[name="Expired"]').val('<?php echo date('Y-m-d') ?>');
				$('#btnSave').attr('action','add');
				$('#btnSave').attr('data-id','');
		},

		Loaded : function(){
			AppForm.LoadSetDefault();
			$('.datetimepicker').datetimepicker({
            	format: 'yyyy-MM-dd',autoclose: true, minView: 2,pickTime: false,
            });
		},

		SubmitData : function(action='add',ID='',selector){
			var data = {};
            $('.input').each(function(){
                var field = $(this).attr('name');
                if (field == 'Device') {
                   data.Device = $(this).find('option:selected').val();
                }
                else
                {
                    data[field] = $(this).val();
                }
            })
            // validation 
            var validation =  AppForm.validation_data(data);
            if (validation) {
            	if (confirm('Are you sure ?')) {
		            var dataform = {
		                ID : ID,
		                data : data,
		                action : action,
		            };
		            var token = jwt_encode(dataform,"UAP)(*");
		            loading_button2(selector);
		            var url = base_url_js + "customer/action";
		            $.post(url,{ token:token },function (resultJson) {
		            	    
			    	}).done(function(resultJson) {
			    	    AppForm.LoadSetDefault();
			    	    end_loading_button2(selector);
			    	    oTable.ajax.reload( null, false );
			    	    toastr.success('Saved');
			    	}).fail(function() {
			    	    toastr.error("Connection Error, Please try again", 'Error!!');
			    	    end_loading_button2(selector); 
			    	}).always(function() {
			    	     end_loading_button2(selector);              
			    	}); 
            	}
	            
            }
            
		},

		validation_data : function(arr){
			var toatString = "";
		    var result = "";
		    for(var key in arr) {
		       switch(key)
		       {
		        case  "Phone" :
		        	  if (arr[key] != '') {
		        	  	result = Validation_leastCharacter(10,arr[key],key);
		        	  	if (result['status'] == 0) {
		        	  	  toatString += result['messages'] + "<br>";
		        	  	}
		        	  }
		              break;
		        case  "Device" :
		              result = Validation_required(arr[key],key);
		              if (result['status'] == 0) {
		                toatString += result['messages'] + "<br>";
		              }
		              break;
		        case  "Email" :
		        	  if (arr[key] != '') {
		        	  	result = Validation_email(arr[key],key);
		        	  	if (result['status'] == 0) {
		        	  	  toatString += result['messages'] + "<br>";
		        	  	}
		        	  }
		              
		              break;
		        default:
		        	result = Validation_leastCharacter(3,arr[key],key);
		        	if (result['status'] == 0) {
		        	  toatString += result['messages'] + "<br>";
		        	}
		       }
		    }
		    if (toatString != "") {
		      toastr.error(toatString, 'Failed!!');
		      return false;
		    }
		    return true
		},

	};

	 $(document).ready(function(){
	 	AppForm.Loaded();
	 });

	 $(document).off('click', '#btnSave').on('click', '#btnSave',function(e) {
	 	var ID = $(this).attr('data-id');
	 	var selector = $(this);
	 	var action = $(this).attr('action');
	 	AppForm.SubmitData(action,ID,selector);
	 })
</script>