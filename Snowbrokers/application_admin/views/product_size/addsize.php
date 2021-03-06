<?php
$this->load->view('includes/header');

?>
<!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="http://esolz.co.in/lab4/mr_easy_print/assets/js/jscolor.js"></script>
<script type="text/javascript" src="jscolor.js"></script>

    <div class="table-products">
	   <div class="row-fluid head" style="border-bottom: 1px solid #C5C5C5; margin-bottom: 30px;"><div class="span12"><h4>Product size Management</h4></div></div>
	   <div class="row-fluid">
		  <div id="main-stats">
			 <div class="table-products">
				<div class="row-fluid head"><div class="span12"><h4>Add  size ( <span style="color: red;">*</span>  Fields are mandatory)</h4></div></div>
				<div class="row-fluid filter-block">
					  <div class="pull-right"><a class="btn-flat new-product" href="<?php echo site_url('product_size/index'); ?>">< View List</a></div>
				</div>
				<div class="row-fluid form-wrapper">
				    <!-- left column -->
				    <div class="span9 with-sidebar" style="margin-bottom: 30px;">
					   <div class="container">
						  <form class="new_user_form" enctype="multipart/form-data" action="<?php echo site_url('product_size/insert_size');?>" name="new_category" id="new_category" method="post" autocomplete="off" onsubmit="return chkfrm()">
							
							<div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span>  Product Type :</label>
								
								<select style="font-size: inherit;" onchange="choose_type()" id="product_type" name="product_type">
								      <option value="">------------------SELECT------------------</option>
								      <?php foreach ($product_type as $pc) {?>
									     <option value="<?php echo $pc->id; ?>"><?php echo $pc->title; ?></option>
								      <?php }?>
								</select>
								
								<div id="type_error" class="error_div" style="color:red;"></div>
							</div>
							<div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								      <label><span style="color: red;">*</span>  Product Category :</label>
								      
								      <select style="font-size: inherit;" id="product_category" name="product_category">
									    <option>Not available</option>
								      </select>
								      
								      <div id="category_error" class="error_div" style="color:red;"></div>
							</div>
						  
							 <div class="span12 field-box" style="margin-left: 30px;margin-bottom: 10px;">
								<label><span style="color: red;">*</span>  Size :</label>
								<input type="text" class="span9 required" id="size" name="size" label="Size" autocomplete="off" style="background-image: none; width: initial;">
								<div id="size_error" class="error_div" style="color:red;"></div>
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
								<input type="button" value="Add size" class="btn-glow primary" id="createUser">
								<span>OR</span>
								<a class="btn-flat new-product" href="<?php echo site_url('product_size/index'); ?>">Cancel</a>
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
			 
			 //if(CKEDITOR.instances.a_desc.getData()=='') {
			 //   $('#a_desc_error').html("Add Product type Description");
			 //   $('#a_desc_error').css('color','red');
			 //   $('#a_desc').focus();
			 //   has_error=has_error+1;
			 //   
			 //   }
			 
			 
			 if (has_error==0) {
				$('#new_category').submit();
			 }
		  });
	   });
	   
       
       function choose_type(){
	      
		     var e = document.getElementById('product_type');
		     var option = e.options[e.selectedIndex].value;
		     
		     $.ajax({
                        url : '<?php echo base_url().'index.php/product_size/choose_category';?>',
                        type:'post',
                        cache:false,
                        data: {'ptype':option},
                        success:function(response)
                        {
                          //$('#list_filmmakers').show();
                          $('#product_category').html(response);
                        }
		    });
       }
       
       function chkfrm(){
	      
	    var e = document.getElementById('product_type');
            var ptype = e.options[e.selectedIndex].value;
	    
	    var e = document.getElementById('product_category');
            var pcat = e.options[e.selectedIndex].value;
	    
	    if (ptype=="") {
	      
	      document.getElementById('type_error').innerHTML="please select product type";
	      return false;
	    }
	    else {
	      
	      if (pcat=="") {
		 
		 document.getElementById('category_error').innerHTML="please select product category";
	         return false;    
	      }
	      else {
		     return true;
	      }
	    }
       }
    </script>
<!--<script>

	      //CKEDITOR.replace('description');
	      //CKEDITOR.resize( '100%', '100%' );
	      CKEDITOR.replace( 'a_desc',
       {
       
       height: 250,
       width: 600
       });
				

</script>-->
<!-- pre load bg imgs -->
<?php $this->load->view('includes/footer'); ?>