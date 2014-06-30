<?php 

if (!defined('BASEPATH')) die();

class Report extends CI_Controller {

   	public function reportFormMou002(){

   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/report/reportFormMou002', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}
	
	public function reportFormCas001 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormCas001');
		$this->load->view('footer', $data);

	}

	public function reportFormBk006 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormBk006');
		$this->load->view('footer', $data);
	}
	public function reportFormBk005 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormBk005');
		$this->load->view('footer', $data);
	}
	public function reportFormGlz001 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormGlz001');
		$this->load->view('footer', $data);
	}
	public function reportFormGlz010 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormGlz010');
		$this->load->view('footer', $data);
	}
	public function reportFormGlz004 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormGlz004');
		$this->load->view('footer', $data);
	}

	public function reportFormGk005 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormGk005');
		$this->load->view('footer', $data);
	}

	public function reportFormGk006 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormGk006');
		$this->load->view('footer', $data);
	}
	public function reportFormQc004 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormQc004');
		$this->load->view('footer', $data);
	}
	public function reportFormQc013 (){

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');
   		
		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormQc013');
		$this->load->view('footer', $data);
	}

	public function reportFormQc015 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormQc015');
		$this->load->view('footer', $data);

	}

	public function reportFormJig023 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/report/reportFormJig023');
		$this->load->view('footer', $data);

	}


   
}

