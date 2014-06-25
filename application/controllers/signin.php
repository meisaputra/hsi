<?php if (!defined('BASEPATH')) die();

class Signin extends CI_Controller {

   	public function index($data = []){

	    $this->load->view('header');
		$this->load->view('pages/signin/signin', $data);
		$this->load->view('footer');

	}

	public function signinAction(){

		$data['form'] = $_POST;

		$this->load->model('SigninModel');

		$data['userdata'] = $this->SigninModel->getUser($data['form']);

		//print_r($result);
		if ($data['userdata']){

			$this->session->set_userdata( $data['userdata'] );

			# if user logedin redirect
			redirect( base_url().'home' );

		} else {

			$data['passed'] = array(

				'msg' => "Sigin failed" 

			);

			$this->index($data['passed']);

		}

	}

   
}

