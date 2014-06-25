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