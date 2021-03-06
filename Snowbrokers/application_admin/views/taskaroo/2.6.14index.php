<?php
	$this->load->view('includes/header');
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/res_datepicker/main.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/res_datepicker/default.css" id="theme_base">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/res_datepicker/default.date.css" id="theme_date">
<script src="<?php echo base_url();?>js/res_datepicker/picker.js"></script>
<script src="<?php echo base_url();?>js/res_datepicker/picker.date.js"></script>
<script src="<?php echo base_url();?>js/res_datepicker/picker.time.js"></script>
<script src="<?php echo base_url();?>js/res_datepicker/main.js"></script>
<script type="text/javascript">
function go_seaarch()
{
	var selected = $("#search_option").val();
	if ((selected=='') && (document.getElementById('get_search').value!=""))
	{
		alert("Please Select an Option");
	}
	else
	{
		$('#search_mode').val('search');
		document.getElementById('search_form').submit();
	}
}
function display_active_inactive(val) {	
		
	$('#btnVal').val($.trim(val));
	$('#search_mode').val('search');
	$("#search_form").submit();
	
}
function go_reset()
{
	location.href="<?php echo base_url();?>index.php/taskaroo/index";
}
function select_check_option()
{
	var frm=document.multiple_form;
	var total=0;
	var checkbox_class = $('.checkbox_class')
	
	checkbox_class.each(function(){
		var element_id = $(this).attr('id');
		if(document.getElementById(element_id).checked)
		{
			total++;
		}
	})
	
	return total;
}
function go_multiple_option(val)
{
	var frm=document.multiple_form;
	var total= select_check_option();
	
	if(total=="")
	{
		alert("Please first make a selection from the list");
	}
	else
	{
		document.getElementById('select_check').value=total;
		
		
		var msg;
		
		if (val==1)
		{
		   msg="Are You sure to Delete the Data?";
		}
		else if (val==2)
		{
		   msg="Do You want to Activate the Data?"
		}
		else
		{
			msg="Do You want to Deactivate the Data?"
		}
		
		var r = confirm(msg);
		
		   if (r == true)
		   {
			 document.getElementById('select_my_option').value=val;
			 
			frm.submit();
		   }
		
	}
}
   
function go_check_all()
{
	var frm=document.multiple_form;
	var total= select_check_option();
	var totallength=frm.scripts.length;
	
	if (total!=totallength)
	{
	    document.getElementById('check_all').checked=false;
	}
	else
	{
	    document.getElementById('check_all').checked=true;
	}
}
function sortField(field)
{
	var get_field = field;
	var sort_type = $("#sort_type").val();
	var sort_field = $("#sort_field").val();
	if (sort_field === get_field) {
		
		if (sort_type == 'DESC')
		{
			$("#sort_type").val('ASC');
		}
		else
		{
			$("#sort_type").val('DESC');
		}
	}
	else
	{
		$("#sort_field").val(get_field);
		$("#sort_type").val('DESC');
	}
	
	$('#search_mode').val('search');
	$('#search_form').submit();
}
</script>
<!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
<div class="table-products">
	<div class="row-fluid head" style="border-bottom: 1px solid #C5C5C5; margin-bottom: 30px;">
		<div class="span12">
			<h4 class="management_name">Taskaroo Management</h4>
			<div class="pull-right" style="margin-bottom: 5px;"><a class="btn-flat new-product" href="<?php echo site_url('taskaroo/addtaskaroo'); ?>">+ Add New</a></div>
		</div>
	</div>
	<div class="row-fluid">
		<div id="main-stats">
			<div class="table-products">
				<div class="row-fluid head"></div>
				<div class="row-fluid filter-block">
					
					<div class="pull-left">
						<form name="search_form" id="search_form" method="post" action="">
							<?php
								
								  $myval=2;
								
								if(isset($btnval))
								{
								   $myval=$btnval;
								}
								
										
								
								
								$style1="";
								$style2="";
									
								if($myval==1)
								{
									$style1="color:#32A0EE;";
									$style2="";
								}
								else if($myval==0)
								{
									$style1="";
									$style2="color:#32A0EE;";
								}
								
							?>
							<input type="hidden" id="sort_type" name="sort_type" value="<?php echo (isset($sort_type)?$sort_type:get_cookie('user_type'));?>" />
							<input type="hidden" id="sort_field" name="sort_field" value="<?php echo (isset($sort_field)?$sort_field:get_cookie('user_field'));?>" />
							<input type="hidden" name="search_mode" id="search_mode" value="" />
							<input type="hidden" name="btnVal" id="btnVal" value="<?php echo $myval;?>"/>
							<?php
							$newstatus=$this->uri->segment(3);
							if($newstatus !='new')
							{
							?>
							<div class="btn-group pull-left" style="padding-right: 10px;">
								<button class="glow left large" href="javascript:void(0);" value="1" onclick="display_active_inactive(1);"><span style="<?php echo $style1;?>"> Active </span></button>
								<button class="glow left large" href="javascript:void(0);" value="2" onclick="display_active_inactive(0);"><span style="<?php echo $style2;?>"> In-Active </span></button>
							</div>
							
						<?php }	?>
							<!--<input type="text" class="search" name="date" id="add_date" value="<?php if(isset($search_date) && ($search_date!="")){echo $search_date;}?>" placeholder="Search by registered date" style="width: 130px;background: none;">-->

							<div class="ui-select">
								<select name="search_option" id="search_option">
									<option value="" selected="selected">Select an option</option>
									<option value="first_name" <?php if(isset($search_option) && ($search_option=='first_name')){echo 'selected';}?>>First Name</option>
									<option value="last_name" <?php if(isset($search_option) && ($search_option=='last_name')){echo 'selected';}?>>Last Name</option>
									<option value="email" <?php if(isset($search_option) && ($search_option=='email')){echo 'selected';}?>>Email</option>
									<option value="phone_number" <?php if(isset($search_option) && ($search_option=='phone_number')){echo 'selected';}?>>Phone Number</option>
								</select>
							</div>
							<input type="text" class="search" name="get_search" id="get_search" value="<?php if(isset($get_search) && ($search_option !="")){echo $get_search;}?>">
							<a class="btn-flat new-product" href="javascript:void(0);" onclick="go_seaarch();">Search</a>
							<a class="btn-flat new-product" href="javascript:void(0);" onclick="go_reset();">Reset</a>
							<script type="text/javascript">

								$('#add_date').pickadate({
								// An integer (positive/negative) sets it relative to today.
								
								// `true` sets it to today. `false` removes any limits.
								max: 1,
								selectYears: true,
								selectMonths: true,
								format: "yyyy-mm-dd",
								})
							</script>
						</form>
					</div>
					<div class="pull-right" style="padding-right:10px;">
						
						
				</div>
				</div>
				
				<form name="multiple_form" id="multiple_form" method="post" action="<?php echo site_url('taskaroo/multiple_option_user'); ?>">
					<input type="hidden" name="select_check" id="select_check" value="">
					<input type="hidden" name="select_my_option" id="select_my_option" value="">
					
					<div class="row-fluid">
						<table class="table table-hover">
							<thead>
								<tr>
									<th><input type="checkbox" name="check_all" id="check_all" style="margin: 0px;"></th>
									<th class="span3">
										<a id="first_name" href="javascript:void(0);" onclick="sortField('first_name');" style="color:#000;text-decoration: none;">
										First Name
										<?php
											if($sort_field=='first_name')
											{
												if($sort_type=="DESC")
												{
													echo "<img src='".base_url()."images/sort_desc.png' />";
												}
												if($sort_type=="ASC")
												{
													echo "<img src='".base_url()."images/sort_asc.png' />";
												}
											}
										?>
										</a>
									</th>
									<th class="span3">
										<a id="last_name" href="javascript:void(0);" onclick="sortField('last_name');" style="color:#000;text-decoration: none;">
										Last Name
										<?php
											if($sort_field=='last_name')
											{
												if($sort_type=="DESC")
												{
													echo "<img src='".base_url()."images/sort_desc.png' />";
												}
												if($sort_type=="ASC")
												{
													echo "<img src='".base_url()."images/sort_asc.png' />";
												}
											}
										?>
										
									</th>
									<th class="span3">
									<a id="email" href="javascript:void(0);" onclick="sortField('email');" style="color:#000;text-decoration: none;">
									Email
									<?php
											if($sort_field=='email')
											{
												if($sort_type=="DESC")
												{
													echo "<img src='".base_url()."images/sort_desc.png' />";
												}
												if($sort_type=="ASC")
												{
													echo "<img src='".base_url()."images/sort_asc.png' />";
												}
											}
										?>
									</th>
									<th class="span3">
										<a id="phone_number" href="javascript:void(0);" onclick="sortField('phone_number');" style="color:#000;text-decoration: none;">
										Phone Number
										<?php
											if($sort_field=='phone_number')
											{
												if($sort_type=="DESC")
												{
													echo "<img src='".base_url()."images/sort_desc.png' />";
												}
												if($sort_type=="ASC")
												{
													echo "<img src='".base_url()."images/sort_asc.png' />";
												}
											}
										?>
									</th>
									<th class="span3">
									<a id="profile_image" href="javascript:void(0);" onclick="sortField('profile_image');" style="color:#000;text-decoration: none;">

										Profile Image
										<?php
											if($sort_field=='profile_image')
											{
												if($sort_type=="DESC")
												{
													echo "<img src='".base_url()."images/sort_desc.png' />";
												}
												if($sort_type=="ASC")
												{
													echo "<img src='".base_url()."images/sort_asc.png' />";
												}
											}
										?>
									</th>
									<th class="span3">
									<a id="profile_image" href="javascript:void(0);" onclick="sortField('register_date');" style="color:#000;text-decoration: none;">

										Added Date
										<?php
											if($sort_field=='register_date')
											{
												if($sort_type=="DESC")
												{
													echo "<img src='".base_url()."images/sort_desc.png' />";
												}
												if($sort_type=="ASC")
												{
													echo "<img src='".base_url()."images/sort_asc.png' />";
												}
											}
										?>
									</th>
									<th class="span3">
									<a id="status" href="javascript:void(0);" style="color:#000;text-decoration: none;">
	
										Status
									
									</th>
									<th class="span3"><span class="line"></span></th>
								</tr>
							</thead>
							<tbody>
								<?php
									if(count($user_list) > 0)
									{
										foreach ($user_list as $dataone):
									?>
										<!-- row -->
										<tr class="first">
											<td><input type="checkbox" name="scripts[]" class="checkbox_class" id="checkbox_<?php echo $dataone->id;?>" style="margin: 0px;" value="<?php echo $dataone->id;?>" onclick="go_check_all();"></td>
											<td><?php echo $dataone->first_name; ?></td>
											<td><?php echo $dataone->last_name; ?></td>
											<td><?php echo $dataone->email; ?></td>
											<td><?php echo $dataone->phone_number; ?></td>
											<?php if($dataone->profile_image !=''){?>
											<td>
											<?php
											if(substr($dataone->profile_image,0,4)=='http')
											{
										        ?>
											<img src="<?php echo $dataone->profile_image;?>" height="80" width="100"><br/>
											<?php }else{ ?>
											<img src="<?php echo GET_LOGO_PATH;?>profile_pic/thumbnail/<?php echo $dataone->profile_image; ?>" height="80" width="100"><?php } ?>
											
											</td>
											
											<?php }else{?>
											<td>Image not Available</td>
											<?php }?>
											<td><?php echo $dataone->register_date; ?></td>
											<td><?php echo ($dataone->taskaroo_status)?"Approve":"Disapprove"; ?></td>
											<td>
												<ul class="actions">
													<li><a class="Edituser" id="Edituser<?php echo $dataone->id;?>" href="javascript:void(0);"><i class="table-edit"></i></a></li>
													<li class="last"><a class="Deleteuser" id="Deleteuser<?php echo $dataone->id;?>" href="javascript:void(0);"><i class="table-delete-new"></i></a></li>
												</ul>
											</td>
										</tr>
										<?php
										endforeach;
									}
									else
									{
										?>
										<tr class="first">
											<td colspan="7">
												<div class="span12">
													<h4>No Records Found.</h4>
												</div>
											</td>
										</tr>
										<?php
									}
								?>
							</tbody>
						</table>
					</div>
				</form>
			    <div class="pagination">
					    <?php echo $pagination; ?>
			    </div>
			</div>
		   </div>
	</div>
</div>
<form class="new_user_form" action="" id="frmValidation" method="post">
	<input type="hidden" name="ListingUserid" id="ListingUserid" value="0">
</form>
<script type="text/javascript">
	$(function () {
        $('.Edituser').click(function (e) {
			e.preventDefault();
			var mainstring = $(this).attr('id');
			var stripdata = mainstring.replace('Edituser','');
			$('#ListingUserid').val($.trim(stripdata));
			$("#frmValidation").attr("action", "<?php echo site_url('taskaroo/edittaskaroo');?>");
			$( "#frmValidation" ).submit();
			return true;
		});
	});
	$(function () {
        $('.Deleteuser').click(function (e) {
			e.preventDefault();
			var mainstring = $(this).attr('id');
			var stripdata = mainstring.replace('Deleteuser','');
			
			var r=confirm("Are you sure to delete this =Takaroo?");
			
			if (r==true)
			{
			    $('#ListingUserid').val($.trim(stripdata));
			    $("#frmValidation").attr("action", "<?php echo site_url('taskaroo/delete_user');?>");
			    $("#frmValidation").submit();
			    return true;
			}
		});
	});
</script>
<?php $this->load->view('includes/footer'); ?>