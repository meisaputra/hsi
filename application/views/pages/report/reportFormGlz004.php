<div class="container">

    <!-- HEADER/DETAIL FORM -->
    <div class="row">
        <div class="col-md-6">
            <div class="well">
                <h2>Laporan Susun Loading dan Kerusakan</h2>
                <p><strong>About: </strong> Report Form 004.GLZ</p>
            </div>      
        </div>
        <div class="col-md-6">
            <div class="alert alert-info" role="alert">Original Form : NO.004.F.GLZ.PROD.REVISI-0</div>
        </div>
    </div>
    <hr>
    
    <!-- MAIN CONTENT -->
    <div class="row">
        <div class="col-md-12">
		    <div class="row">
		        <div id='jqxWidget' class="col-sm-12" style="font-size: 12px; font-family: Verdana; float: left;">
		            <div id="jqxgrid_product">
		            </div>
		            <div id="eventlog"></div>
		        </div>
		    </div>
		    <hr>
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
	                { name: 'pattern', type: 'string' },
	                { name: 'qty', type: 'string' },
	                { name: 'total', type: 'int' },
	                { name: 'jig_r_kaki', type: 'int' },
	                { name: 'jig_r_pgr', type: 'int' },
	                { name: 'jig_r_finish', type: 'int' },
	                { name: 'jig_r_cetak', type: 'int' },
	                { name: 'jig_r_tangkai', type: 'int' },
	                { name: 'cas_bp', type: 'int' },
	                { name: 'cas_r_kaki', type: 'int' },
	                { name: 'cas_r_cetak', type: 'int' },
	                { name: 'cas_r_tpl', type: 'int' },
	                { name: 'bks_r_kaki', type: 'int' },
	                { name: 'bks_r_pgr', type: 'int' },
	                { name: 'pch_bh', type: 'int' },
	                { name: 'pch_pch', type: 'int' },
	                { name: 'pch_r_kaki', type: 'int' },
	                { name: 'pch_r_pgr', type: 'int' },
	                { name: 'boc_awal', type: 'int' },
	                { name: 'boc_akhir', type: 'int' },
	                { name: 'banding', type: 'int' },
	                { name: 'gls', type: 'int' },
	                { name: 'pad', type: 'int' },
	                { name: 'lain_lain', type: 'int' },
	                { name: 'total_rusak', type: 'int' }
	                
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
	            { text: 'Pattern', datafield: 'pattern', cellsalign: 'left', cellsrenderer: cellsrenderer, width: '15%' },
	            { text: 'Qty', datafield: 'qty', cellsalign: 'left', cellsrenderer: cellsrenderer, width: '15%' },
	            	{ text: 'Total', datafield: 'total', cellsalign: 'left', cellsrenderer: cellsrenderer, width: '15%' },
	              { text: 'R. Kaki', datafield: 'jig_r_kaki', columngroup: 'jiggering', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Pgr', datafield: 'jig_r_pgr', columngroup: 'jiggering', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Finish', datafield: 'jig_r_finish', columngroup: 'jiggering', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Cetak', datafield: 'jig_r_cetak', columngroup: 'jiggering', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Tangkai', datafield: 'jig_r_tangkai', columngroup: 'jiggering', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'BP', datafield: 'cas_bp', columngroup: 'casting', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Kaki', datafield: 'cas_r_kaki', columngroup: 'casting', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Cetak', datafield: 'cas_r_cetak', columngroup: 'casting', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Tpl', datafield: 'cas_r_tpl', columngroup: 'casting', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Kaki', datafield: 'bks_r_kaki', columngroup: 'bk_susun', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Pgr', datafield: 'bks_r_pgr', columngroup: 'bk_susun', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
   					{ text: 'BH', datafield: 'pch_bh', columngroup: 'bk_susun', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
   					{ text: 'R. Kaki', datafield: 'pch_r_kaki', columngroup: 'pch', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'R. Pgr', datafield: 'pch_r_pgr', columngroup: 'pch', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Pecah', datafield: 'pch_pch', columngroup: 'pch', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Awal', datafield: 'boc_awal', columngroup: 'bakar_or_crack', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Akhir', datafield: 'boc_akhir', columngroup: 'bakar_or_crack', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Banding', datafield: 'banding', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'GLS', datafield: 'gls', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'PAD', datafield: 'pad', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Banding', datafield: 'band', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Lain-lain', datafield: 'lain_lain', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' },
	              { text: 'Total Rusak', datafield: 'total_rusak', cellsalign: 'right', cellsrenderer: cellsrenderer, width: '10%' }
	            ],
	            columngroups: [
	                { text: 'Jiggering', align: 'center', name: 'jiggering' },
	                { text: 'Casting', align: 'center', name: 'casting' },
	                { text: 'BK Susun', align: 'center', name: 'bk_susun' },
	                { text: 'Pecah', align: 'center', name: 'pch' },
	                { text: 'Bakar/Crack', align: 'center', name: 'bakar_or_crack' }
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