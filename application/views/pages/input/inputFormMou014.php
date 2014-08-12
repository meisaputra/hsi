<div class="container">
    <div class="row">
        <div class="col-sm-12">
    		<legend>Form : 014.MOU</legend>
    	</div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
			<a href="<?php echo base_url("input/dataFormMou014"); ?>" class="btn btn-sm btn-success">Kembali</a>
			
			<?php 

			if ( isset($get['msg'])){
				if ($get['msg'] == 1) {

					echo "<div class='alert alert-success'>input berhasil</div>";

				} elseif ($get['msg'] == 0) {

					echo "<div class='alert alert-danger'>input gagal</div>";

				}
			}

			?>
    		<form action="<?php echo base_url('action/insertFormMou014'); ?>" method="post">
	    		<div class="panel panel-default">
	    			<div class="panel-heading">
	    				<h3 class="panel-title"><strong>Pengecekan Using Mould</strong></h3>
	    			</div>
	    			<div class="panel-body">
	    				<div class="table-responsive">
	    					<table class="table table-condensed table-hover small">
	    							<tr>
	    								<td class="text-left">Tanggal</td>
	        							<td class="text-left">
	        								<div id='inspect_date' name="inspect_date"></div>
	        							</td>
	    							</tr>
	    							<tr>
	    								<td class="text-left">Nama Karyawan</td>
	        							<td class="text-left">
	        								<select id="employee_id" name="employee_id" class="selectpicker form-control input-sm" data-live-search="true">
	        										<option value="">- select one -</option>
	        									<?php foreach ($employee_name as $key => $employee) : ?>
							                        <option value="<?php echo $employee->id; ?>"><?php echo $employee->employee_name; ?></option>
							                    <?php endforeach; ?>
						                    </select>
	        							</td>
	    							</tr>
	    							<tr>
	    								<td class="text-left">Shift</td>
	        							<td class="text-left">
	        								<select class="form-control input-sm" name="shift">
	        									<?php if (date("H:i:s") <= "12:00:00") : ?>
		        									<option value="1" selected>Shift 1</option>
		        									<option value="2">Shift 2</option>
		        								<?php else : ?>
		        									<option value="1">Shift 1</option>
		        									<option value="2" selected>Shift 2</option>
		        								<?php endif; ?>
	        								</select>
	        							</td>
	    							</tr>
	    							<tr>
	    								<td class="text-left">Nama Item</td>
	        							<td class="text-left">
	        								<select id="item_code" name="item_code" class="selectpicker form-control input-sm" data-live-search="true">
	        										<option value="">- select one -</option>
	        									<?php foreach ($item_name as $key => $item) : ?>
							                        <option value="<?php echo $item->item_code; ?>"><?php echo $item->item_name; ?></option>
							                    <?php endforeach; ?>
						                    </select>
	        							</td>
	    							</tr>
	                                <tr>
	        							<td colspan="2" class="text-left info"><strong>Jenis Kerusakan</strong></td>
	                                </tr>

	                                <?php foreach ($defect_data as $key => $defect) : ?>

										<tr>
		    								<td class="text-left"><?php echo $defect->defect_name; ?></td>
		        							<td class="text-left">
		        								<input name="<?php echo $defect->defect_code; ?>" type="text" class="form-control input-sm" placeholder="Jumlah" />
		        							</td>
		    							</tr>


									<?php endforeach; ?> 
	    							
	                                <tr>
	        							<td colspan="2" class="text-left info"><strong>Jumlah Keseluruhan</strong></td>
	                                </tr>
	    							<tr>
	    								<td class="text-left">Item yang Baik</td>
	        							<td class="text-left">
	        								<input name="item_ok" type="text" class="form-control input-sm" placeholder="Jumlah" />
	        							</td>
	    							</tr>
	    					</table>
	    				</div>
	    			</div>
	    			<div class="panel-body">
						<button class="btn btn-primary btn-sm" type="submit">Simpan</button>
	    			</div>
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

<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap-ajax-typeahead/js/bootstrap-typeahead.js'); ?>"></script> 

<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap-select/bootstrap-select.js'); ?>"></script> 

<script type="text/javascript">
    $(document).ready(function () {              
        // Create a jqxDateTimeInput
      	$("#inspect_date").jqxDateTimeInput({
      		width: '250px', height: '30px',
      		formatString: 'yyyy-MM-dd'
      	});

  	 	$('#employee_id').selectpicker();

  	 	$('#item_code').selectpicker();
    });
</script>