<?php if (!defined('BASEPATH')) die();


# class for any load data
class Load extends CI_Controller {

	public function loadDataParetoDefect(){

		$data['get'] = $_GET; // for filtering

		$this->load->model('LoadDataModel');

		$data['data_passed'] = $this->LoadDataModel->loadData( 'pareto_defect', $data['get'] );

		if ($data['data_passed']){

			#convert data array passed into json
			echo json_encode($data['data_passed']);

		} 

	}

	public function loadDataFormMou014(){

		$data['get'] = $_GET; // for filtering

		$this->load->model('LoadDataModel');

		$data['data_passed'] = $this->LoadDataModel->loadData( '014_mou', $data['get'] );

		if ($data['data_passed']){

			#convert data array passed into json
			echo json_encode($data['data_passed']);

		} 

	}


	public function loadDataFormJig004(){

		$data['get'] = $_GET; // for filtering

		$this->load->model('LoadDataModel');

		$data['data_passed'] = $this->LoadDataModel->loadData( '004_jig', $data['get'] );

		if ($data['data_passed']){

			#convert data array passed into json
			echo json_encode($data['data_passed']);
			
		} 

	}


	public function loadDataFormJig002(){

		$data['get'] = $_GET; // for filtering

		$this->load->model('LoadDataModel');

		$data['data_passed'] = $this->LoadDataModel->loadData( '002_jig', $data['get'] );

		if ($data['data_passed']){

			#convert data array passed into json
			echo json_encode($data['data_passed']);
			
		} 

	}


	public function loadDataItem(){

		$data['get'] = $_GET; // for filtering
		$this->load->model('LoadDataModel');
		
		$data['data_passed'] = $this->LoadDataModel->loadData( 'data_item', $data['get'] );

		if ($data['data_passed']){

			#convert data array passed into json
			echo json_encode($data['data_passed']);
			
		} 

	}
   
}

