<!--  for tinymce editor -->
<script src="<?php echo base_url(); ?>admin/asset/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url(); ?>admin/asset/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>admin/asset/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>admin/asset/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tinymce_script_class.js"></script>
<!--      End   -->
<!-- content -->
<section class="content-area">
	<!--   This is for after login header menu bar start -->
    
	<?php //echo $this->load->view('header/menu_bar'); ?>
    
        <!--   This is for after login header menu bar end -->
	<div class="container">
		<div class="shipping-content clearfix">
			<form name="basic_details" id="basic_details" action="<?php echo site_url('admin_product/edit_basic_features');?>" method="post" onsubmit="return check_Form();">
				<div class="form-hedding">
					<h2>Edit Basic Details</h2>
                                        <?php // print_r($product_basic_details); ?>
				</div>
				<div class="row besic-form-row">
					<div class="col-md-6">
						<div class="post-address besic-form">
                                                    <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_basic_details->id; ?>" />
							<label>Product Type <span class="star-color">*</span></label>
							<div class="post-address-cell">
								<select name="product_type" id="product_type" onchange="get_productCategory(this.value);">
								<?php
								if($product_type!='0')
								{
									foreach($product_type as $values)
									{
								?>
									<option value="<?php echo $values->id; ?>" <?php echo (($values->id==$product_basic_details->product_type_id)?'selected':'');?>><?php echo $values->title; ?></option>
								<?php
									}
								}
								else
								{
								?>
									<option value="0">Products not available</option>
								<?php
								}
								?>
								</select>
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Product Category <span class="star-color">*</span></label>
							<div class="post-address-cell" id="product_category">
								<select name="category" id="category">
									<?php
									$product_category = $this->modelhome->get_ProductCategory($product_basic_details->product_type_id);
									if($product_category!='0')
									{
										foreach($product_category as $value)
										{
									?>
										<option value="<?php echo $value->id;?>" <?php echo (($value->id==$product_basic_details->product_cat_id)?'selected':'');?>><?php echo $value->name;?></option>
									<?php
										}
									}
									?>
								</select>
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Product Name <span class="star-color">*</span></label>
							<div class="post-address-cell">
								<input type="text" class="requiredx" name="product_title" id="product_title" label="Product Name" value="<?php echo $product_basic_details->title; ?>" placeholder="">
								<span class="star-color error_div" id="product_title_error"></span>
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Brand<span class="star-color">*</span></label>
							<div class="post-address-cell">
								<input type="text" class="requiredx" name="tag" id="tag" label="Brand" value="<?php echo $product_basic_details->product_tag; ?>" placeholder="">
								<span class="star-color error_div" id="tag_error"></span>
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Currency <span class="star-color">*</span></label>
							<div class="post-address-cell">
								<select name="currency" id="currency">
								<?php
								$currency1=$this->site_settingsmodel->get_all_currency();
								if($currency1!='0')
								{
									foreach($currency1 as $values)
									{
								?>
									    <option value="<?php echo $values->currency_code; ?>" <?php echo (($values->currency_code==$product_basic_details->choose_currency)?'selected':'');?>><?php echo $values->currency_code; ?></option>
								<?php
									}
								}
								else
								{
								?>
									<option value="0">Currency not available</option>
								<?php
								}
								?>
								</select>
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Product Visibility <span class="star-color">*</span></label>
						<div class="post-address-cell">
								<!--<select multiple class="select2" name="visibility[]" id="visibility" style="width: 550px; height: auto;">-->
									
									<div class="checkbox" style="margin: 0px;">
									<input type="checkbox" id="all_coun_v" value="all" name="visibility[]" <?php if($product_basic_details->countries==''){echo "checked";} else{ echo ""; } ?>>
									<label id="clickID" for="all_coun_v">All Country</label>
									</div>
									<div id="country_div" class="multi_check">
										<?php
										$country_id=array();
										if($product_basic_details->countries!='')
										{
											$country_id=explode(',', $product_basic_details->countries);
										
											if($currency!='0')
											{
												foreach($currency as $values)
												{
													//echo $country_id[$i];	
											?>
											<span class="total_c">
											    <div class="checkbox" style="margin: 0px;">
													<input type="checkbox" name="visibility[]" id="visibility_<?php echo $values->id;?>" value="<?php echo $values->id;?>"<?php if(in_array($values->id,$country_id)){?>checked="checked"<?php } ?>>
													<label id="" for="visibility_<?php echo $values->id;?>"><?php echo $values->country_name; ?></label>
											    </div>
											</span>
												
											   <?php
												}
											}
										}
										else
										{
											if($currency!='0')
											{
												foreach($currency as $values)
												{
													//echo $country_id[$i];	
											?>
											<span class="total_c">
											    <div class="checkbox" style="margin: 0px;">
													<input type="checkbox" name="visibility[]" id="visibility_<?php echo $values->id;?>" value="<?php echo $values->id;?>"checked>
													<label id="" for="visibility_<?php echo $values->id;?>"><?php echo $values->country_name; ?></label>
											    </div>
											</span>
												
											   <?php
												}
											}
										}
										?>
									</div>
							   <!-- </select>-->
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Product code <span class="star-color">*</span></label>
							<div class="post-address-cell">
								<input type="text" class="requireded" name="prod_cod" id="prod_cod" label="Product Code" value="<?php echo $product_basic_details->product_code; ?>" placeholder="">
								<span class="star-color error_div" id="prod_cod_error"></span>
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Snowbrokers Selling Price <span class="star-color">*</span></label>
							<div class="post-address-cell">
								<input type="text" class="requiredx" name="price" id="price" label="Price" value="<?php echo $product_basic_details->price; ?>" placeholder="">
								<span class="star-color error_div" id="price_error"></span>
							</div>	
						</div>
					</div>
					<?php
					if($product_basic_details->customer_type !=0)
					{
					$get_name = $this->modelhome->get_userdetails($product_basic_details->customer_type);
					}
					else
					$get_name="Admin";
					?>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Product Uploaded By</label>
							<div class="post-address-cell">
								<input type="text" class="requiredx" name="name" id="name" label="" value="<?php echo $get_name;?>" readonly>
								<span class="star-color error_div" id="seller_price_error"></span>
							</div>	
						</div>
					</div>
					<div class="col-md-6">
						<div class="post-address besic-form">
							<label>Seller Price <span class="star-color">*</span></label>
							<div class="post-address-cell">
								<input type="text" class="requiredx" name="seller_price" id="seller_price" label="Seller price" value="<?php echo $product_basic_details->seller_price; ?>" placeholder="">
								<span class="star-color error_div" id="seller_price_error"></span>
							</div>	
						</div>
					</div>
					<div class="col-md-12">
						<div class="post-address besic-form">
							<label>Details <span class="star-color">*</span></label>
							<div class="post-address-cell">
								<textarea class="tinyeditor" name="details" id="details" label="Details" validation_type="texteditor"><?php echo $product_basic_details->product_details; ?></textarea>
								<span class="star-color error_div" id="details_error"></span>
							</div>	
						</div>
					</div>
					<div class="col-md-12">
						<div class="post-address besic-form">
							<label>Shipping Details <span class="star-color">*</span></label>
							<div class="post-address-cell">
								<textarea class="tinyeditor" name="shipping_details" id="shipping_details" label="Shipping Details" validation_type="texteditor"><?php echo $product_basic_details->shipping_terms; ?></textarea>
								<span class="star-color error_div" id="shipping_details_error"></span>
							</div>	
						</div>
					</div>
				</div>
				<div class="post-address-cell basic-submit">
					<button class="btn btn-default">
						UPDATE
					</button>
					<a class="btn btn-default" href="<?php echo site_url();?>admin_product/advance_features/<?php echo $this->uri->segment(3);?>" style="float: right;">
						NEXT
					</a>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- content End -->
<script type="text/javascript">
	function get_productCategory(val)
	{
		$.ajax({
		    url: "<?php echo base_url(); ?>index.php/admin_product/get_categoryType",
		    data: {
			product_id:val
		    },
		    success: function(response) {
			var ans = response.split('@@');
			$('#product_category').html(ans[1]);
			$("select").select2();
		    }
		});
	}
	function check_Form()
	{
		$('.error_div').html('');
		
		var element_id,element_value,element_label,error_div,element_validation_type;
		var required_elements = $('.requiredx');
		var has_error = 0;
		var editorContent1 = tinymce.get('details').getContent();
		var editorContent2 = tinymce.get('shipping_details').getContent();
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
		       else if (element_id=='price') {
			
				var pattern = /^[0-9]\d*(?:\.\d{0,2})?$/ ;
				if (!pattern.test(element_value))
				{
					error_div.html('This is not valid price type.');
					has_error++;
				}
		       }
		       else if (element_id=='seller_price') {
			
				var pattern = /^[0-9]\d*(?:\.\d{0,2})?$/ ;
				if (!pattern.test(element_value))
				{
					error_div.html('This is not valid price type.');
					has_error++;
				}
		       }
		});
		if(editorContent1=='' || editorContent1==null) {
			//alert(0);
		       $('#details_error').html("Details is required");
		       $('#details').focus();
		       has_error++
		}
		if(editorContent2=='' || editorContent2==null) {
			 //alert(0);
        		$('#shipping_details_error').html("Shipping details is required");
			$('#shipping_details').focus();
        		has_error++
		}
	    if (has_error==0)
	    {
		//alert(has_error);
		return true;
	    }
	    else
	    {
		//alert(has_error);
		return false;
	    }
	}
	
	$(document).ready(function(){
//	$("#country_div").hide();
	var check;
	
	check = $("#all_coun_v").is(":checked");
	if(check) {
	    
	     $("#country_div").hide();
	    
	} else {
	     $("#country_div").show();
	   
	}
	
	
	$("#all_coun_v").on("click", function(){
	    check = $("#all_coun_v").is(":checked");
	    if(check) {
		
		 $("#country_div").hide();
		
	    } else {
		 $("#country_div").show();
	       
	    }
	});
});
</script>