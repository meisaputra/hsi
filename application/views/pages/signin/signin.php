<div class="container">

	<form class="form-signin" role="form" action="<?php echo base_url('signin/signinAction');?>" method="post">
		<h2 class="form-signin-heading">Please sign in</h2>
		<input name="username" type="text" class="form-control" placeholder="Email address" required autofocus>
		<input name="password" type="password" class="form-control" placeholder="Password" required>
		<label class="checkbox">
			<input type="checkbox" value="remember-me"> Remember me
		</label>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

		<?php 

		if ( isset($msg) ) {
		echo $msg;
		}
		?>

	</form>

</div> <!-- /container -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- jQWidgets core JavaScript -->
<script src="<?php echo base_url('assets/vendor/jqwidgets/jqxcore.js') ?>"></script>
<!-- ================================================== -->
<!-- Add addition JavaScript files here -->
<script type="text/javascript">
	$(document).ready(function () {
	// your JavaScript code here.
	});
</script>