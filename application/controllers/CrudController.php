<?php 
if(!defined('BASEPATH')) exit('No Direct script access allowed');

class CrudController extends CI_Controller{
	//Calling Model for interacting DB
	public function __construct(){
		parent::__construct();
		$this->load->model('CrudModel');
	}

	//Calling index file and showing all data on all_users.php page which is automatically loaded by index method 
	public function index(){
		//fetchAll method is fetching all data from model
		$all_usersData = $this->CrudModel->FetchAllUsers();

		$userData = array(); //creating array for all user data

		$userData['all_usersData'] = $all_usersData; //getting all data from model 
		
		$this->load->view('all_users',$userData);//passing this data to index page
	}

	//method for adding a new user
	function AddUsers(){
		$this->form_validation->set_rules('full_name','Full Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('contact_no','Contact Number','required');
		if($this->form_validation->run() == false){

		$this->load->view('add_users');
		}
		else
		{
			$data = array();
			$data['full_name'] = $this->input->post('full_name');
			$data['email'] = $this->input->post('email');
			$data['contact_no'] = $this->input->post('contact_no');
			$data['created_at'] = date('Y-m-d H:i:s');


			$this->CrudModel->AddNewUsers($data);
			redirect(base_url().'index.php/CrudController/index');
		}
	}

	public function EditUser($id){
		$userDataForUpdate = $this->CrudModel->GetEditUserData($id);
		$data = array();
		$data['userDataForUpdate'] = $userDataForUpdate;

		$this->form_validation->set_rules('full_name','Full Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('contact_no','Contact Number','required');
		if($this->form_validation->run() == false){

		$this->load->view('edit_users',$data);

		}
		else
		{
			$UpdateUserdata = array();
			$UpdateUserdata['full_name'] = $this->input->post('full_name');
			$UpdateUserdata['email'] = $this->input->post('email');
			$UpdateUserdata['contact_no'] = $this->input->post('contact_no');
			$UpdateUserdata['created_at'] = date('Y-m-d H:i:s');


			$this->CrudModel->UpdateUser($id,$UpdateUserdata);
			redirect(base_url().'index.php/CrudController/index');
		}
		
	}
	public function DeleteUser($id){
		$this->CrudModel->DeleteUser($id);
		redirect(base_url().'index.php/CrudController/index');

	}
}

?>