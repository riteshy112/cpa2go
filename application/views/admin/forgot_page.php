<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>CPA2GO | Login Page v3</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
			var base_url = '<?=base_url()?>';
		</script>

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="<?=base_url()?>assets/css/pages/general/login/login-3.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<?=base_url()?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<?=base_url()?>assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?=base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="<?=base_url()?>assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?=base_url()?>assets/media//bg/bg-3.jpg);">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<a href="#">
									<img src="<?=base_url()?>assets/media/logos/Dark.png">
								</a>
							</div>
							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Change Password</h3>
								</div>

								<p class="email_valid" style="color:red;"></p>
								<form class="" id="forgot_password_data" action="" method="POST">
									<input type="hidden" name="user_id" value="<?=$user_id?>"/>
									<div class="input-group" style="margin:10px">
										<input class="form-control" id="password" type="password" placeholder="New Password" name="password" required>
									</div>
									<div class="input-group" style="margin:10px">
										<input class="form-control" id="conf_password" type="password" placeholder="Confirm Password" name="conf_password" required>
									</div>
									<!-- <div class="row kt-login__extra">
										<div class="col">
											<label class="kt-checkbox">
												<input type="checkbox" name="remember"> Remember me
												<span></span>
											</label>
										</div> 
										<div class="col kt-align-right">
											<a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
										</div>
									</div> -->
									<div class="kt-login__actions" style="margin:10px">
										<button type="submit" id="forgot_password_data" class="btn btn-brand btn-elevate kt-login__btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?=base_url()?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<?=base_url()?>assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>

		<script src="<?=base_url()?>assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>

		<script src="<?=base_url()?>assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>

		<script type="text/javascript">

			$('#forgot_password_data').submit(function(e){

				e.preventDefault();
				var password = $('#password').val();
				var conf_password = $('#conf_password').val();
				var strength = 1;
				var arr = [/.{5,}/, /[a-z]+/, /[0-9]+/, /[A-Z]+/];
				jQuery.map(arr, function(regexp) {
				  if(password.match(regexp))
				     strength++;
				});

				if(strength < 5){
					$('.email_valid').show();
					$('.email_valid').css('color','red');
					$('.email_valid').html('Please enter a stronger password');
		    		setTimeout(function(){
		    			$('.email_valid').slideUp(); 
		    		}, 5000);			
					return false;
				}

				if(password != conf_password){
					$('.email_valid').show();
					$('.email_valid').css('color','red');
					$('.email_valid').html('Please enter the same password');
		    		setTimeout(function(){
		    			$('.email_valid').slideUp(); 
		    		}, 5000);			
					return false;
				}
				var all_data = $('#forgot_password_data').serialize();
				var url = '<?=base_url()?>'+'admin/login/change_forgot';
				$.ajax({
			        url     : url,
			        type    : "POST",
			        data    : all_data,
			        success : function (response) {
			        	
			        	if(response == 1){
			        		//$('.loader').hide();
			        		$('.email_valid').show();
			        		$('.email_valid').css('color','green');
			        		$('.email_valid').html('Successfully changed your password');
			        		setTimeout(function(){
			        			window.location.href = "<?=base_url('admin')?>";
			        		}, 5000);			
			        	}
			        }	
			    });
			});
		</script>


		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?=base_url()?>assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
<!-- 		<script src="<?=base_url()?>assets/js/pages/login/login-general.js" type="text/javascript"></script>
 -->
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
					