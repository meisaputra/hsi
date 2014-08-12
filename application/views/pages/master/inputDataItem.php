<div class="container">
	<div class="row">
		<div class="col-md-12">
			<legend>Data Item</legend>
			<h3>Data Item: Tambah data</h3>
			<div class="alert alert-info">Blok info ttg form data item (jika ada)</div>
			<a href="<?php echo base_url("master/dataDataItem"); ?>" class="btn btn-sm btn-success">Kembali</a>
			
			<div class="row">
				<form id="form1" name="form1" method="post" action="<?php echo base_url("action/insertDataItem"); ?>">
				<div class="col-md-3">
					<legend>Item</legend>
					<div class="form-group">
					    <label for="">Kode Item</label>
					    <input type="text" class="form-control input-sm" name="item_code" placeholder="Item Code">
				  	</div>
				  	<div class="form-group">
					    <label for="">Nama Item</label>
					    <input type="text" class="form-control input-sm" name="item_name" placeholder="Item Name">
				  	</div>
			  	</div>

			  	<div class="col-md-3">
				  	<legend>Target</legend>
				  	<div class="form-group">
					    <label for="">Target</label>
					    <input type="text" class="form-control input-sm" name="item_target" placeholder="Target">
				  	</div>

				  	<div class="form-group">
					    <label for="">Periode Target</label>
					    <select class="form-control input-sm" name="item_target_period">
				            <option value="daily" >Harian</option>
				            <option value="weekly" >Mingguan</option>
				            <option value="monthly" >Bulanan</option>
			          	</select>
				  	</div>
				  	<div class="form-group">
					    <label for="">Berlaku Sejak</label>
					    <div id='item_target_valid_from' name="item_target_valid_from"></div>
				  	</div>
			  	</div>

			  	<div class="col-md-3">
				  	<legend>Weight</legend>
				  	<div class="form-group">
				  		<label>Berat Item</label>
				        <input type="text" class="form-control input-sm" name="item_weight" placeholder="Berat Item">
				  	</div>
				  	<div class="form-group">
				  		<label>Berlaku Sejak</label>
				  		<div id='item_weight_valid_from' name="item_weight_valid_from"></div>
				  	</div>
		      	</div>

		      	<div class="col-md-3">
			      	<button type="submit" name="button" id="button" class="btn btn-sm btn-primary">Simpan</button>
			      	<a href="<?php echo base_url("master/dataDataItem"); ?>" class="btn btn-sm btn-danger">Batal</a>
			      	<?php 

					if ( isset($get['msg'])){
						if ($get['msg'] == 1) {

							echo "<div class='alert alert-success'>input berhasil</div>";

						} elseif ($get['msg'] == 0) {

							echo "<div class='alert alert-danger'>input gagal</div>";

						}
					}

					?>

		      	</div>

			</form>
		</div>
	</div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- jQWidgets core JavaScript -->
<script src="<?php echo base_url('assets/vendor/jqwidgets/jqxcore.js') ?>"></script>
<!-- ================================================== -->

<!-- Add addition JavaScript files here -->
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxinput.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxdatetimeinput.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxcalendar.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxtooltip.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/globalization/globalize.js'); ?>"></script> 
<script type="text/javascript">
    $(document).ready(function () {              
        // Create a jqxDateTimeInput
      	$("#item_weight_valid_from").jqxDateTimeInput({
      		width: '250px', height: '30px',
      		formatString: 'yyyy-MM-dd'
      	});

      	$("#item_target_valid_from").jqxDateTimeInput({
      		width: '250px', height: '30px',
      		formatString: 'yyyy-MM-dd'
      	});
    });
</script>
