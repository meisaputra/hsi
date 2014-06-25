<?php 

if (!defined('BASEPATH')) die();

class Input extends CI_Controller {

   	public function inputForm014Mou(){

   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputForm014Mou', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}

	public function inputForm004Jig () {

	}
	public function inputForm002Jig () {

	}
	public function inputForm015Cas () {

	}
	public function inputFormXX1Cas () {

	}
	public function inputForm001Cas () {

	}
	public function inputForm004Bk () {

	}
	public function inputForm007Bk () {

	}
	public function inputForm002Bk () {

	}
	public function inputForm008Bk () {

	}
	public function inputForm003Glz () {

	}
	public function inputFormXX1Glz () {

	}
	public function inputForm004Gk () {

	}
	public function inputForm002Qc () {

	}
	public function inputForm012Qc () {

	}
	public function inputForm011Dcl () {

	}
	public function inputForm003Dko () {

	}
	public function inputForm002Dkl () {

	}
	public function inputForm015Qc () {

	}
	public function inputForm016Qc () {

	}
	public function inputForm014Qc () {

	}
   
}

