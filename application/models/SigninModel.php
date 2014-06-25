<?php  

/**
* 
*/
class SigninModel extends CI_Model{
	
	function __construct()
	{
		# code...
	}

	public function getUser( $form_data = array() ){

		$username = $form_data['username'];
		$password = md5($form_data['password']);

		$query = "SELECT username, level_user, allow, id AS user_id FROM users WHERE username = '$username' AND password = '$password'";
		$query = $this->db->query($query);

		if ($query->num_rows() > 0){

			$result = $query->result();
			return $result[0];

		} else {

			return false;

		}
		
	}
}
?>