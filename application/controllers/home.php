<?php if (!defined('BASEPATH')) die();

class Home extends CI_Controller {

   	public function index(){

   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/home/home', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}
   
}

