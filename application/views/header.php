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

    <!-- Bootstrap Select CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap-select/bootstrap-select.css') ?>" rel="stylesheet">

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
					<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Transaction<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<div style="padding-left:20px;padding-right:20px;">
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Mould</h3>
										<li><a href="<?php echo base_url('input/dataFormMou014'); ?>">Form 014.MOU</a></li>
										<!-- <li><a href="<?php echo base_url('report/reportFormMou002'); ?>">Form 002.MOU</a></li> -->
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Jiggering</h3>
										<li><a href="<?php echo base_url('input/dataFormJig004'); ?>">Form 004.JIG</a></li>
										<li><a href="<?php echo base_url('input/dataFormJig002'); ?>">Form 002.JIG</a></li>
										<!-- <li><a href="<?php echo base_url('report/reportFormjig023'); ?>">Form 023.jig</a></li> -->
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Casting</h3>
										<li><a href="<?php echo base_url('input/inputFormCas015'); ?>">Form 015.CAS</a></li>
										<!-- <li><a href="<?php echo base_url('input/inputFormCasXX1'); ?>">Form XX1.CAS</a></li>
										<li><a href="<?php echo base_url('report/reportFormCas001'); ?>">Form 001.Cas</a></li> -->
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Biscuit Kiln</h3>
										<li><a href="<?php echo base_url('input/inputFormBk004'); ?>">Form 004.BK</a></li>
										<li><a href="<?php echo base_url('input/inputFormBk007'); ?>">Form 007.BK</a></li>
										<!-- <li><a href="<?php echo base_url('input/inputFormBk002'); ?>">Form 002.BK</a></li>
										<li><a href="<?php echo base_url('input/inputFormBk008'); ?>">Form 008.BK</a></li>
										<li><a href="<?php echo base_url('report/reportFormBk006'); ?>">Form 006.BK</a></li>
										<li><a href="<?php echo base_url('report/reportFormBk005'); ?>">Form 005.BK</a></li> -->
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Pad Printing</h3>
										<li><a href="<?php echo base_url('input/inputFormGlz003'); ?>">Form 003.GLZ</a></li>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Glaze</h3>
										<li><a href="<?php echo base_url('input/inputFormGlzXX1'); ?>">Form XX1.GLZ</a></li>
										<li><a href="<?php echo base_url('input/inputFormGlz003'); ?>">Form 003.GLZ</a></li>
										<!-- <li><a href="<?php echo base_url('report/reportFormGlz001'); ?>">Form 001.Glz</a></li>
										<li><a href="<?php echo base_url('report/reportFormGlz010'); ?>">Form 010.Glz</a></li>
										<li><a href="<?php echo base_url('report/reportFormGlz004'); ?>">Form 004.Glz</a></li> -->
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Glost Kiln</h3>
										<li><a href="<?php echo base_url('input/inputFormGk004'); ?>">Form 004.GK</a></li>
										<!-- <li><a href="<?php echo base_url('report/reportFormGk005'); ?>">Form 005.Gk</a></li>
										<li><a href="<?php echo base_url('report/reportFormGk006'); ?>">Form 006.Gk</a></li> -->
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">GK Inspection</h3>
										<li><a href="<?php echo base_url('input/inputFormQc002'); ?>">Form 002.QC</a></li>
										<li><a href="<?php echo base_url('input/inputFormQc012'); ?>">Form 012.QC</a></li>
										<!-- <li><a href="<?php echo base_url('report/reportFormQc004'); ?>">Form 004.QC</a></li>
										<li><a href="<?php echo base_url('report/reportFormQc013'); ?>">Form 013.QC</a></li>
										<li><a href="<?php echo base_url('report/reportFormQc015'); ?>">Form 015.QC</a></li> -->
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Decal</h3>
										<li><a href="#">Form XX1.DCL</a></li>
										<!-- <li><a href="<?php echo base_url('input/inputFormDcl011'); ?>">Form 011.DCL</a></li> -->
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Decoration</h3>
										<li><a href="<?php echo base_url('input/inputFormDko003'); ?>">Form 003.DKO</a></li>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">DK Inspection</h3>
										<li><a href="<?php echo base_url('input/inputFormDkl002'); ?>">Form 002.DKL</a></li>
										<li><a href="<?php echo base_url('input/inputFormQc016'); ?>">Form 016.QC</a></li>
										<li><a href="<?php echo base_url('input/inputFormQc014'); ?>">Form 014.QC</a></li>
									</div>
									<div class="col-sm-3">
									</div>
								</div>
							</div>
						</ul>
					</li>

					<!-- <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Report<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<div style="padding-left:20px;padding-right:20px;">
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Mould</h3>
										<li><a href="<?php echo base_url('report/reportFormMou002'); ?>">Form 002.MOU</a></li>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Jiggering</h3>
										<li><a href="<?php echo base_url('report/reportFormjig023'); ?>">Form 023.jig</a></li>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Casting</h3>
										<li><a href="<?php echo base_url('report/reportFormCas001'); ?>">Form 001.Cas</a></li>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Biscuit Kiln</h3>
										<li><a href="<?php echo base_url('report/reportFormBk006'); ?>">Form 006.BK</a></li>
										<li><a href="<?php echo base_url('report/reportFormBk005'); ?>">Form 005.BK</a></li>
									</div>
								</div>
	    						<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Pad Printing</h3>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Glaze</h3>
										<li><a href="<?php echo base_url('report/reportFormGlz001'); ?>">Form 001.Glz</a></li>
										<li><a href="<?php echo base_url('report/reportFormGlz010'); ?>">Form 010.Glz</a></li>
										<li><a href="<?php echo base_url('report/reportFormGlz004'); ?>">Form 004.Glz</a></li>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Glost Kiln</h3>
										<li><a href="<?php echo base_url('report/reportFormGk005'); ?>">Form 005.Gk</a></li>
										<li><a href="<?php echo base_url('report/reportFormGk006'); ?>">Form 006.Gk</a></li>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">GK Inspection</h3>
										<li><a href="<?php echo base_url('report/reportFormQc004'); ?>">Form 004.QC</a></li>
										<li><a href="<?php echo base_url('report/reportFormQc013'); ?>">Form 013.QC</a></li>
										<li><a href="<?php echo base_url('report/reportFormQc015'); ?>">Form 015.QC</a></li>
									</div>
								</div>
							</div>
						</ul>
					</li> -->

					<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Master<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<div style="padding-left:20px;padding-right:20px;">
								<div class="row">
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Pareto Kerusakan</h3>
										<li><a href="<?php echo base_url('master/dataParetoDefect'); ?>">Data Pareto Kerusakan</a></li>
									</div>
									<div class="col-sm-3">
										<h3 style="font-size: 18px;font-weight:bold;">Data Item</h3>
										<li><a href="<?php echo base_url('master/dataDataItem'); ?>">Data Item</a></li>
									</div>
									<div class="col-sm-3">
									</div>
									<div class="col-sm-3">
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
