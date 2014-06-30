<div class="container">
	<div class="panel-heading">
		<h3>007 BK</h3>
	</div>
	<BR/>
			<center><h3>Laporan Kerusakan Biskuit</h3></center>
	<center>
	<form class="form-horizontal">
		<table class="table">
			<tr>
				<td>
					<div class="form-group">
						<label for="Item" class="col-xs-4 control-label">Item</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="item" placeholder="Item">
						</div>
					</div>
				</td>
				<td>
					<div class="form-group">
						<label for="Shift" class="col-xs-4 control-label">Shift</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="shift" placeholder="Shift">
						</div>
					</div>
				</td>
			</tr>
		</table>
	<div id='jqxWidget'>
        <div id='jqxTabs'>
			<ul class="nav nav-tabs">
				<li class="active"><a href="#jigring">Jigring & Finishing</a></li>
				<li><a href="#bk_susun">BK Susun</a></li>
				<li><a href="#bongkar">Bongkar</a></li>
			</ul><p>
			<div>
				<form class="form-horizontal">
					<div class="form-group">
						<label for="Retak Kaki" class="col-xs-4 control-label">Retak Kaki</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="retak_kaki" placeholder="Retak Kaki">
						</div>
					</div>
					<div class="form-group">
						<label for="Retak Pinggir" class="col-xs-4 control-label">Retak Pinggir</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="retak_pinggir" placeholder="Retak Pinggir">
						</div>
					</div>
					<div class="form-group">
						<label for="Rusak Cetak" class="col-xs-4 control-label">Rusak Cetak</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="rusak_cetak" placeholder="Rusak Cetak">
						</div>
					</div>
					<div class="form-group">
						<label for="Tempel" class="col-xs-4 control-label">Tempel</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="tempel" placeholder="Tempel">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-7">
							<button type="submit" class="btn btn-success">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="submit" class="btn btn-success">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
						</div>
					</div>
				</form>
			</div>
			<div>
				<form class="form-horizontal">
					<div class="form-group">
						<label for="Retak Kaki" class="col-xs-4 control-label">Retak Kaki</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="retak_kaki" placeholder="Retak Kaki">
						</div>
					</div>
					<div class="form-group">
						<label for="Retak Pinggir" class="col-xs-4 control-label">Retak Pinggir</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="retak_pinggir" placeholder="Retak Pinggir">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-7">
							<button type="submit" class="btn btn-success">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="submit" class="btn btn-success">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
						</div>
					</div>
				</form>
			</div>
			<div>
				<form class="form-horizontal">
					<div class="form-group">
						<label for="Retak Kaki" class="col-xs-4 control-label">Retak Kaki</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="retak_kaki" placeholder="Retak Kaki">
						</div>
					</div>
					<div class="form-group">
						<label for="Retak Pinggir" class="col-xs-4 control-label">Retak Pinggir</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="retak_pinggir" placeholder="Retak Pinggir">
						</div>
					</div>
					<div class="form-group">
						<label for="Pecah" class="col-xs-4 control-label">Pecah</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="pecah" placeholder="Pecah">
						</div>
					</div>
					<div class="form-group">
						<label for="Handle" class="col-xs-4 control-label">Handle</label>
						<div class="col-xs-4">
							<input type="text" class="form-control" id="handle" placeholder="Handle">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-10">
							<button type="submit" class="btn btn-success">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="submit" class="btn btn-success">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
						</div>
					</div>
				</form></center>
			</div>
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
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxcheckbox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxtabs.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Create jqxTabs.
        $('#jqxTabs').jqxTabs({ width: '100%', height: 500, position: 'top'});
        $('#settings div').css('margin-top', '10px');
        $('#animation').jqxCheckBox({ theme: theme });
        $('#contentAnimation').jqxCheckBox({ theme: theme });

        $('#animation').on('change', function (event) {
            var checked = event.args.checked;
            $('#jqxTabs').jqxTabs({ selectionTracker: checked });
        });
       
        $('#contentAnimation').on('change', function (event) {
            var checked = event.args.checked;
            if (checked) {
                $('#jqxTabs').jqxTabs({ animationType: 'fade' });
            }
            else {
                $('#jqxTabs').jqxTabs({ animationType: 'none' });
            }
        });
    });
</script>                               		