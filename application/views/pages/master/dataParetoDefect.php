<div class="container">

    <!-- HEADER/DETAIL FORM -->
    <div class="row">
        <div class="col-md-6">
            <div class="well">
                <h2>Pareto Kerusakan: List</h2>
                <p><strong>About: </strong> Blok info ttg form pareto kerusakan (jika ada).</p>
            </div>      
        </div>
        <div class="col-md-6">
            <div class="alert alert-info" role="alert">Original Form : </div>
        </div>
    </div>
    
    
    <!-- MAIN CONTENT -->
    <div class="row">
        <div class="col-md-12">
        	<div class="row">
		    	<div class="col-sm-12">
		        	<a class="btn btn-sm btn-success" href="<?php echo base_url("master/inputParetoDefect"); ?>">Add data</a>
		        </div>
		    </div>
		    <hr>
		    <div class="row">
		    	<div class="col-sm-12">
				    <div class="row">
				        <div id='jqxWidget' class="col-sm-12" style="font-size: 12px; font-family: Verdana; float: left;">
				            <div id="jqxgrid_product"></div>
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

        var url = "<?php echo base_url('load/loadDataParetoDefect'); ?>";
		
        // prepare the data
		var source = {
		    datatype: "json",
		    datafields: [
		        { name: 'defect_code', type: 'string' },
                { name: 'division', type: 'string' },
                { name: 'defect_name', type: 'string' },
                { name: 'forms', type: 'string' }
		    ],
			url: url,
            filter: function(){
                // update the grid and send a request to the server.
                $("#jqxgrid_product").jqxGrid('updatebounddata', 'filter');
            },
            cache: false
		};
        
        var dataAdapter = new $.jqx.dataAdapter(source, {
            downloadComplete: function (data, status, xhr) { },
            loadComplete: function (data) { },
            loadError: function (xhr, status, error) { }
        });


		var button_renderer = function (row, columnfield, value, defaulthtml, columnproperties) {
            var button = '<a class="btn btn-xs btn-primary" href="' + '<?php echo base_url('master/inputParetoKerusakan'); ?>' +'">Edit</a>' + 
                            '<a class="btn btn-xs btn-danger" href="http://www.google.com">Delete</a>';
            return button;
        };

        
        // initialize jqxGrid
        $("#jqxgrid_product").jqxGrid(
        {
            width: '100%',
            source: dataAdapter,                
            pageable: true,
            sortable: true,
            columnsresize: true,
            showfilterrow: true,
            filterable: true,
            columns: [
              	{ text: 'Kode Kerusakan', datafield: 'defect_code', cellsalign: 'left', width: 200 },
				{ text: 'Bagian', datafield: 'division', cellsalign: 'left', filtertype: 'list', width: 200 },
				{ text: 'Nama Kerusakan', datafield: 'defect_name', cellsalign: 'left', width: 300 },
				{ text: 'Form', datafield: 'forms', cellsalign: 'left', width: 300 },
              	{ text: 'Action', datafield: 'action', cellsalign: 'right', filterable: false, cellsrenderer: button_renderer, width: 200, editable: false }
            ],
            columngroups: [
                { text: 'Product Details', align: 'center', name: 'ProductDetails' }
            ]
        });

    });
</script>