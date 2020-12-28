<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		 
	 	$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/login');

		}else{

			$idata['email']=$this->input->post('email');
			$idata['password']=$this->input->post('password');

			$result=$this->db->where('email',$idata['email'])->where('password',$idata['password'])->get('tbl_user')->result_array();

			if(!empty($result)){

			$message='<div class="alert alert-success">Welcome</div>';

			$this->session->set_flashdata('success',$message);

			redirect('Dashboard');

			}else{

			$message='<div class="alert alert-danger">Wrong Mobile / Password</div>';

			$this->session->set_flashdata('success',$message);

			redirect('Admin');
			}

		
		} 

	}

	public function login($email="",$password="")
	{
		$email= urldecode($email);

			
			$result=$this->db->where('email',$email)->where('password',$password)->get('tbl_user')->result_array();

			if(!empty($result)){
				$this->session->set_userdata('username',$result[0]['name']);

			echo 'Yes';

			}else{

			echo 'No';
			}

	}

	/*public function login()
	{

		$this->load->view('admin/login');

	}*/

	

	public function password()
	{
		 

	// $this->load->view('admin/include/header');
	 $this->load->view('admin/password');
	 //$this->load->view('admin/include/footer'); 

	}

	public function register()
	{
		 

	// $this->load->view('admin/include/header');
	 $this->load->view('admin/register');
	 //$this->load->view('admin/include/footer'); 

	}

	


	
}
