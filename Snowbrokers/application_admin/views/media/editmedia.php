<?php
$this->load->view('includes/header');
$dataone_fetch = $this->modelmedia->getDataMedia($this->input->post('ListingUserid'));

?>
<!-- the script for the toggle all checkboxes from header is located in js/theme.js -->


    <div class="table-products">
	   <div class="row-fluid head" style="border-bottom: 1px solid #C5C5C5; margin-bottom: 30px;"><div class="span12"><h4>Social Media Management</h4></div></div>
	   <div class="row-fluid">
		  <div id="main-stats">
			 <div class="table-products">
				<div class="row-fluid head"><div class="span12"><h4>Edit Media ( <span style="color: red;">*</span>  Fields are mandatory)</h4></div></div>
				<div class="row-fluid filter-block">
					  <div class="pull-right"><a class="btn-flat new-product" href="<?php echo site_url('media/index'); ?>">< View List</a></div>
				</div>
				<div class="row-fluid form-wrapper">
				    <!-- left column -->
				    <div class="span9 with-sidebar" style="margin-bottom: 30px;">
					   <div class="container">
						  <form class="new_user_form" enctype="multipart/form-data" action="<?php echo site_url('media/edit_media');?>" name="new_category" id="new_category" method="post" autocomplete="off">
							 <input type="hidden" name="id" id="id" value="<?php echo $this->input->post('ListingUserid'); ?>" />							 
							
							<!-- <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span> Label :</label>
								<input type="hidden" name="relval" id="relval" value="">
								<input type="text" class="span9 required" label="Label in English" name="label_in_english" id="label_in_english" style="width: 50%;" value="<?php //echo $dataone_fetch[0]->label_in;?>" onblur="CitynameAvailability(this.value);">
								<div id="category_title_error" class="error_div" style="color:red;"></div>
							 </div>-->
							  
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label>Link:</label>
								<input type="text" class="span9 required" label="link" name="link" id="link" style="width: 50%;" value="<?php echo $dataone_fetch[0]->link;?>">
								<div id="category_alias_error" class="error_div" style="color:red;"></div>
							 </div>
							<div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span> Exsisting Icon :</label>
								<?php $thumbImg = main_url()."images/media/thumbs/";?>
								<img src="<?php echo $thumbImg.$dataone_fetch[0]->icon; ?>" />
								<div id="existing_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
							       <label><span style="color: red;"></span> Icon :</label>
							       <input type="file" class="span9" name="icon" id="icon" label="Icon">
							       <div id="image_error" class="error_div" style="color:red;"></div>
							 </div>
							
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span> Status :</label>
								<div class="ui-select">
								    <select label="Status" name="status" id="status" style="width: 130%;">
									   <option value="1" <?php if($dataone_fetch[0]->status==1){echo "selected";}else{echo "";}?>>Active</option>
									   <option value="0" <?php if($dataone_fetch[0]->status==0){echo "selected";}else{echo "";}?>>Inactive</option>
								    </select>
								</div>
								<div id="status_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span11 field-box actions" style="margin-top: 20px;">
								<input type="button" value="Submit" class="btn-glow primary" id="createLabel">
								<span>OR</span>
								<a class="btn-flat new-product" href="<?php echo site_url('media/index'); ?>">Cancel</a>
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
		  $('#createLabel').click(function (e) {
			 e.preventDefault();
			 $('.span9').css('border-color','#B2BFC7');
			 $('.error_div').html('');
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
			 
			 
			
			 if (has_error==0) {
				$('#new_category').submit();
			 }
		  });
	   });
	  
    

    </script>
   
<!-- pre load bg imgs -->
<?php $this->load->view('includes/footer'); ?>