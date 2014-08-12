<?php  

/**
* 
*/
class GetFormEditDataModel extends CI_Model{
	
	function __construct()
	{
		# code...
	}

	public function getFormEditData( $form_code = '', $id = '' ){

		if ( $form_code == "014_mou" ) {
			// get defect data form form 014_mou
			$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
			$query_result_defect = $this->db->query($query_defect);

			if ( $query_result_defect->num_rows() > 0){

				$result = array();
				$defect_data = $query_result_defect->result();

				$query_detail = "SELECT * FROM ( 
									SELECT 
										master_id,
										inspect_date,
										item_code,
										employee_id,
										employee_name,";

				// looping to insert data for table 014_mou_detail following the defect list data
				foreach ($defect_data as $key => $defect) {

					$defect_code = $defect->defect_code;
					$query_detail .= "SUM(CASE WHEN defect_code = '$defect_code' THEN qty ELSE 0 END) AS $defect_code, ";
									
				}

				$query_detail .= "SUM(qty) AS item_defect,
									item_ok,
									update_by,
									update_time,
									gypsum_type 
									FROM 014_mou_detail 
									LEFT JOIN 014_mou ON 014_mou.id = 014_mou_detail.master_id 
									LEFT JOIN employee_master ON 014_mou.employee_id = employee_master.id  
									GROUP BY master_id
								) AS data_table WHERE master_id = '$id'";

				$query_result_detail = $this->db->query( $query_detail );
				

				if ($query_result_detail->num_rows() > 0){

					$result = $query_result_detail->result();
					
					return $result;

				} else {

					return false;

				}
			}
		} elseif ( $form_code == "004_jig" ) {
			// get defect data form form 004_jig
			$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
			$query_result_defect = $this->db->query($query_defect);

			if ( $query_result_defect->num_rows() > 0){

				$result = array();
				$defect_data = $query_result_defect->result();

				$query_detail = "SELECT * FROM ( 
									SELECT 
										master_id,
										inspect_date,
										item_code,
										employee_id,
										employee_name,";

				// looping to insert data for table 004_jig_detail following the defect list data
				foreach ($defect_data as $key => $defect) {

					$defect_code = $defect->defect_code;
					$query_detail .= "SUM(CASE WHEN defect_code = '$defect_code' THEN qty ELSE 0 END) AS $defect_code, ";
									
				}

				$query_detail .= "SUM(qty) AS item_defect,
									item_ok,
									update_by,
									update_time 
									FROM 004_jig_detail 
									LEFT JOIN 004_jig ON 004_jig.id = 004_jig_detail.master_id 
									LEFT JOIN employee_master ON 004_jig.employee_id = employee_master.id  
									GROUP BY master_id
								) AS data_table WHERE master_id = '$id'";

				$query_result_detail = $this->db->query( $query_detail );
				

				if ($query_result_detail->num_rows() > 0){

					$result = $query_result_detail->result();
					
					return $result;

				} else {

					return false;

				}
			}
		} elseif ( $form_code == "002_jig" ) {
			// get defect data form form 002_jig
			$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
			$query_result_defect = $this->db->query($query_defect);

			if ( $query_result_defect->num_rows() > 0){

				$result = array();
				$defect_data = $query_result_defect->result();

				$query_detail = "SELECT * FROM ( 
									SELECT 
										master_id,
										inspect_date,
										inspect_time,
										item_code,
										machine_id,
										employee_id,
										employee_name,";

				// looping to insert data for table 002_jig_detail following the defect list data
				foreach ($defect_data as $key => $defect) {

					$defect_code = $defect->defect_code;
					$query_detail .= "SUM(CASE WHEN defect_code = '$defect_code' THEN qty ELSE 0 END) AS $defect_code, ";
									
				}

				$query_detail .= "SUM(qty) AS item_defect,
									item_ok,
									update_by,
									update_time 
									FROM 002_jig_detail 
									LEFT JOIN 002_jig ON 002_jig.id = 002_jig_detail.master_id 
									LEFT JOIN employee_master ON 002_jig.employee_id = employee_master.id  
									GROUP BY master_id
								) AS data_table WHERE master_id = '$id'";

				$query_result_detail = $this->db->query( $query_detail );
				

				if ($query_result_detail->num_rows() > 0){

					$result = $query_result_detail->result();
					
					return $result;

				} else {

					return false;

				}
			}
		}
	}
}


?>