<div class="container">
   	<!-- HEADER/DETAIL FORM -->
    <div class="row">
        <div class="col-md-6">
            <div class="well">
                <h2>Laporang Harian Keluar Harian GK</h2>
                <p><strong>About: </strong> Report Form 006.GK</p>
                <p><strong>Departement: </strong> GK</p>
            </div>      
        </div>
        <div class="col-md-6">
            <div class="alert alert-info" role="alert">Original Form : NO.006.F.GK.PROD.REVISI-0</div>
        </div>
    </div>
    
    
    <!-- MAIN CONTENT -->
    <div class="row">
    	<div class="col-md-12">
		    <div class="row">
		        <div class="col-md-12">
					<form class="form-horizontal">
						<table class="table">
							<tr>
								<td>
									<div class="form-group">
										<label for="Tanggal" class="col-xs-4 control-label">Tanggal</label>
										<div class="col-xs-5">
											<input type="text" class="form-control input-sm" id="tanggal" placeholder="Tanggal">
										</div>
									</div>
									<div class="form-group">
										<label for="Item" class="col-xs-4 control-label">Item</label>
										<div class="col-xs-5">
											<input type="text" class="form-control input-sm" id="item" placeholder="Item">
										</div>
									</div>
									<div class="form-group">
										<label for="Pengirim" class="col-xs-4 control-label">Pengirim</label>
										<div class="col-xs-5">
											<input type="text" class="form-control input-sm" id="Pengirim" placeholder="Pengirim">
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="Jumlah" class="col-xs-4 control-label">Jumlah</label>
										<div class="col-xs-5">
											<input type="text" class="form-control input-sm" id="jumlah" placeholder="Jumlah">
										</div>
									</div>
									<div class="form-group">
										<label for="Penerima" class="col-xs-4 control-label">Penerima</label>
										<div class="col-xs-5">
											<input type="text" class="form-control input-sm" id="Penerima" placeholder="Penerima">
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-sm">Simpan</button>
										<button type="submit" class="btn btn-success btn-sm">Batal</button>
									</div>
								</td>
							</tr>
						</table>
					</form>
			    </div>
			</div>
		    <div class="row">
		    	<div class="col-sm-12">
				    <div class="row">
				        <div id='jqxWidget' class="col-sm-12" style="font-size: 12px; font-family: Verdana; float: left;">
				            <div id="jqxgrid_product">
				            </div>
				            <div id="eventlog"></div>
				        </div>
				    </div>
				    <hr>
				    <div class="row">
				        <div id='jqxWidget' class="col-sm-12" style="font-size: 12px; font-family: Verdana; float: left;">
				            <div id="jqxgrid_product_01">
				            </div>
				            <div id="eventlog"></div>
				        </div>
				    </div>
				    <hr>
		    	</div>
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
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxdata.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxbuttons.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxscrollbar.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxmenu.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxcheckbox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxlistbox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxdropdownlist.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.sort.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.pager.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.selection.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.edit.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.columnsresize.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.filter.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxpanel.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var url = "dist/xml/products.xml";
        var url1 = "dist/xml/jumlah.xml";

        // prepare the data
        var source =
        {
            datatype: "xml",
            datafields: [
                { name: 'item', type: 'string' },
                { name: 'jml_pcs_dlm_lory', type: 'string' },
                { name: 'total', type: 'int' }
                
            ],
            root: "Products",
            record: "Product",
            id: 'ProductID',
            url: url
        };
        
        
        var cellsrenderer = function (row, columnfield, value, defaulthtml, columnproperties, rowdata) {
            if (value < 20) {
                return '<span style="margin: 4px; float: ' + columnproperties.cellsalign + '; color: #ff0000;">' + value + '</span>';
            }
            else {
                return '<span style="margin: 4px; float: ' + columnproperties.cellsalign + '; color: #008000;">' + value + '</span>';
            }
        }

        var dataAdapter = new $.jqx.dataAdapter(source, {
            downloadComplete: function (data, status, xhr) { },
            loadComplete: function (data) { },
            loadError: function (xhr, status, error) { }
        });

        
        
        // initialize jqxGrid
        $("#jqxgrid_product").jqxGrid(
        {
            width: '100%',
            source: dataAdapter,                
            pageable: true,
            autoheight: true,
            sortable: true,
            altrows: true,
            enabletooltips: true,
            editable: false,
            selectionmode: 'multiplecellsadvanced',
            columnsresize: true,
            columns: [
            { text: 'Item', datafield: 'item', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '20%' },
            	{ text: 'Jumlah Pcs Dalam Lory', datafield: 'jml_pcs_dlm_lory', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '60%' },
              { text: 'Total', datafield: 'total', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '20%' }
            ]
        });

        // trigger the column resized event.
        $("#jqxgrid").on('columnresized', function (event) {
            var column = event.args.columntext;
            var newwidth = event.args.newwidth
            var oldwidth = event.args.oldwidth;
            $("#eventlog").text("Column: " + column + ", " + "New Width: " + newwidth + ", Old Width: " + oldwidth);
        });
    });
</script>