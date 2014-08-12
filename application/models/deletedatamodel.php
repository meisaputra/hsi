<?php  

/**
* 
*/
class DeleteDataModel extends CI_Model{
	
	function __construct()
	{
		# code...
	}

	public function deleteData( $form_code = '', $get = array() ){

		if ( $form_code == "014_mou" ){

			# data for mou 014 master
			$master_id = $get['master_id'];

			//insert into data master
			$query_master = "DELETE FROM 014_mou WHERE id = '$master_id' ";

			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// get defect data form form 014_mou
				$query_defect = "DELETE FROM 014_mou_detail WHERE master_id = '$master_id' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect ){

					return true;

				} else {

					return false;

				}
				
			} else {

				return false;

			}

		} elseif ( $form_code == "004_jig" ){

			# data for mou 014 master
			$master_id = $get['master_id'];

			//insert into data master
			$query_master = "DELETE FROM 004_jig WHERE id = '$master_id' ";

			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// get defect data form form 004_jig
				$query_defect = "DELETE FROM 004_jig_detail WHERE master_id = '$master_id' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect ){

					return true;

				} else {

					return false;

				}
				
			} else {

				return false;

			}

		} elseif ( $form_code == "002_jig" ){

			# data for mou 014 master
			$master_id = $get['master_id'];

			//insert into data master
			$query_master = "DELETE FROM 002_jig WHERE id = '$master_id' ";

			$query_result_master = $this->db->query($query_master);

			if ($query_result_master){

				// get defect data form form 002_jig
				$query_defect = "DELETE FROM 002_jig_detail WHERE master_id = '$master_id' ";
				$query_result_defect = $this->db->query($query_defect);

				if ( $query_result_defect ){

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