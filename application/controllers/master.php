<?php 

if (!defined('BASEPATH')) die();

class Master extends CI_Controller {

	public function inputParetoDefect () {

		$data['get'] = $_GET;
		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/master/inputParetoDefect');
		$this->load->view('footer', $data);

	}

	public function dataParetoDefect () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/master/dataParetoDefect');
		$this->load->view('footer', $data);

	}


	public function inputDataItem () {

		$data['get'] = $_GET;
		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/master/inputDataItem');
		$this->load->view('footer', $data);

	}

	public function dataDataItem () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->view('header', $data);
		$this->load->view('pages/master/dataDataItem');
		$this->load->view('footer', $data);

	}
   
}

