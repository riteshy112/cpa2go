<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$id = isset($user_list->id) ? $user_list->id : '';
$user_name = isset($user_list->user_name) ? $user_list->user_name : '';
$first_name = isset($user_list->first_name) ? $user_list->first_name : '';
$last_name = isset($user_list->last_name) ? $user_list->last_name : '';
$email_address = isset($user_list->email_address) ? $user_list->email_address : '';
$date_of_birth = isset($user_list->date_of_birth) ? $user_list->date_of_birth : '';
$phone_number = isset($user_list->phone_number) ? $user_list->phone_number : '';
$company_name = isset($user_list->company_name) ? $user_list->company_name : '';
$web_address = isset($user_list->web_address) ? $user_list->web_address : '';
$address = isset($user_list->address) ? $user_list->address : '';
$state = isset($user_list->state) ? $user_list->state : '';
$city = isset($user_list->city) ? $user_list->city : '';
$zip_code = isset($user_list->zip_code) ? $user_list->zip_code : '';
$license_number = isset($user_list->license_number) ? $user_list->license_number : '';
// $pay_card_number = isset($user_list->pay_card_number) ? $user_list->pay_card_number : '';
// $pay_name_on_card = isset($user_list->pay_name_on_card) ? $user_list->pay_name_on_card : '';
// $pay_month = isset($user_list->pay_month) ? $user_list->pay_month : '';
// $pay_year = isset($user_list->pay_year) ? $user_list->pay_year : '';
// $pay_cvv = isset($user_list->pay_cvv) ? $user_list->pay_cvv : '';
?>


<!-- end:: Header -->
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

	<!-- begin:: Subheader -->
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				CPA </h3>
			<span class="kt-subheader__separator kt-hidden"></span>
			
		</div>
	</div>

	<!-- end:: Subheader -->

	<!-- begin:: Content -->
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
		<div class="row">
			
			<div class="col-lg-12">

				<!--begin::Portlet-->
				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								<?php if(empty($id) AND $id == '') { echo 'Add '; }else{ echo 'Update '; } ?>CPA User
							</h3>
						</div>
					</div>

					

					<!--begin::Form-->
					<form class="kt-form" id="add_edit_cpa_user">
						<input type="hidden" name="user_id" id="user_id" value="<?=$id?>"/>
						<div class="kt-portlet__body">
							<div class="alert alert-success msg_validation" role="alert" style="display: none;">
								<div class="alert-text">A simple success alert—check it out!</div>
							</div>
							<div class="alert alert-danger error_validation" role="alert" style="display: none;">
								<div class="alert-text">A simple success alert—check it out!</div>
							</div>
							<div class="kt-section kt-section--first">
								<?php if(!empty($id) AND $id != '') { ?>
								<h3 class="kt-section__title">Franchise : <?=$admin_name?></h3>
								<?php } ?>
								<h3 class="kt-section__title">CPA User Info:</h3>
								<div class="kt-section__body">
									<div class="form-group row">
										<div class="col-lg-4">
											<label class="col-form-label">* First Name</label>
											<input type="text" name="first_name" class="form-control" placeholder="Enter first name" value="<?=$first_name?>" required>
											<!-- <span class="form-text text-muted">Please enter your full name</span> -->
										</div>
										<div class="col-lg-4">
											<label class="col-form-label">* Last Name</label>
											<input type="text" name="last_name" class="form-control" placeholder="Enter last name" value="<?=$last_name?>" required>
											
										</div>
										<div class="col-lg-4">
											<label class="col-form-label">* Email Address</label>
											<input type="email" name="email_address" class="form-control" placeholder="Enter the email address" value="<?=$email_address?>" required>
										</div>
										
									</div>
									<div class="form-group row">
										
										<!-- <div class="col-lg-4">
											<label class="col-form-label">Date Of Birth</label>
											<input type="text" name="date_of_birth" class="form-control" placeholder="" value="">
										</div> -->
										<div class="col-lg-4">
											<label class="col-form-label">* Phone Number (123-456-7890)</label>
											<input type="text" name="phone_number" class="form-control" placeholder="Enter the phone number" min="0" value="<?=$phone_number?>" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required>
											
										</div>
										<div class="col-lg-4">
											<label class="col-form-label">Company Name</label>
											<input type="text" name="company_name" class="form-control" placeholder="Enter the company name" value="<?=$company_name?>">
											
										</div>
										<div class="col-lg-4">
											<label class="col-form-label">Web Address</label>
											<input type="text" name="web_address" class="form-control" placeholder="Enter the web address" value="<?=$web_address?>">
											
										</div>
									</div>	
									<div class="form-group row">	
										<div class="col-lg-4">
											<label class="col-form-label">* License Number</label>
											<input type="text" name="license_number" class="form-control" placeholder="Enter License Number" value="<?=$license_number?>" pattern="[0-9]{0,12}" required>
										</div>
										<!-- <div class="col-lg-4">
											<label class="col-form-label">* User Name</label>
											<input type="text" name="user_name" class="form-control" placeholder="Enter user name" value="<?=$user_name?>" required>
										</div> -->

										<!-- <div class="col-lg-4">
											<label class="col-form-label">* Password</label>
											<input type="password" name="password" id="password" class="form-control" placeholder="Enter the password" <?php if(empty($id)) { echo 'required'; } ?> >
											<p class="pass_val" style="color: red; display: none;">Please enter min 8 character password</p>
										</div> -->
										
									</div>
								</div>
								<h3 class="kt-section__title">Address Details:</h3>
								<div class="kt-section__body">
									<div class="form-group row">
										<div class="col-lg-4">
											<label class="col-form-label">* Address</label>
											<textarea class="form-control" id="exampleTextarea" rows="3" name="address" required><?=$address?></textarea>
											<!-- <span class="form-text text-muted">Please enter your full name</span> -->
										</div>
										<div class="col-lg-4">
											<label class="col-form-label">* State</label>
											<select class="form-control" name="state" required>
												<option value="">Select</option>
												<?php foreach($state_list AS $val) { ?>
												<option value="<?=$val->id?>" <?php if($val->id == $state) { echo 'selected'; } ?>><?=$val->name?></option>
												<?php } ?>
											</select>
											<!-- <input type="text" name="state" class="form-control" placeholder="" value="<?=$state?>" required> -->
										</div>
										
										<div class="col-lg-4">
											<label class="col-form-label">* City</label>
											<input type="text" name="city" class="form-control" placeholder="" value="<?=$city?>" required>
											
										</div>
									</div>
									<div class="form-group row">
										<div class="col-lg-4">
											<label class="col-form-label">* Zip Code (Max 5 digits)</label>
											<input type="text" name="zip_code" class="form-control" placeholder="" value="<?=$zip_code?>" pattern="[0-9]{0,5}" required>
											<!-- <span class="form-text text-muted">Please enter your full name</span> -->
										</div>
									</div>	
									
								</div>

								
							</div>
						</div>

						<div class="kt-portlet__foot">
							<div class="kt-form__actions">
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
						
					</form>

					<!--end::Form-->
				</div>

				<!--end::Portlet-->
			</div>
		</div>
	</div>

	<!-- end:: Content -->
</div>

<script type="text/javascript">
	
$('#add_edit_cpa_user').submit(function(e){
	e.preventDefault();
	var user_id = $("#user_id").val();
	// var new_pass_lnt = $("#password").val().length;
	// if(user_id == ''){
	// 	if(new_pass_lnt < 8){
	// 		$('.pass_val').css('display','block');
	// 		setTimeout(function(){
	// 			$('.pass_val').slideUp(); 
	// 		}, 5000);
	// 		return false;
	// 	}
	// }	
	$('.loader').show();
	var all_data = $('#add_edit_cpa_user').serialize();
	var url = '<?=base_url()?>'+'admin/cpa_user/add_edit_process';
	$.ajax({
        url     : url,
        type    : "POST",
        data    : all_data,
        success : function (response) {
        	
        	if(response != 0){
        		$('.loader').hide();
        		var html_inner = '<div class="alert-text">'+response+'</div>';

        		$('.msg_validation').css('display','block');
        		$('.msg_validation').html(html_inner);

        		window.scrollTo(500,0);

        		setTimeout(function(){
        			$('.msg_validation').slideUp(); 
        			
        		}, 5000);
        	}else{
        		$('.loader').hide();
        		var html_inner = '<div class="alert-text">Your email address already exist</div>';
        		
        		$('.error_validation').css('display','block');
        		$('.error_validation').html(html_inner);

        		window.scrollTo(500,0);

        		setTimeout(function(){
        			$('.error_validation').slideUp(); 
        			
        		}, 5000);	
        	}
        }	
    });
});
</script>					

