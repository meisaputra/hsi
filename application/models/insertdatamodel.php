<?php  

/**
* 
*/
class InsertDataModel extends CI_Model{
	
	function __construct()
	{
		# code...
	}

	public function insertData( $form_code = '', $form_data = array() ){

		if ( $form_code == "014_mou" ){

			# data for mou 014 master
			$inspect_date = $form_data['inspect_date'];
			$item_code = $form_data['item_code'];
			$employee_id = $form_data['employee_id'];
			$gypsum_type = "";
			$item_ok = $form_data['item_ok'];
			$update_by = $this->session->userdata('user_id');
			$update_time = date('Y-m-d H:i:s');

			//insert into data master
			$query_master = "INSERT INTO 014_mou (inspect_date, item_code, employee_id, gypsum_type, item_ok, update_by, update_time ) VALUES ( '$inspect_date', '$item_code', '$employee_id', '$gypsum_type', '$item_ok', '$update_by', '$update_time' )";
			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// last insert id form table master
				// used as master_id on table detail
				$master_id = $this->db->insert_id();

				// get defect data form form 014_mou
				$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect->num_rows() > 0){

					$defect_data = $query_result_defect->result();

					// looping to insert data for table 014_mou_detail following the defect list data
					foreach ($defect_data as $key => $defect) {

						$defect_code = $defect->defect_code;
						$qty = $form_data[ $defect->defect_code ];

						$query_detail = "INSERT INTO 014_mou_detail ( master_id, defect_code, qty ) VALUES ( '$master_id', '$defect_code', '$qty' )";
						$query_result_detail = $this->db->query($query_detail);

					}

					if ( $query_result_master == true && $query_result_detail == true ) {

						return true;

					} else {

						return false;

					}

				} else {

					return false;

				}
				
			} else {

				return false;

			}

		} elseif ( $form_code == "pareto_defect" ) {

			$defect_code = $form_data['defect_code'];
			$defect_name = $form_data['defect_name'];
			$division = $form_data['division'];
			$forms = $form_data['forms'];

			$query = "INSERT INTO pareto_defect ( division, defect_code, defect_name, forms ) VALUES ( '$division', '$defect_code', '$defect_name', '$forms' )";
			$query = $this->db->query($query);

			if ($query){

				return true;

			} else {

				return false;

			}
			
		} elseif ( $form_code == "004_jig" ){

			# data for mou 014 master
			$inspect_date = $form_data['inspect_date'];
			$item_code = $form_data['item_code'];
			$employee_id = $form_data['employee_id'];
			$item_ok = $form_data['item_ok'];
			$update_by = $this->session->userdata('user_id');
			$update_time = date('Y-m-d H:i:s');

			//insert into data master
			$query_master = "INSERT INTO 004_jig (inspect_date, item_code, employee_id, item_ok, update_by, update_time ) VALUES ( '$inspect_date', '$item_code', '$employee_id', '$item_ok', '$update_by', '$update_time' )";
			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// last insert id form table master
				// used as master_id on table detail
				$master_id = $this->db->insert_id();

				// get defect data form form 004_jig
				$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect->num_rows() > 0){

					$defect_data = $query_result_defect->result();

					// looping to insert data for table 004_jig_detail following the defect list data
					foreach ($defect_data as $key => $defect) {

						$defect_code = $defect->defect_code;
						$qty = $form_data[ $defect->defect_code ];

						$query_detail = "INSERT INTO 004_jig_detail ( master_id, defect_code, qty ) VALUES ( '$master_id', '$defect_code', '$qty' )";
						$query_result_detail = $this->db->query($query_detail);

					}

					if ( $query_result_master == true && $query_result_detail == true ) {

						return true;

					} else {

						return false;

					}

				} else {

					return false;

				}
				
			} else {

				return false;

			}

		} elseif ( $form_code == "002_jig" ){

			# data for mou 014 master
			$inspect_date = $form_data['inspect_date'];
			$inspect_time = $form_data['inspect_time'];
			$item_code = $form_data['item_code'];
			$machine_id = $form_data['machine_id'];
			$employee_id = $form_data['employee_id'];
			$item_ok = $form_data['item_ok'];
			$update_by = $this->session->userdata('user_id');
			$update_time = date('Y-m-d H:i:s');

			//insert into data master
			$query_master = "INSERT INTO 002_jig (inspect_date, inspect_time, item_code, machine_id, employee_id, item_ok, update_by, update_time ) VALUES ( '$inspect_date', '$inspect_time', '$item_code', '$machine_id', '$employee_id', '$item_ok', '$update_by', '$update_time' )";
			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// last insert id form table master
				// used as master_id on table detail
				$master_id = $this->db->insert_id();

				// get defect data form form 002_jig
				$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect->num_rows() > 0){

					$defect_data = $query_result_defect->result();

					// looping to insert data for table 002_jig_detail following the defect list data
					foreach ($defect_data as $key => $defect) {

						$defect_code = $defect->defect_code;
						$qty = $form_data[ $defect->defect_code ];

						$query_detail = "INSERT INTO 002_jig_detail ( master_id, defect_code, qty ) VALUES ( '$master_id', '$defect_code', '$qty' )";
						$query_result_detail = $this->db->query($query_detail);

					}

					if ( $query_result_master == true && $query_result_detail == true ) {

						return true;

					} else {

						return false;

					}

				} else {

					return false;

				}
				
			} else {

				return false;

			}

		} elseif ( $form_code == "data_item" ) {

			$item_code = $form_data['item_code'];
			$item_name = $form_data['item_name'];

			$query_item = "INSERT INTO items ( item_code, item_name ) VALUES ( '$item_code', '$item_name' )";
			$result_query_item = $this->db->query($query_item);

			$item_id = $this->db->insert_id();

			if ($result_query_item){

				//target history
				$item_target = $form_data['item_target'];
				$item_target_period = $form_data['item_target_period'];
				$item_target_valid_from = $form_data['item_target_valid_from'];

				$query_target = "INSERT INTO target_history ( item_id, target_qty, period_time, last_update ) VALUES ( '$item_id', '$item_target', '$item_target_period', '$item_target_valid_from' )";
				$result_query_target = $this->db->query($query_target);

				//weight hostory
				$item_weight = $form_data['item_weight'];
				$item_weight_valid_from = $form_data['item_weight_valid_from'];

				$query_weight = "INSERT INTO weight_history ( item_id, weight, last_update ) VALUES ( '$item_id', '$item_weight', '$item_weight_valid_from' )";
				$result_query_weight = $this->db->query($query_weight);

				if ( $result_query_target && $result_query_weight ) {

					return true;

				} else {

					return false;
					
				}

			} else {

				return false;

			}
			
		}
		
	}
}
?>