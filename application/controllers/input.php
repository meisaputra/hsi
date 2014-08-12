<?php 

if (!defined('BASEPATH')) die();

class Input extends CI_Controller {


	// Form 014 MOU
	public function dataFormMou014(){

		if (isset($_POST) ) {
			$data['post'] = $_POST;
		}
		if (isset($_GET) ) {
			$data['get'] = $_GET;
		}
   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

   		$this->load->model('GetFormDefectModel');
		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('014_mou');
		
		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/dataFormMou014', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


   	public function inputFormMou014(){

   		$data['get'] = $_GET;
   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->model('GetFormDefectModel');

		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('014_mou');

		//get employee name list
		$this->load->model('LoadDataModel');
		$data['employee_name'] = $this->LoadDataModel->loadData( 'employee_name' );
		$data['item_name'] = $this->LoadDataModel->loadData( 'item_name' );

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormMou014', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


	public function editFormMou014(){

   		$data['get'] = $_GET;
   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->model('GetFormDefectModel');

		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('014_mou');

		//get employee name list
		$this->load->model('LoadDataModel');
		$data['employee_name'] = $this->LoadDataModel->loadData( 'employee_name' );
		$data['item_name'] = $this->LoadDataModel->loadData( 'item_name' );

		//get data for editing
		$this->load->model('GetFormEditDataModel');
		$data['data_form'] = $this->GetFormEditDataModel->getFormEditData( '014_mou', $data['get']['master_id'] );
		$data['data_form'] = json_decode(json_encode($data['data_form']), true);
		$data['data_form'] = $data['data_form'][0];


		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/editFormMou014', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}





	// Form 04 JIG
	public function dataFormJig004(){

		if (isset($_POST) ) {
			$data['post'] = $_POST;
		}
		if (isset($_GET) ) {
			$data['get'] = $_GET;
		}

   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

   		$this->load->model('GetFormDefectModel');

		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('004_jig');
		
		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/dataFormJig004', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


	public function inputFormJig004 () {

		$data['get'] = $_GET;
   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->model('GetFormDefectModel');

		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('004_jig');
		
		//get employee name list
		$this->load->model('LoadDataModel');
		$data['employee_name'] = $this->LoadDataModel->loadData( 'employee_name' );
		$data['item_name'] = $this->LoadDataModel->loadData( 'item_name' );

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormJig004', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}

	public function editFormJig004(){

   		$data['get'] = $_GET;
   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->model('GetFormDefectModel');

		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('004_jig');

		//get employee name list
		$this->load->model('LoadDataModel');
		$data['employee_name'] = $this->LoadDataModel->loadData( 'employee_name' );
		$data['item_name'] = $this->LoadDataModel->loadData( 'item_name' );

		//get data for editing
		$this->load->model('GetFormEditDataModel');
		$data['data_form'] = $this->GetFormEditDataModel->getFormEditData( '004_jig', $data['get']['master_id'] );
		$data['data_form'] = json_decode(json_encode($data['data_form']), true);
		$data['data_form'] = $data['data_form'][0];


		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/editFormJig004', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}








	// Form 002 JIG
	public function dataFormJig002(){

		if (isset($_POST) ) {
			$data['post'] = $_POST;
		}
		if (isset($_GET) ) {
			$data['get'] = $_GET;
		}

   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

   		$this->load->model('GetFormDefectModel');

		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('002_jig');
		
		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/dataFormJig002', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}




	public function inputFormJig002 () {

		$data['get'] = $_GET;
   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->model('GetFormDefectModel');

		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('002_jig');
		
		//get employee name list
		$this->load->model('LoadDataModel');
		$data['employee_name'] = $this->LoadDataModel->loadData( 'employee_name' );
		$data['item_name'] = $this->LoadDataModel->loadData( 'item_name' );

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormJig002', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


	public function editFormJig002(){

   		$data['get'] = $_GET;
   		# adding user data in sessiom to array
   		# will used on header, footer, or body content as parameters to make decision
   		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		$this->load->model('GetFormDefectModel');

		$data['defect_data'] = $this->GetFormDefectModel->getFormDefect('002_jig');

		//get employee name list
		$this->load->model('LoadDataModel');
		$data['employee_name'] = $this->LoadDataModel->loadData( 'employee_name' );
		$data['item_name'] = $this->LoadDataModel->loadData( 'item_name' );

		//get data for editing
		$this->load->model('GetFormEditDataModel');
		$data['data_form'] = $this->GetFormEditDataModel->getFormEditData( '002_jig', $data['get']['master_id'] );
		$data['data_form'] = json_decode(json_encode($data['data_form']), true);
		$data['data_form'] = $data['data_form'][0];


		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/editFormJig002', $data);
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}






	public function inputFormCas015 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormCas015');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}
	

	
	public function inputFormBk004 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormBk004');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


	public function inputFormBk007 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormBk007');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}



	public function inputFormGlz003 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormGlz003');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


	public function inputFormGlzXX1 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormGlzXX1');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


	public function inputFormGk004 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormGk004');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


	public function inputFormQc002 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormQc002');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}



	public function inputFormQc012 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormQc012');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}



	public function inputFormDko003 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormDko003');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}


	public function inputFormDkl002 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormDkl002');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}
	

	public function inputFormQc016 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormQc016');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}

	
	public function inputFormQc014 () {

		# adding user data in sessiom to array
		# will used on header, footer, or body content as parameters to make decision
		$data['userdata']['user_id'] = $this->session->userdata('user_id');
   		$data['userdata']['username'] = $this->session->userdata('username');
   		$data['userdata']['level_user'] = $this->session->userdata('level_user');
   		$data['userdata']['allow'] = $this->session->userdata('allow');

		if(!empty($data['userdata']['user_id'])){

		    $this->load->view('header', $data);
			$this->load->view('pages/input/inputFormQc014');
			$this->load->view('footer', $data);

		} else {

		    redirect( base_url().'signin' );

		} 

	}

   
}

