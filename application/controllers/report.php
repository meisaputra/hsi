<?php 

if (!defined('BASEPATH')) die();

class Report extends CI_Controller {

   	public function reportForm002Mou(){

   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/report/reportForm002Mou', $data);
			# no need include footer

		} else {

		    redirect( base_url().'signin' );

		} 

	}
	
	public function reportForm006Bk (){
		
	}
	public function reportForm005Bk (){
		
	}
	public function reportForm001Glz (){
		
	}
	public function reportForm010Glz (){
		
	}
	public function reportForm004Glz (){
		
	}
	public function reportForm006Gk (){
		
	}
	public function reportForm004Qc (){
		
	}
	public function reportForm013Qc (){
		
	}


   
}

