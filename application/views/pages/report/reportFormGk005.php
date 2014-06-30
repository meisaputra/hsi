<div class="container">

    <!-- HEADER/DETAIL FORM -->
    <div class="row">
        <div class="col-md-6">
            <div class="well">
                <h2>Laporan Harian Polos (Biscuit)</h2>
                <p><strong>About: </strong> Report Form 005.GK</p>
                <p><strong>Departement: </strong> GK</p>
            </div>      
        </div>
        <div class="col-md-6">
            <div class="alert alert-info" role="alert">Original Form : NO.005.F.BK.PROD.REVISI-0</div>
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
											<input type="text" class="form-control" id="tanggal" placeholder="tanggal">
										</div>
									</div>
									<div class="form-group">
										<label for="BK#" class="col-xs-4 control-label">BK#</label>
										<div class="col-xs-5">
											<input type="text" class="form-control" id="bk" placeholder="BK#">
										</div>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="Shift" class="col-xs-4 control-label">Shift</label>
										<div class="col-xs-5">
											<input type="text" class="form-control" id="Shift" placeholder="Shift">
										</div>
									</div>
									<div class="form-group">
										<label for="Jam" class="col-xs-4 control-label"></label>
									</div>
									<div class="form-group">
										<div class="col-xs-offset-5 col-xs-4">
											<button type="submit" class="btn btn-success">Simpan</button>
											<button type="submit" class="btn btn-success">Batal</button>
										</div>
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
	                { name: 'code', type: 'string' },
	                { name: 'item', type: 'string' },
	                { name: 'ctk_byk_lulus', type: 'int' },
	                { name: 'ctk_byk_gagal', type: 'int' },
	                { name: 'ctk_total', type: 'int' },
	                { name: 'ctk_persentase_gagal', type: 'int' },
	                { name: 'ctk_bintik_hitam', type: 'int' },
	                { name: 'ctk_rusak_cetak', type: 'int' },
	                { name: 'ctk_retak_tepi', type: 'int' },
	                { name: 'ctk_lubang_jarum', type: 'int' },
	                { name: 'ctk_retak_tempel', type: 'int' },
	                { name: 'ctk_pori_pori', type: 'int' },
	                { name: 'ctk_berubah_bentuk', type: 'int' },
	                { name: 'fns_rusak_finishing', type: 'int' },
	                { name: 'fns_tepung_body', type: 'int' },
	                { name: 'klb_rusak_pinggir', type: 'int' },
	                { name: 'klb_rusak_gagang', type: 'int' },
	                { name: 'klb_rusak_terbakar', type: 'int' },
	                { name: 'klb_kelalaian_menyusun', type: 'int' },
	                { name: 'klb_rusak_siwa', type: 'int' },
	                { name: 'klb_rusak_bawah', type: 'int' }
	                
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
	            { text: 'Code', datafield: 'code', cellsalign: 'left', cellsrenderer: cellsrenderer, width: '15%' },
	            { text: 'Item', datafield: 'item', cellsalign: 'left', cellsrenderer: cellsrenderer, width: '15%' },
	            	{ text: 'Banyaknya Lulus', datafield: 'ctk_byk_lulus', columngroup: 'ctk', cellsalign: 'left', cellsrenderer: cellsrenderer, width: '15%' },
	              { text: 'Banyaknya Gagal', datafield: 'ctk_byk_gagal', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Total', datafield: 'ctk_total', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Persentase Gagal', datafield: 'ctk_persentase_gagal', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Bintik Hitam', datafield: 'ctk_bintik_hitam', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Rusak Cetak', datafield: 'ctk_rusak_cetak', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Retak Tepi', datafield: 'ctk_retak_tepi', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Lubang Jarum', datafield: 'ctk_lubang_jarum', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Retak Tempel', datafield: 'ctk_retak_tempel', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Pori-pori', datafield: 'ctk_pori_pori', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Berubah Bentuk', datafield: 'ctk_berubah_bentuk', columngroup: 'ctk', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Rusak Finishing', datafield: 'fns_rusak_finishing', columngroup: 'fns', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
   					{ text: 'Tepung Body', datafield: 'fns_tepung_body', columngroup: 'fns', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
   					{ text: 'Rusak Pinggir', datafield: 'klb_rusak_pinggir', columngroup: 'klb', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Rusak Gagang', datafield: 'klb_rusak_gagang', columngroup: 'klb', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Rusak Terbakar', datafield: 'klb_rusak_terbakar', columngroup: 'klb', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Kelalaian Menyusun', datafield: 'klb_kelalaian_menyusun', columngroup: 'klb', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Rusak Siwa', datafield: 'klb_rusak_siwa', columngroup: 'klb', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Rusak Bawah', datafield: 'klb_rusak_bawah', columngroup: 'klb', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' }
	            ],
	            columngroups: [
	                { text: 'Cetak', align: 'center', name: 'ctk' },
	                { text: 'Finish', align: 'center', name: 'fns' },
	                { text: 'Keluar BK', align: 'center', name: 'klb' },
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