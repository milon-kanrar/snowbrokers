<?php
$this->load->view('includes/header');

?>
<!-- the script for the toggle all checkboxes from header is located in js/theme.js -->

<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
    <div class="table-products">
	   <div class="row-fluid head" style="border-bottom: 1px solid #C5C5C5; margin-bottom: 30px;"><div class="span12"><h4>Specialist Type Management</h4></div></div>
	   <div class="row-fluid">
		  <div id="main-stats">
			 <div class="table-products">
				<div class="row-fluid head"><div class="span12"><h4>Add Specialist Type</h4></div></div>
				<div class="row-fluid filter-block" style="margin-bottom: 0px;">
					  <div class="pull-right"><a class="btn-flat new-product" href="<?php echo site_url('specialist_type/index'); ?>">< View List</a></div>
				</div>
				<div class="row-fluid form-wrapper">
				    <!-- left column -->
				    <div class="span9 with-sidebar" style="margin-bottom: 30px;">
					   <div class="container">
						  <form class="new_user_form" enctype="multipart/form-data" action="<?php echo site_url('specialist_type/insert_specialist_type');?>" name="new_specialist" id="new_specialist" method="post" autocomplete="off">
							 <input type="hidden" name="email_format" id="email_format" value="">
							<input type="hidden" name="email_hidden" id="email_hidden" value="">
							       <input type="hidden" name="username_hidden" id="username_hidden" value="">
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label>Select Type :</label>
								<?php $TypeData = $this->modelspecialist->SpecialistType();?>
								<div class="ui-select" >
								    <select label="Type" name="type" id="type">
									     <option value="">Select Type</option>
									     <?php
									     foreach($TypeData as $type_done)
									     {
									     ?>
									     <option value="<?php echo $type_done->id; ?>"><?php echo $type_done->name ?></option>
									     <?php
									     }
									     ?>
								    </select>
								</div>
								<div id="type_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label>Title :</label>
								<input type="text" class="span9 required" label="Title" name="title" id="title">
								<div id="title_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label>Description :</label>
								<textarea class="span9" label="Description" name="description" id="description"></textarea>
								<div id="description_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
							       <label>Image :</label>
							       <input type="file" class="span9 required" label="Image" name="image" id="image">
								<div id="image_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label>Status :</label>
								<div class="ui-select">
								    <select label="Status" name="status" id="status">
									   <option value="1">Active</option>
									   <option value="0">Inactive</option>
								    </select>
								</div>
								<div id="status_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span11 field-box actions" style="margin-top: 20px;">
								<input type="button" value="Create Specialist" class="btn-glow primary" id="createUser">
								<span>OR</span>
								<a class="btn-flat new-product" href="<?php echo site_url('specialist_type/index'); ?>">Cancel</a>
							 </div>
						  </form>
					   </div>
				    </div>
				</div>
			 </div>
		  </div>
	   </div>
    </div>
    <script type="text/javascript">
       $(document).ready(function () {
		  $('#createUser').click(function (e) {
			 e.preventDefault();
			 $('.span9').css('border-color','#B2BFC7');
			 $('.error_div').html('');
			 var type=document.getElementById('type').value;
			 var element_id,element_value,element_label,error_div,element_validation_type;
			 var required_elements = $('.required')
			 var has_error = 0;
			 required_elements.each(function(){
				element_id = $(this).attr('id');
				element_value = $(this).val();
				element_label = $(this).attr('label');
				element_validation_type = $(this).attr('validation_type');
				error_div = $("#"+element_id+"_error")
				
				if (element_value.search(/\S/)==-1) {
				    error_div.html(element_label+' is required.')
				    has_error++
				}
				
			 })
			 if (document.getElementById('image').value.search(/\S/)!=-1)
			 {
			    var image_type=document.getElementById('image').value;
			    var re = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
			    if(!re.exec(image_type))
			    {
			    document.getElementById("image_error").innerHTML="File extension not supported";
			    has_error++;
			    }		
			 }
			 if(CKEDITOR.instances.description.getData()=='') {
			    $('#description_error').html("Add description");
			    $('#description_error').css('color','red');
			    $('#description').focus();
			    has_error=has_error+1;
			    return false;
			    }
			 
		     
			 
			 if (has_error==0) {
				$('#new_specialist').submit();
			 }
		  });
	   });
    </script>
    <script>

	      //CKEDITOR.replace('description');
	      //CKEDITOR.resize( '100%', '100%' );
	      CKEDITOR.replace( 'description',
       {
       
       height: 250,
       width: 600
       });
				

                     </script>
<?php $this->load->view('includes/footer'); ?>