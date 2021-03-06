<?php
$this->load->view('includes/header');


?>
<!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
    <div class="table-products">
	   <div class="row-fluid head" style="border-bottom: 1px solid #C5C5C5; margin-bottom: 30px;"><div class="span12"><h4>Learn More Management</h4></div></div>
	   <div class="row-fluid">
		  <div id="main-stats">
			 <div class="table-products">
				<div class="row-fluid head"><div class="span12"><h4>Add Learn More ( <span style="color: red;">*</span>  Fields are mandatory)</h4></div></div>
				<div class="row-fluid filter-block">
					  <div class="pull-right"><a class="btn-flat new-product" href="<?php echo site_url('learnmore/index'); ?>">< View List</a></div>
				</div>
				<div class="row-fluid form-wrapper">
				    <!-- left column -->
				    <div class="span9 with-sidebar" style="margin-bottom: 30px;">
					   <div class="container">
						  <form class="new_user_form" enctype="multipart/form-data" action="<?php echo site_url('learnmore/insert_learnmore');?>" name="new_article" id="new_article" method="post" autocomplete="off">
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span> Learn More Title :</label>
								<input type="text" class="span9 required" label="Article Title" name="article_title" id="article_title" style="width: 50%;">
								<div id="article_title_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span> Learn More Description :</label>
								<textarea class="span9" label="Article Description" name="a_desc" id="a_desc"></textarea>
								<div id="a_desc_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span> Image :</label>
								<input type="file" name="image" id="image" class="span9" label="Image">
								<div id="image_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span> Status :</label>
								<div class="ui-select">
								    <select label="Status" name="status" id="status" style="width: 130%;">
									   <option value="1">Active</option>
									   <option value="0">Inactive</option>
								    </select>
								</div>
								<div id="status_error" class="error_div" style="color:red;"></div>
							 </div>
							 <div class="span11 field-box actions" style="margin-top: 20px;">
								<input type="button" value="Create Learn More" class="btn-glow primary" id="createUser">
								<span>OR</span>
								<a class="btn-flat new-product" href="<?php echo site_url('learnmore/index'); ?>">Cancel</a>
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
			 if (document.getElementById('article_type').value=="")
			 {
			    document.getElementById('article_type_error').innerHTML="Article Type is required";
			    has_error++;
			    //return false;
			 }
			 if(CKEDITOR.instances.a_desc.getData()=='') {
			    $('#a_desc_error').html("Add description");
			    $('#a_desc_error').css('color','red');
			    $('#a_desc').focus();
			    has_error=has_error+1;
			    
			    }
			 if (document.getElementById('image').value.search(/\S/)!=-1)
			 {
			    var image_type=document.getElementById('image').value;
			    var re = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
			    if(!re.exec(image_type))
			    {
			    document.getElementById("image_error").innerHTML="File extension not supported (Plaese upload .jpg, .jpeg, .png, .gif format image)";
			    document.getElementById("image").focus();
			    has_error++;
			    return false;
			    }		
			 }
			 
			 if (has_error==0) {
				$('#new_article').submit();
			 }
		  });
	   });
    </script>
<script>

	      //CKEDITOR.replace('description');
	      //CKEDITOR.resize( '100%', '100%' );
	CKEDITOR.replace( 'a_desc',
        {
       
            height: 250,
            width: 600
        });
				

</script>
<!-- pre load bg imgs -->
<?php $this->load->view('includes/footer'); ?>