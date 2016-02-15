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




	</div>
</div>
</div>
</body>
</html>
