<?php  

/**
* 
*/
class GetFormDefectModel extends CI_Model{
	
	function __construct()
	{
		# code...
	}

	public function getFormDefect( $form_code = '' ){
		
		$query = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
		$query = $this->db->query($query);

		if ($query->num_rows() > 0){

			$result = $query->result();
			
			return $result;

		} else {

			return false;

		}
		
	}
}


?>