<?php if (!defined('BASEPATH')) die();

class Action extends CI_Controller {

	public function insertFormMou014(){

		# action from form 014 MOU
		$data['form'] = $_POST;

      $this->load->model('InsertDataModel');

      $data['insert_result'] = $this->InsertDataModel->insertData( '014_mou', $data['form'] );

      if ($data['insert_result']){

         # if success
         redirect( base_url().'input/inputFormMou014?msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/inputFormMou014?msg=0' );

      }

	}

   public function editFormMou014(){

      # action from form 014 MOU
      $data['form'] = $_POST;

      $this->load->model('EditDataModel');

      $data['edit_result'] = $this->EditDataModel->editData( '014_mou', $data['form'] );

      if ($data['edit_result']){

         # if success
         redirect( base_url().'input/editFormMou014?master_id='. $data['form']['master_id'] .'&msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/editFormMou014?master_id='. $data['form']['master_id'] .'&msg=0' );

      }

   }


   public function deleteFormMou014(){

      # action from form 014 MOU
      $data['get'] = $_GET;

      $this->load->model('DeleteDataModel');

      $data['delete_result'] = $this->DeleteDataModel->deleteData( '014_mou', $data['get'] );

      if ($data['delete_result']){

         # if success
         redirect( base_url().'input/dataFormMou014?master_id='. $data['get']['master_id'] .'&msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/dataFormMou014?master_id='. $data['get']['master_id'] .'&msg=0' );

      }

   }




   public function insertFormJig004(){

      # action from form 014 MOU
      $data['form'] = $_POST;

      $this->load->model('InsertDataModel');

      $data['insert_result'] = $this->InsertDataModel->insertData( '004_jig', $data['form'] );

      if ($data['insert_result']){

         # if success
         redirect( base_url().'input/inputFormJig004?msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/inputFormJig004?msg=0' );

      }

   }

   public function editFormJig004(){

      # action from form 014 MOU
      $data['form'] = $_POST;

      $this->load->model('EditDataModel');

      $data['edit_result'] = $this->EditDataModel->editData( '004_jig', $data['form'] );

      if ($data['edit_result']){

         # if success
         redirect( base_url().'input/editFormJig004?master_id='. $data['form']['master_id'] .'&msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/editFormJig004?master_id='. $data['form']['master_id'] .'&msg=0' );

      }

   }

   public function deleteFormJig004(){

      # action from form 014 MOU
      $data['get'] = $_GET;

      $this->load->model('DeleteDataModel');

      $data['delete_result'] = $this->DeleteDataModel->deleteData( '004_jig', $data['get'] );

      if ($data['delete_result']){

         # if success
         redirect( base_url().'input/dataFormJig004?master_id='. $data['get']['master_id'] .'&msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/dataFormJig004?master_id='. $data['get']['master_id'] .'&msg=0' );

      }

   }





   public function insertFormJig002(){

      # action from form 014 MOU
      $data['form'] = $_POST;

      $this->load->model('InsertDataModel');

      $data['insert_result'] = $this->InsertDataModel->insertData( '002_jig', $data['form'] );

      if ($data['insert_result']){

         # if success
         redirect( base_url().'input/inputFormJig002?msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/inputFormJig002?msg=0' );

      }

   }

   public function editFormJig002(){

      # action from form 014 MOU
      $data['form'] = $_POST;

      $this->load->model('EditDataModel');

      $data['edit_result'] = $this->EditDataModel->editData( '002_jig', $data['form'] );

      if ($data['edit_result']){

         # if success
         redirect( base_url().'input/editFormJig002?master_id='. $data['form']['master_id'] .'&msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/editFormJig002?master_id='. $data['form']['master_id'] .'&msg=0' );

      }

   }


   public function deleteFormJig002(){

      # action from form 014 MOU
      $data['get'] = $_GET;

      $this->load->model('DeleteDataModel');

      $data['delete_result'] = $this->DeleteDataModel->deleteData( '002_jig', $data['get'] );

      if ($data['delete_result']){

         # if success
         redirect( base_url().'input/dataFormJig002?master_id='. $data['get']['master_id'] .'&msg=1' );

      } else {

         # if failed
         redirect( base_url().'input/dataFormJig002?master_id='. $data['get']['master_id'] .'&msg=0' );

      }

   }




   public function insertParetoDefect(){

      $data['form'] = $_POST;

      $this->load->model('InsertDataModel');

      $data['insert_result'] = $this->InsertDataModel->insertData( 'pareto_defect', $data['form'] );

      if ($data['insert_result']){

         # if success
         redirect( base_url().'master/inputParetoDefect?msg=1' );

      } else {

         # if failed
         redirect( base_url().'master/inputParetoDefect?msg=0' );

      }

   }


   public function insertDataItem(){

      $data['form'] = $_POST;

      $this->load->model('InsertDataModel');

      $data['insert_result'] = $this->InsertDataModel->insertData( 'data_item', $data['form'] );

      if ($data['insert_result']){

         # if success
         redirect( base_url().'master/inputDataItem?msg=1' );

      } else {

         # if failed
         redirect( base_url().'master/inputDataItem?msg=0' );

      }

   }
   
}

