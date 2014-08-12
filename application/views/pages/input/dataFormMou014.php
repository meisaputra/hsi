<div class="container">    
    <div class="row">
        <div class="col-md-6">
            <div class="well">
                <h2>014.MOU</h2>
                <p><strong>About: </strong> list</p>
            </div>      
        </div>
        <div class="col-md-6">
            <div class="alert alert-info" role="alert">Original Form : </div>
        </div>
    </div>
    <hr>
    
    <!-- MAIN CONTENT -->
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url('input/dataFormMou014'); ?>" method="post">
                <table class="table-condensed">
                    <tr>
                        <th>Periode</th>
                        <th>:</th>
                        <td><input name="period" value="default_range" type="radio" checked/></td>
                        <td colspan="7">
                            <select name="default_range_value" class="form-control input-sm">
                                <?php if ( !empty($post)) : ?>
                                    <option value="today" <?php echo ( $post['default_range_value'] == 'today')? "selected" : ""; ?> >Hari ini</option>
                                    <option value="yesterday" <?php echo ( $post['default_range_value'] == 'yesterday')? "selected" : ""; ?> >Kemarin</option>
                                    <option value="this_week" <?php echo ( $post['default_range_value'] == 'this_week')? "selected" : ""; ?> >Minggu ini</option>
                                    <option value="last_week" <?php echo ( $post['default_range_value'] == 'last_week')? "selected" : ""; ?> >Minggu kemarin</option>
                                    <option value="this_month" <?php echo ( $post['default_range_value'] == 'this_month')? "selected" : ""; ?> >Bulan ini</option>
                                    <option value="last_month" <?php echo ( $post['default_range_value'] == 'last_month')? "selected" : ""; ?> >Bulan kemarin</option>
                                    <option value="this_year" <?php echo ( $post['default_range_value'] == 'this_year')? "selected" : ""; ?> >Tahun ini</option>
                                    <option value="last_year" <?php echo ( $post['default_range_value'] == 'last_year')? "selected" : ""; ?> >Tahun lalu</option>
                                <?php else: ?>
                                    <option value="today">Hari ini</option>
                                    <option value="yesterday">Kemarin</option>
                                    <option value="this_week">Minggu ini</option>
                                    <option value="last_week">Minggu kemarin</option>
                                    <option value="this_month">Bulan ini</option>
                                    <option value="last_month">Bulan kemarin</option>
                                    <option value="this_year">Tahun ini</option>
                                    <option value="last_year">Tahun lalu</option>
                                <?php endif; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <th>:</th>
                        <td><input name="period" value="custom_range" type="radio"/></td>
                        <td>
                            <div id='custom_range_start_value' name="custom_range_start_value"></div>
                        </td>
                        <td>
                            to
                        </td>
                        <td>
                            <div id='custom_range_end_value' name="custom_range_end_value"></div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left" colspan="10">
                            <button class="btn btn-primary btn-sm" type="submit">Cari</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <!-- MAIN CONTENT -->
    <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-12">
              <a class="btn btn-sm btn-success" href="<?php echo base_url("input/inputFormMou014"); ?>">Add data</a>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <?php 

                    if ( isset($get['msg'])){
                        if ($get['msg'] == 1) {

                            echo "<div class='alert alert-success'>delete success</div>";

                        } elseif ($get['msg'] == 0) {

                            echo "<div class='alert alert-danger'>delete failed</div>";

                        }
                    }

                    ?>
                    <?php if ( !empty( $post ) ) : ?>

                        <div class="alert alert-info">
                            <?php
                            if ( $post['period'] == 'default_range' ) {

                                echo "Showing data from <b>". $post['default_range_value'] ."</b>";

                            } else {

                                echo "Showing data from <b>". $post['custom_range_start_value'] ."</b> to <b>". $post['custom_range_end_value'] ."</b>";

                            }
                            ?>
                        </div>
                    <?php endif; ?>
                    
                    <button class="btn btn-sm btn-success" type="button" id='excelExport'>Export to Excel</button>
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
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxinput.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxdatetimeinput.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxcalendar.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxtooltip.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/globalization/globalize.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxdata.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxdata.export.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.export.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxgrid.sort.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap-ajax-typeahead/js/bootstrap-typeahead.js'); ?>"></script> 

<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap-select/bootstrap-select.js'); ?>"></script> 
<?php 

if ( isset( $post ) ) {

    if ( !empty( $post ) ) {

        $url_load_data = "load/loadDataFormMou014?period=". $post['period']
                        ."&default_range_value=". $post['default_range_value']
                        ."&custom_range_start_value=". $post['custom_range_start_value']
                        ."&custom_range_end_value=". $post['custom_range_end_value'];

    } else {

        $url_load_data = "load/loadDataFormMou014?period=default_range&default_range_value=today";

    } 

} else {

    $url_load_data = "load/loadDataFormMou014?period=default_range&default_range_value=today";

}

?>

<script type="text/javascript">
    $(document).ready(function () {
        var url = "<?php echo base_url( $url_load_data ); ?>";
        // prepare the data
        var source = {
            datatype: "json",
            datafields: [
                    { name: 'master_id', type: 'string' },
                    { name: 'inspect_date', type: 'string' },
                    { name: 'item_code', type: 'string' },
                    { name: 'employee_name', type: 'string' },

                    <?php foreach ($defect_data as $key => $defect) : ?>

                        { name: '<?php echo $defect->defect_code; ?>', type: 'string' },

                    <?php endforeach; ?> 

                    { name: 'item_defect', type: 'string' },
                    { name: 'item_ok', type: 'string' },
                    { name: 'update_by', type: 'string' },
                    { name: 'update_time', type: 'string' },
                    { name: 'gypsum_type', type: 'string' }

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
            // var rowID = $('#jqxgrid_product').jqxGrid('getrowid', editrow);
            var master_id = $('#jqxgrid_product').jqxGrid('getcelltext', row, "master_id");
            var button = '<a class="btn btn-xs btn-primary" href="'+ '<?php echo base_url('input/editFormMou014'); ?>' +'?master_id='+ master_id +'">Edit</a>'+ 
                            '<a class="btn btn-xs btn-danger" href="'+ '<?php echo base_url('action/deleteFormMou014'); ?>' +'?master_id='+ master_id +'">Delete</a>';
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
            columns: [
                { text: 'No. Proses', datafield: 'master_id', cellsalign: 'left', width: 100 },
                { text: 'Tanggal', datafield: 'inspect_date', filtertype: 'date', cellsalign: 'left', width: 100 },
                { text: 'Item', datafield: 'item_code', cellsalign: 'left', width: 100 },
                { text: 'Karyawan', datafield: 'employee_name', cellsalign: 'left', width: 100 },

                <?php foreach ($defect_data as $key => $defect) : ?>

                        { text: '<?php echo $defect->defect_name; ?>', datafield: '<?php echo $defect->defect_code; ?>', filterable: false, columngroup: 'defect_type', cellsalign: 'left', width: 100 },

                <?php endforeach; ?> 

                { text: 'Jumlah Rusak', datafield: 'item_defect', filterable: false, cellsalign: 'left', width: 100 },
                { text: 'Jumlah OK', datafield: 'item_ok', filterable: false, cellsalign: 'left', width: 100 },
                { text: 'Target', datafield: 'target', cellsalign: 'left', width: 100 },
                { text: 'Jenis Gypsum', datafield: 'gypsum_type', cellsalign: 'left', width: 100 },
                { text: 'Edit', datafield: 'edit', filterable: false, cellsalign: 'right', cellsrenderer: button_renderer, width: 100, editable: false }
            ],
            columngroups: [
                { text: 'Jenis Kerusakan', align: 'center', name: 'defect_type' }
            ]
        });
    
        $("#excelExport").click(function () {
            $("#jqxgrid_product").jqxGrid('exportdata', 'xls', 'jqxGrid');           
        });

        // Create a jqxDateTimeInput
        $("#custom_range_start_value").jqxDateTimeInput({
            width: '250px', height: '30px',
            formatString: 'yyyy-MM-dd'
        });

        // Create a jqxDateTimeInput
        $("#custom_range_end_value").jqxDateTimeInput({
            width: '250px', height: '30px',
            formatString: 'yyyy-MM-dd'
        });

    });
</script>
