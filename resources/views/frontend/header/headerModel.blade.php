<!-- header modal -->
<div class="modal fade" id="customer" tabindex="-1" role="dialog" aria-labelledby="customer"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;</button>
				<h4 class="modal-title" id="myModalLabel">Please login</h4>
			</div>
			<div class="modal-body modal-body-sub">
				<div class="row">
					<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul>
									<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
									<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
								</ul>		
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
										<div class="register">
											{!! Form::open(['url' => 'customer-login']) !!}
											<div class="form-group">
												<input name="email" class="email" placeholder="Email Address" type="text" required="">
											</div>

	 										<div class="form-group">
												<input name="password" class="password" placeholder="Password" type="password" required="">
											</div>

	  										<div class="form-group">
												<input type="checkbox" class="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me	
											</div>

												<div class="sign-up">
													<input type="submit" value="Sign in" class="customer_regi" />
												</div>
											{!! Form::close() !!}
										</div>
									</div> 
								</div>	 
								<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
<div class="register">
	{!! Form::open(['url' => 'customer-register', 'method' => 'post']) !!}	<div class="form-group">
		{!! Form::text('firstname', null, ['class' => 'firstname', 'placeholder' => 'Name', 'required' => true]) !!}
	  </div>

	  <div class="form-group">
		{!! Form::email('email', null, ['class' => 'email', 'placeholder' => 'Email Address', 'required' => true]) !!}
	  </div>

	  <div class="form-group">
	  	<input type="password" value="" name="password" class="password" required="" placeholder="Password">
	  </div>

	  <div class="form-group">
	  	<input type="password" value="" name="password_confirmation" class="password_confirmation" required="" placeholder="Password confirm">
	  </div>
		<div class="sign-up">
			<input type="submit" class="customer_regi" />
		</div>
	{!! Form::close() !!}
	<style type="text/css">
		.form-group{margin-bottom: 0;}
		.help-block{margin-bottom: 0;}
	</style>
</div>
									</div>
								</div> 			        					            	      
							</div>	
						</div>
						<script src="{{ asset('public/') }}/js/easyResponsiveTabs.js" type="text/javascript"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});			
						</script>
						<div id="OR" class="hidden-xs">OR</div>
					</div>
					<div class="col-md-4 modal_body_right modal_body_right1">
						<div class="row text-center sign-with">
							<div class="col-md-12">
								<h3 class="other-nw">Sign in with</h3>
							</div>
							<div class="col-md-12">
								<ul class="social">
									<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
									<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
									<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
									<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#myModal88').modal('show');
</script>  
<!-- header modal -->