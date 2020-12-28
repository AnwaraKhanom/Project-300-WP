<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct() {
        parent::__construct();

		
		
        if(empty($this->session->userdata('username'))){
			redirect('Admin');
		}else{
		
		}


    }


	public function index()
	{
		$data['user']=$this->db->where('type !=','admin')->get('tbl_user')->num_rows();
		$data['request']=$this->db->where('done','0')->get('tbl_request')->num_rows();
		$data['property']=$this->db->get('tbl_property')->num_rows();
		$data['contact']=$this->db->get('tbl_contact')->num_rows();	 

	 

	 $this->load->view('admin/include/header');
	 $this->load->view('admin/dashboard',$data);
	 $this->load->view('admin/include/footer'); 

	}


	public function view_user()
	{
		$this->load->library('pagination');

		
		$count=$this->db->get('tbl_user')->num_rows();

		$config['base_url'] = site_url('Dashboard/view_user');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 5;
		 $config['num_links'] = 5;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active page-link" ><a href="">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li class=" page-link">';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li class="page-link">';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li class="page-link">';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li class="page-link">';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li class="page-link">';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(3)) {
		 $data['segment'] = $this->uri->segment(3);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

		$data['user']=$this->db->limit($config['per_page'], $data['segment'])->get('tbl_user')->result_array();

 			 
 
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-user',$data);
		$this->load->view('admin/include/footer');


	}

	public function edit_user($id)
	{
		
		$data['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();

		if($data['user']['0']['email']==$this->input->post('email'))
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		}
		else
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		}






		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');
		$this->form_validation->set_rules('type', 'Type', 'required');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');


		if ($this->form_validation->run() == FALSE)
		{
			

			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-user',$data);
			$this->load->view('admin/include/footer');

		}else{

			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['mobile']=$this->input->post('mobile');
			$idata['address']=$this->input->post('address');
			$idata['password']=$this->input->post('password');
			$idata['type']=$this->input->post('type');

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////


			  if($_FILES && $_FILES['user_image']['name']){
			//user select file

				  $config['upload_path'] = './image';
				  $config['allowed_types'] = 'jpg|png|jpeg|pdf';
				  
				  $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('user_image')) {
				     $this->session->set_flashdata('success', $this->upload->display_errors());
				    return;
				 } else {
				  $avatar = $this->upload->data();
				  $user_image = $avatar['file_name'];

				  $idata['photo']=$user_image;
				 } 

			}



			if($_FILES && $_FILES['user_nid']['name']){
			//user select file

				  $config['upload_path'] = './image';
				  $config['allowed_types'] = 'pdf';
				  
				  
				  $this->load->library('upload', $config);

				 if (!$this->upload->do_upload('user_nid')) {
				     $this->session->set_flashdata('success', $this->upload->display_errors());
				    return;
				 } else {
				  $avatar = $this->upload->data();
				  $user_nid = $avatar['file_name'];

				  $idata['nid']=$user_nid;
				 }  

			}

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////

			$this->db->where('id',$id);
			$this->db->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Updated</div>';

			$this->session->set_flashdata('success',$message);

			redirect($_SERVER['HTTP_REFERER']);

		
		}	 

	}

	public function delete_user($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_user');
		
		 
		redirect('Dashboard/view-user');
		 
		 
	}

	public function view_contact()
	{
		$this->load->library('pagination');
 

		
		$count=$this->db->get('tbl_contact')->num_rows();

		$config['base_url'] = site_url('Dashboard/view_contact');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 4;
		 $config['num_links'] = 4;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active page-link" ><a href="">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li class=" page-link">';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li class="page-link">';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li class="page-link">';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li class="page-link">';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li class="page-link">';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(3)) {
		 $data['segment'] = $this->uri->segment(3);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

		$data['contact']=$this->db->limit($config['per_page'], $data['segment'])->get('tbl_contact')->result_array();

 			 
 
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-contact',$data);
		$this->load->view('admin/include/footer');
		
		
	}

	public function delete_contact($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_contact');
		
		 
		redirect('Dashboard/view-contact');
		 
		 
	}


	public function view_property()
	{
		$this->load->library('pagination');
 

		
		$count=$this->db->get('tbl_property')->num_rows();

		$config['base_url'] = site_url('Dashboard/view_property');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 2;
		 $config['num_links'] = 2;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active page-link" ><a href="">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li class=" page-link">';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li class="page-link">';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li class="page-link">';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li class="page-link">';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li class="page-link">';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(3)) {
		 $data['segment'] = $this->uri->segment(3);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

		$data['property']=$this->db->limit($config['per_page'], $data['segment'])->select('* , tbl_property.id as p_id , tbl_property.photo as p_photo , tbl_user.name as u_name')->from('tbl_property , tbl_thana , tbl_user')->where('tbl_thana.id=tbl_property.thana_id')->where('tbl_user.id=tbl_property.user_id')->get()->result_array();

 			 
 
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-property',$data);
		$this->load->view('admin/include/footer');
		

	}

	
	public function delete_property($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_property');
		
		 
		redirect('Dashboard/view-property');
		 
		 
	}


	public function add_division()
	{
		$this->form_validation->set_rules('division', 'Division', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-division');
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['division']=$this->input->post('division');


				$this->db->insert('tbl_division',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);

				
			
			
		} 

	}

	public function view_division()
	{
		$data['user']=$this->db->get('tbl_division')->result_array();


		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-division',$data);
		$this->load->view('admin/include/footer');
	}

	public function edit_division($id)
	{
		$this->form_validation->set_rules('division', 'Division', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['divi']=$this->db->where('id',$id)->get('tbl_division')->result_array();
			
			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-division', $data);
			$this->load->view('admin/include/footer');
			
		}else{
			
				$idata['division']=$this->input->post('division');


				$this->db->where('id',$id);
				$this->db->update('tbl_division',$idata);

				$message='<div class="alert alert-success">Data Updated.</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function delete_division($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_division');
		
		 
		redirect('Dashboard/view-division');
		 
		 
	}

	public function add_thana()
	{
		$this->form_validation->set_rules('division', 'Division', 'required');
		$this->form_validation->set_rules('thana', 'Thana', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');

		$data['user']=$this->db->get('tbl_division')->result_array();
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/include/header');
			$this->load->view('admin/add-thana',$data);
			$this->load->view('admin/include/footer');
			
		}else{
				
				$idata['division_id']=$this->input->post('division');
				$idata['thana']=$this->input->post('thana');

				//$this->input->post('division'); exit;


				$this->db->insert('tbl_thana',$idata);

				$message='<div class="alert alert-success">Data Inserted</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);

				

				
				

			}

	}

	public function view_thana()
	{
		$this->load->library('pagination');
 

		
		$count=$this->db->get('tbl_thana')->num_rows();

		$config['base_url'] = site_url('Dashboard/view_thana');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 6;
		 $config['num_links'] = 6;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active page-link" ><a href="">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li class=" page-link">';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li class="page-link">';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li class="page-link">';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li class="page-link">';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li class="page-link">';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(3)) {
		 $data['segment'] = $this->uri->segment(3);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

			$data['thana']=$this->db->limit($config['per_page'], $data['segment'])->select('* , tbl_thana.id as t_id')->from('tbl_thana , tbl_division')->where('tbl_division.id=tbl_thana.division_id')->get()->result_array();

 			 
 
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-thana',$data);
		$this->load->view('admin/include/footer');
		
		
	}

	public function edit_thana($id)
	{
		$this->form_validation->set_rules('division', 'Division', 'required');
		$this->form_validation->set_rules('thana', 'Thana', 'required');
		

		$this->form_validation->set_message('required', 'The %s filed should not be empty');

		$data['division']=$this->db->get('tbl_division')->result_array();
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['thana']=$this->db->where('id',$id)->get('tbl_thana')->result_array();


			$this->load->view('admin/include/header');
			$this->load->view('admin/edit-thana',$data);
			$this->load->view('admin/include/footer');
			
		}else{
				
				$idata['division_id']=$this->input->post('division');
				$idata['thana']=$this->input->post('thana');


				$this->db->where('id',$id);
				$this->db->update('tbl_thana',$idata);

				$message='<div class="alert alert-success">Data Updated.</div>';

				$this->session->set_flashdata('success',$message);

				redirect($_SERVER['HTTP_REFERER']);

				

				
				

			}

	}

	public function delete_thana($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_thana');
		
		 
		redirect('Dashboard/view-thana');
		 
		 
	}

	public function view_booking()
	{
		

		$this->load->library('pagination');
 

		
		$count=$this->db->where('done',"1")->get('tbl_request')->num_rows();

		$config['base_url'] = site_url('Dashboard/view_booking');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 6;
		 $config['num_links'] = 6;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active page-link" ><a href="">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li class=" page-link">';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li class="page-link">';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li class="page-link">';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li class="page-link">';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li class="page-link">';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(3)) {
		 $data['segment'] = $this->uri->segment(3);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

		$data['booking']=$this->db->limit($config['per_page'], $data['segment'])->select('* , tbl_request.id as r_id , tbl_property.name as p_name ,  a.name as l_name , b.name as t_name ')->from('tbl_request , tbl_property , tbl_user as a , tbl_user as b ')->where('tbl_property.id=tbl_request.property_id')->where('a.id=tbl_request.landlord_id')->where('b.id=tbl_request.tenant_id')->where('done',"1")->get()->result_array();

 			 
 
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-booking',$data);
		$this->load->view('admin/include/footer');
		
	}

	public function view_request()
	{
		$data['booking']=$this->db->select('* , tbl_request.id as r_id , tbl_property.name as p_name ,  a.name as l_name , b.name as t_name ')->from('tbl_request , tbl_property , tbl_user as a , tbl_user as b ')->where('tbl_property.id=tbl_request.property_id')->where('a.id=tbl_request.landlord_id')->where('b.id=tbl_request.tenant_id')->where('done',"0")->get()->result_array();
		
		$this->load->view('admin/include/header');
		$this->load->view('admin/view-request',$data);
		$this->load->view('admin/include/footer');
	}


	
}
