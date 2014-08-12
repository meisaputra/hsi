<div class="container">
    <div class="row">
		<div class="col-md-12">
			<h3>004 BK</h3>
			<center><h3>Blanko Susun Item/Lori</h3></center>
			<form action="<?php echo base_url('action/insertForm004Bk'); ?>"method="post">
			<button type="submit" class="btn btn-primary">Save</button>
			<hr>
			<table class="table table-hover" id="tab_logic">
				<thead>
					
					<tr >
						<th class="text-center">
							Date
						</th>
						<th class="text-center">
							BK
						</th>
						<th class="text-center">
							Item
						</th>
						<th class="text-center">
							Lorry
						</th>
						<th class="text-center">
							In
						</th>
						<th class="text-center">
							Pcs
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						<input type="text" name='date[]'  placeholder='Date' class="form-control input-sm"/>
						</td>
						<td>
						<input type="text" name='bk[]' placeholder='BK' class="form-control input-sm"/>
						</td>
						<td>
						<input type="text" name='item[]' placeholder='Item' class="form-control input-sm"/>
						</td>
						<td>
						<input type="text" name='lorry[]' placeholder='Lorry' class="form-control input-sm"/>
						</td>
						<td>
						<input type="text" name='in[]' placeholder='In' class="form-control input-sm"/>
						</td>
						<td>
						<input type="text" name='pcs[]' placeholder='Psc' class="form-control input-sm"/>
						</td>
						
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
				<tfoot>
					<tr >
						<td class="text-center">
							<a id="add_row" class="btn btn-default btn-sm pull-left">Add Row</a>
						</td>
						<td>
							
						</td>
						<td>
							
						</td>
						<td>
							
						</td>
						<td>
							
						</td>
						<td>
							<a id='delete_row' class="btn btn-default btn-sm pull-right">Delete Row</a>
						</td>
					</tr>
				</tfoot>
			</table>
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

<script type="text/javascript">

$(document).ready(function(){

	var i=1;
	var content = "";

	$("#add_row").click(function(){

		// content = 	"<td><input type='text' name='date_"+i+"'  placeholder='Date' class='form-control input-sm'/></td>"+
		// 			"<td><input type='text' name='bk_"+i+"' placeholder='BK' class='form-control input-sm'/></td>"+
		// 			"<td><input type='text' name='item_"+i+"' placeholder='Item' class='form-control input-sm'/></td>"+
		// 			"<td><input type='text' name='lorry_"+i+"' placeholder='Lorry' class='form-control input-sm'/></td>"+
		// 			"<td><input type='text' name='in_"+i+"' placeholder='In' class='form-control input-sm'/></td>"+
		// 			"<td><input type='text' name='pcs_"+i+"' placeholder='Psc' class='form-control input-sm'/></td>";

		content = 	"<td><input type='text' name='date[]'  placeholder='Date' class='form-control input-sm'/></td>"+
					"<td><input type='text' name='bk[]' placeholder='BK' class='form-control input-sm'/></td>"+
					"<td><input type='text' name='item[]' placeholder='Item' class='form-control input-sm'/></td>"+
					"<td><input type='text' name='lorry[]' placeholder='Lorry' class='form-control input-sm'/></td>"+
					"<td><input type='text' name='in[]' placeholder='In' class='form-control input-sm'/></td>"+
					"<td><input type='text' name='pcs[]' placeholder='Psc' class='form-control input-sm'/></td>";

		$('#addr'+i).html(content);

		$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');

		i++; 

	});

	$("#delete_row").click(function(){
		if(i>1){
			$("#addr"+(i-1)).html('');
			i--;
		}
	});
});

</script>