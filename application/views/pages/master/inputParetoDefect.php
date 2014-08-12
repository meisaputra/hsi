<div class="container">
	<div class="row">
		<div class="col-md-3">
			<legend>014.MOU : Edit</legend>
			<h3>Pareto Kerusakan: Tambah data</h3>
			<div class="alert alert-info">Blok info ttg form pareto kerusakan (jika ada)</div>
			<a href="<?php echo base_url("master/dataParetoDefect"); ?>" class="btn btn-sm btn-success">Kembali</a>
			
			<?php 

			if ( isset($get['msg'])){
				if ($get['msg'] == 1) {

					echo "<div class='alert alert-success'>input berhasil</div>";

				} elseif ($get['msg'] == 0) {

					echo "<div class='alert alert-danger'>input gagal</div>";

				}
			}

			?>

			<form id="form1" name="form1" method="post" action="<?php echo base_url("action/insertParetoDefect"); ?>">
				<div class="form-group">
				    <label for="">Kode Kerusakan</label>
				    <input type="text" class="form-control input-sm" name="defect_code" placeholder="Kode Kerusakan">
			  	</div>
			  	<div class="form-group">
				    <label for="">Nama Kerusakan</label>
				    <input type="text" class="form-control input-sm" name="defect_name" placeholder="Nama Kerusakan">
			  	</div>

			  	<div class="form-group">
				    <label for="">Bagian</label>
				    <select class="form-control input-sm" name="division" id="division">
			            <option>Mould</option>
			            <option>Jiggering</option>
			            <option>Casting</option>
			            <option>Pad Printing</option>
			            <option>Biskuit Kiln</option>
			            <option>Glost Kiln</option>
			            <option>GK Inspection</option>
			            <option>Decal</option>
			            <option>Decoration</option>
			            <option>DK Inspection</option>
			          </select>
			  	</div>

			  	<div class="form-group">
			  		<label>Form</label>
			  		<div id='content'>
				       <input type="text" id="input" name="forms" class="form-control input-sm"/>
				    </div>
			  	</div>
		      	<button type="submit" name="button" id="button" class="btn btn-sm btn-primary">Simpan</button>
		      	<button type="submit" name="button" id="button" class="btn btn-sm btn-danger">Batal</button>
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
<script type="text/javascript">
    $(document).ready(function () {
                
        var countries = new Array("004_mou", "002_bk", "004_bk");
        $("#input").jqxInput({ placeHolder: "Enter a form name", height: 25, width: 250, 
            source: function (query, response) {
                var item = query.split(/,\s*/).pop();
                // update the search query.
                $("#input").jqxInput({ query: item });
                response(countries);
            },
            renderer: function (itemValue, inputValue) {
                var terms = inputValue.split(/,\s*/);
                // remove the current input
                terms.pop();
                // add the selected item
                terms.push(itemValue);
                // add placeholder to get the comma-and-space at the end
                terms.push("");
                var value = terms.join(", ");
                return value;
            }
        });
    });
</script>
