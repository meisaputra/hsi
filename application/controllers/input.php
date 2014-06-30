<?php 

if (!defined('BASEPATH')) die();

class Input extends CI_Controller {

   	public function inputFormMou014(){

   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormMou014', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}

	public function inputFormJig004 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormJig004');
		$this->load->view('footer', $data);
	}
	public function inputFormJig002 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormJig002');
		$this->load->view('footer', $data);

	}
	public function inputFormCas015 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormCas015');
		$this->load->view('footer', $data);

	}
	public function inputFormCasXX1 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormCasXX1');
		$this->load->view('footer', $data);

	}
	
	public function inputFormBk004 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormBk004');
		$this->load->view('footer', $data);

	}
	public function inputFormBk007 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormBk007');
		$this->load->view('footer', $data);

	}
	public function inputFormBk002 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormBk002');
		$this->load->view('footer', $data);

	}
	public function inputFormBk008 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormBk008');
		$this->load->view('footer', $data);

	}
	public function inputFormGlz003 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormGlz003');
		$this->load->view('footer', $data);

	}
	public function inputFormGlzXX1 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormGlzXX1');
		$this->load->view('footer', $data);

	}
	public function inputFormGk004 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormGk004');
		$this->load->view('footer', $data);

	}
	public function inputFormQc002 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormQc002');
		$this->load->view('footer', $data);

	}
	public function inputFormQc012 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormQc012');
		$this->load->view('footer', $data);

	}
	public function inputFormDcl011 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormDcl011');
		$this->load->view('footer', $data);

	}
	public function inputFormDko003 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormDko003');
		$this->load->view('footer', $data);

	}
	public function inputFormDkl002 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormDkl002');
		$this->load->view('footer', $data);

	}
	
	public function inputFormQc016 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormQc016');
		$this->load->view('footer', $data);

	}
	public function inputFormQc014 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/input/inputFormQc014');
		$this->load->view('footer', $data);

	}
   
}

