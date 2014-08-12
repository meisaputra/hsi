<?php  

/**
* 
*/
class EditDataModel extends CI_Model{
	
	function __construct()
	{
		# code...
	}

	public function editData( $form_code = '', $form_data = array() ){

		if ( $form_code == "014_mou" ){

			# data for mou 014 master
			$master_id = $form_data['master_id'];
			$inspect_date = $form_data['inspect_date'];
			$item_code = $form_data['item_code'];
			$employee_id = $form_data['employee_id'];
			$gypsum_type = "";
			$item_ok = $form_data['item_ok'];
			$update_by = $this->session->userdata('user_id');
			$update_time = date('Y-m-d H:i:s');

			//insert into data master
			$query_master = "UPDATE 014_mou SET 
				inspect_date = '$inspect_date',
				item_code = '$item_code', 
				employee_id = '$employee_id', 
				gypsum_type = '$gypsum_type', 
				item_ok = '$item_ok', 
				update_by = '$update_by', 
				update_time = '$update_time' 
				WHERE id = '$master_id' ";

			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// get defect data form form 014_mou
				$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect->num_rows() > 0){

					$defect_data = $query_result_defect->result();

					// looping to insert data for table 014_mou_detail following the defect list data
					foreach ($defect_data as $key => $defect) {

						$defect_code = $defect->defect_code;
						$qty = $form_data[ $defect->defect_code ];

						$query_detail = "UPDATE 014_mou_detail SET qty = $qty WHERE master_id = '$master_id' AND defect_code = '$defect_code' ";
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

		} elseif ( $form_code == "004_jig" ){

			# data for mou 014 master
			$master_id = $form_data['master_id'];
			$inspect_date = $form_data['inspect_date'];
			$item_code = $form_data['item_code'];
			$employee_id = $form_data['employee_id'];
			$item_ok = $form_data['item_ok'];
			$update_by = $this->session->userdata('user_id');
			$update_time = date('Y-m-d H:i:s');

			//insert into data master
			$query_master = "UPDATE 004_jig SET 
				inspect_date = '$inspect_date',
				item_code = '$item_code', 
				employee_id = '$employee_id',
				item_ok = '$item_ok', 
				update_by = '$update_by', 
				update_time = '$update_time' 
				WHERE id = '$master_id' ";

			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// get defect data form form 004_jig
				$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect->num_rows() > 0){

					$defect_data = $query_result_defect->result();

					// looping to insert data for table 004_jig_detail following the defect list data
					foreach ($defect_data as $key => $defect) {

						$defect_code = $defect->defect_code;
						$qty = $form_data[ $defect->defect_code ];

						$query_detail = "UPDATE 004_jig_detail SET qty = $qty WHERE master_id = '$master_id' AND defect_code = '$defect_code' ";
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
			$master_id = $form_data['master_id'];
			$inspect_date = $form_data['inspect_date'];
			// $inspect_time = $form_data['inspect_time'];
			$item_code = $form_data['item_code'];
			$machine_id = $form_data['machine_id'];
			$employee_id = $form_data['employee_id'];
			$item_ok = $form_data['item_ok'];
			$update_by = $this->session->userdata('user_id');
			$update_time = date('Y-m-d H:i:s');

			//insert into data master
			$query_master = "UPDATE 002_jig SET 
				inspect_date = '$inspect_date',
				-- inspect_time = '$inspect_time',
				item_code = '$item_code', 
				machine_id = '$machine_id',
				employee_id = '$employee_id',
				item_ok = '$item_ok', 
				update_by = '$update_by', 
				update_time = '$update_time' 
				WHERE id = '$master_id' ";

			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// get defect data form form 002_jig
				$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect->num_rows() > 0){

					$defect_data = $query_result_defect->result();

					// looping to insert data for table 002_jig_detail following the defect list data
					foreach ($defect_data as $key => $defect) {

						$defect_code = $defect->defect_code;
						$qty = $form_data[ $defect->defect_code ];

						$query_detail = "UPDATE 002_jig_detail SET qty = $qty WHERE master_id = '$master_id' AND defect_code = '$defect_code' ";
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

		} 
		
	}
}
?>