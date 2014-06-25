<?php if (!defined('BASEPATH')) die();

class SignOut extends CI_Controller {

   	public function index(){

   		$this->session->sess_destroy();
        redirect( base_url().'home' );

	}
   
}