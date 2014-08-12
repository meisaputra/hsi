<div class="container">

    <!-- HEADER/DETAIL FORM -->
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <h2>Data Item: List</h2>
                <p><strong>Tentang: </strong></p>
            </div>      
        </div>
    </div>
    
    
    <!-- MAIN CONTENT -->
    <div class="row">
        <div class="col-md-12">
        	<div class="row">
		    	<div class="col-sm-12">
		        	<a class="btn btn-sm btn-success" href="<?php echo base_url("master/inputDataItem"); ?>">Add data</a>
		        </div>
		    </div>
		    <hr>
		    <div class="row">
		    	<div class="col-sm-12">
				    <div class="row">
				        <div id='jqxWidget' class="col-sm-12" style="font-size: 12px; font-family: Verdana; float: left;">
				            <div id="jqxgrid_product">
				            </div>
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
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.aggregates.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function () {

        var url = "<?php echo base_url('load/loadDataItem'); ?>";
		// prepare the data
		var source = {
		    datatype: "json",
		    datafields: [
		        { 
                    name: 'item_code', 
                    type: 'string' 
                },
                { 
                    name: 'item_name', 
                    type: 'string' 
                },
                { 
                    name: 'item_target', 
                    type: 'number' 
                },
                { 
                    name: 'item_target_period', 
                    type: 'string' 
                }, //period_time
                { 
                    name: 'item_target_valid_from', 
                    type: 'date' 
                }, //last_update
                { 
                    name: 'item_weight', 
                    type: 'number' 
                },
                { 
                    name: 'item_weight_valid_from', 
                    type: 'date' 
                } //last_update
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
        $("#jqxgrid_product").jqxGrid({
            width: '100%',
            source: dataAdapter,                
            pageable: true,
            sortable: true,
            columnsresize: true,
            showfilterrow: true,
            filterable: true,
            showaggregates: true,
            showstatusbar: true,
            statusbarheight: 25,
            columns: [
              	{ 
                    text: 'Kode Item', 
                    datafield: 'item_code', 
                    cellsalign: 'left', 
                    width: 100 
                },
				{ 
                    text: 'Nama Item', 
                    datafield: 'item_name', 
                    cellsalign: 'left', 
                    width: 200 
                },
				{ 
                    text: 'Target Qty (pcs)', 
                    datafield: 'item_target', 
                    cellsalign: 'right', 
                    width: 150, 
                    cellsformat: 'f',
                    aggregates: [{ 'Total':
                        function (aggregatedValue, currentValue, column, record) {
                            return aggregatedValue + currentValue;
                        }  
                    }]  
                },
				{ 
                    text: 'Target Period', 
                    datafield: 'item_target_period', 
                    filtertype: 'list', 
                    cellsalign: 'left', 
                    width: 100 
                },
                { 
                    text: 'Target Berlaku Sejak', 
                    datafield: 'item_target_valid_from', 
                    filterable: false, 
                    cellsalign: 'center', 
                    width: 200, 
                    cellsformat: 'dd-MM-yyyy' 
                },
                { 
                    text: 'Berat (kg)', 
                    datafield: 'item_weight', 
                    cellsalign: 'right', 
                    width: 90, 
                    cellsformat: 'n',
                    aggregates: [{ 'Total':
                        function (aggregatedValue, currentValue, column, record) {
                            return aggregatedValue + currentValue;
                        }  
                    }]            
                },
                { 
                    text: 'Berat Berlaku Sejak', 
                    datafield: 'item_weight_valid_from', 
                    filterable: false, 
                    cellsalign: 'center', 
                    width: 200,
                    cellsformat: 'dd-MM-yyyy' 
                },
              	{ 
                    text: 'Action', 
                    datafield: 'action', 
                    cellsalign: 'right', 
                    filterable: false, 
                    cellsrenderer: button_renderer, 
                    width: 100, 
                    editable: false 
                }
            ],
            //enable autoserizecolumn
            ready: function () {
                $("#jqxgrid_product").jqxGrid('autoresizecolumns');
            }
        });
        
        //enable autoserizecolumn
        $("#jqxgrid_product").on('columnreordered', function (event) {
            $("#jqxgrid_product").jqxGrid('autoresizecolumns');
        });
    });
</script>