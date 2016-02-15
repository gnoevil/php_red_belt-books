<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/navigation') ?>
<script type="text/javascript">
	$(document).ready(function(){

		$('#register_form').submit(function(){
			var form = $(this);

			$.post(form.attr('action'), form.serialize(), function(data){
				if(data.status){
					$('#message_box').html('<p class="alert alert-success">'+ data.success_message +'</p>').removeClass('alert alert-error')
				}
				else{
					$('#message_box').addClass('alert alert-error').html(data.error_message)
				}
			}, 'json');

			return false;
		});
	});
</script>
<div class="container">
	<div class="row">
		<div class="span4">
			<div id="message_box"></div>
			<form id="register_form" action="/users/user_registration" method="post" class="form-horizontal">
				<h3>Register</h3>
				<div class="control-group">
					<input type="text" name="first_name" id="first_name" placeholder="First Name">
				</div>
				<div class="control-group">
					<input type="text" name="last_name" id="last_name" placeholder="Last Name">
				</div>
				<div class="control-group">
					<input type="text" name="email" id="email" placeholder="Email Address">
				</div>
				<div class="control-group">
					<input type="password" name="password" id="password" placeholder="Password">
				</div>
				<div class="control-group">
					<input type="password" name="re_password" id="re_password" placeholder="Password Confirmation">
				</div>
				<div class="control-group">
					<input type="submit" value="Register" class="btn btn-success">
				</div>
			</form>
			<form id="signin_form" action="/users/user_login" method="post" class="form-horizontal">
				<h3>Sign in</h3>
				<div class="control-group">
					<input name="email" type="text" name="email" placeholder="Email Address">
				</div>
				<div class="control-group">
					<input name="password" type="password" name="password" placeholder="password">
				</div>
				<div class="control-group">
					<input type="submit" value="Sign in" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
