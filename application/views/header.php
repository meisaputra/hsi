<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<title>HSI Project</title>
   	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- jQWidgets CSS -->
    <link href="<?php echo base_url('assets/vendor/jqwidgets/styles/jqx.base.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/jqwidgets/styles/jqx.bootstrap.css') ?>" rel="stylesheet">
    <!-- Yamm CSS -->
    <link href="<?php echo base_url('assets/vendor/yamm/yamm.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/custom/css/style.css') ?>" rel="stylesheet">
</head>
<body>

<!-- Grid demo navbar -->
<div class="navbar navbar-default yamm">
	<div class="container">
		<div class="navbar-header">
			<button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">HSI</a>
		</div>
		<div id="navbar-collapse-grid" class="navbar-collapse collapse">
			<?php if(!empty($userdata['user_id'])) : ?>
				<ul class="nav navbar-nav">
					<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Input<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<div style="padding-left:20px;padding-right:20px;">
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Mould</h3>
										<a href="<?php echo base_url('input/inputForm014Mou'); ?>">Form 014.MOU</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Jiggering</h3>
										<a href="<?php echo base_url('input/inputForm004Jig'); ?>">Form 004.JIG</a>
										<a href="<?php echo base_url('input/inputForm002Jig'); ?>">Form 002.JIG</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Casting</h3>
										<a href="<?php echo base_url('input/inputForm015Cas'); ?>">Form 015.CAS</a>
										<a href="<?php echo base_url('input/inputFormXX1Cas'); ?>">Form XX1.CAS</a>
										<a href="<?php echo base_url('input/inputForm001Cas'); ?>">Form 001.CAS</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Biscuit Kiln</h3>
										<a href="<?php echo base_url('input/inputForm004Bk'); ?>">Form 004.BK</a>
										<a href="<?php echo base_url('input/inputForm007Bk'); ?>">Form 007.BK</a>
										<a href="<?php echo base_url('input/inputForm002Bk'); ?>">Form 002.BK</a>
										<a href="<?php echo base_url('input/inputForm008Bk'); ?>">Form 008.BK</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Pad Printing</h3>
										<a href="<?php echo base_url('input/inputForm003Glz'); ?>">Form 003.GLZ</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Glaze</h3>
										<a href="<?php echo base_url('input/inputFormXX1Glz'); ?>">Form XX1.GLZ</a>
										<a href="<?php echo base_url('input/inputForm003Glz'); ?>">Form 003.GLZ</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Glost Kiln</h3>
										<a href="<?php echo base_url('input/inputForm004Gk'); ?>">Form 004.GK</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">GK Inspection</h3>
										<a href="<?php echo base_url('input/inputForm002Qc'); ?>">Form 002.QC</a>
										<a href="<?php echo base_url('input/inputForm012Qc'); ?>">Form 012.QC</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Decal</h3>
										<a href="<?php echo base_url('input/inputForm011Dcl'); ?>">Form 011.DCL</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Decoration</h3>
										<a href="<?php echo base_url('input/inputForm003Dko'); ?>">Form 003.DKO</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">DK Inspection</h3>
										<a href="<?php echo base_url('input/inputForm002Dkl'); ?>">Form 002.DKL</a>
										<a href="<?php echo base_url('input/inputForm015Qc'); ?>">Form 015.QC</a>
										<a href="<?php echo base_url('input/inputForm016Qc'); ?>">Form 016.QC</a>
										<a href="<?php echo base_url('input/inputForm014Qc'); ?>">Form 014.QC</a>
									</div>
									<div class="col-sm-3">
									</div>
								</div>
							</div>
						</ul>
					</li>

					<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Report<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<div style="padding-left:20px;padding-right:20px;">
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Mould</h3>
										<a href="<?php echo base_url('report/reportForm002Mou'); ?>">Form 002.MOU</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Jiggering</h3>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Casting</h3>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Biscuit Kiln</h3>
										<a href="<?php echo base_url('report/reportForm006Bk'); ?>">Form 006.BK</a>
										<a href="<?php echo base_url('report/reportForm005Bk'); ?>">Form 005.BK</a>
									</div>
								</div>
	    						<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Pad Printing</h3>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Glaze</h3>
										<a href="<?php echo base_url('report/reportForm001Glz'); ?>">Form 001.Glz</a>
										<a href="<?php echo base_url('report/reportForm010Glz'); ?>">Form 010.Glz</a>
										<a href="<?php echo base_url('report/reportForm004Glz'); ?>">Form 004.Glz</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Glost Kiln</h3>
										<a href="<?php echo base_url('report/reportForm006Gk'); ?>">Form 006.Gk</a>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">GK Inspection</h3>
										<a href="<?php echo base_url('report/reportForm004Qc'); ?>">Form 004.QC</a>
										<a href="<?php echo base_url('report/reportForm013Qc'); ?>">Form 013.QC</a>
									</div>
								</div>
							</div>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $userdata['username']; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('SignOut'); ?>">Sign Out</a></li>
						</ul>
			        </li>
		      	</ul>
	      	<?php endif; ?>
		</div>
	</div>
</div>
