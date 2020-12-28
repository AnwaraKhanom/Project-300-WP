<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->library('pagination');

		
		$count=$this->db->get('tbl_property')->num_rows();

		$config['base_url'] = site_url('');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 7;
		 $config['num_links'] = 7;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active"><a href="/">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li>';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li>';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li>';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li>';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li>';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(1)) {
		 $data['segment'] = $this->uri->segment(1);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

		$data['property']=$this->db->limit($config['per_page'], $data['segment'])->get('tbl_property')->result_array();



		//$data['property']=$this->db->get('tbl_property')->result_array(); 

		$this->load->view('include/header');
		$this->load->view('home', $data);
		$this->load->view('include/footer');

	}

	public function Wproperties()
	{
		
		$this->load->library('pagination');




		if($this->input->post('submit')){


			if($this->input->post('Division')){

				$count=$this->db->like('division',$this->input->post('Division'),'both');
			}


			if($this->input->post('Thana')){

				$count=$this->db->like('thana',$this->input->post('Thana'),'both');
			}

			if($this->input->post('Price')){

				$count=$this->db->like('rent',$this->input->post('Price'),'both');
			}


			if($this->input->post('Area')){

				$count=$this->db->like('area',$this->input->post('Area'),'both');
			}


			if($this->input->post('Bedrooms')){

				$count=$this->db->like('bedrooms',$this->input->post('Bedrooms'),'both');
			}

			if($this->input->post('Washrooms')){

				$count=$this->db->like('washrooms',$this->input->post('Washrooms'),'both');
			}

			if($this->input->post('Garages')){

				$count=$this->db->like('garages',$this->input->post('Garages'),'both');
			}



		}

		
		$count=$this->db->select('* , tbl_property.id as p_id')->from('tbl_property , tbl_thana , tbl_division')->where('tbl_thana.division_id=tbl_division.id')->where('tbl_property.thana_id=tbl_thana.id')->get()->num_rows();

		$config['base_url'] = site_url('Welcome/Wproperties');
		 $config['total_rows'] = $count;
		 $config['per_page'] = 6;
		 $config['num_links'] = 6;
		 $config['full_tag_open'] = '<ul class="pagination no-margin">';
		 $config['full_tag_close'] = '</ul>';
		 $config['cur_tag_open'] = '<li class="active"><a href="/">';
		 $config['cur_tag_close'] = '</a></li>';
		 $config['prev_tag_open'] = '<li>';
		 $config['prev_tag_close'] = '</li>';
		 $config['next_tag_open'] = '<li>';
		 $config['next_tag_close'] = '</li>';
		 $config['num_tag_open'] = '<li>';
		 $config['num_tag_close'] = '</li>';
		 $config['last_tag_open'] = '<li>';
		 $config['last_tag_close'] = '</li>';
		 $config['first_tag_open'] = '<li>';
		 $config['first_tag_close'] = '</li>';
		 $config['next_link'] = 'Next >';
		 $config['prev_link'] = '< Prev';

		 if ($this->uri->segment(2)) {
		 $data['segment'] = $this->uri->segment(2);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

		

		if($this->input->post('submit')){


	

			if($this->input->post('Division')){

				$this->db->like('division',$this->input->post('Division'),'both');
			}


			if($this->input->post('Thana')){

				$this->db->like('thana',$this->input->post('Thana'),'both');
			}


			if($this->input->post('Price')){

				$this->db->like('rent',$this->input->post('Price'),'both');
			}


			if($this->input->post('Area')){

				$this->db->like('area',$this->input->post('Area'),'both');
			}


			if($this->input->post('Bedrooms')){

				$this->db->like('bedrooms',$this->input->post('Bedrooms'),'both');
			}

			if($this->input->post('Washrooms')){

				$this->db->like('washrooms',$this->input->post('Washrooms'),'both');
			}

			if($this->input->post('Garages')){

				$this->db->like('garages',$this->input->post('Garages'),'both');
			}




		}

		$data['property']=$this->db->select('* , tbl_property.id as p_id')->from('tbl_property , tbl_thana , tbl_division')->where('tbl_property.thana_id=tbl_thana.id')->where('tbl_thana.division_id=tbl_division.id')->limit($config['per_page'], $data['segment'])->get()->result_array();
  

		$this->load->view('include/header');	
		$this->load->view('Wproperties', $data);
		$this->load->view('include/footer');	 

	}


	


	public function Wproperty_2($id)
	{
		 

		$data['proper']=$this->db->select('* , tbl_property.id as p_id , tbl_property.photo as p_photo , tbl_user.name as u_name , tbl_property.name as p_name')->from('tbl_property , tbl_thana , tbl_user , tbl_division')->where('tbl_property.thana_id=tbl_thana.id')->where('tbl_property.user_id=tbl_user.id')->where('tbl_thana.division_id=tbl_division.id')->where('tbl_property.id', $id)->get()->result_array(); 

		$this->load->view('include/header');	
		$this->load->view('Wproperty-2', $data);
		$this->load->view('include/footer');	 

	}

	public function Wcontact()
	{

		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		$this->form_validation->set_rules('type', 'Type', 'required');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('include/header');	
			$this->load->view('contact');
			$this->load->view('include/footer');

		}else{

			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['subject']=$this->input->post('subject');
			$idata['message']=$this->input->post('message');
			$idata['type']=$this->input->post('type');

			

			$this->db->insert('tbl_contact',$idata);

			$message='<div class="alert alert-success">Delivered Successfully</div>';

			$this->session->set_flashdata('success',$message);

			redirect($_SERVER['HTTP_REFERER']);

		
		}	 

	}

	public function Wfaq()
	{
		 

	 $this->load->view('include/header');	
	 $this->load->view('faq');
	 $this->load->view('include/footer');	 

	}


	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		$this->form_validation->set_message('valid_email', 'The Email is incorrect');

		if ($this->form_validation->run() == FALSE)
		{
			 $this->load->view('include/header');	
			 $this->load->view('login');
			 $this->load->view('include/footer');
			
		}else{
			
				$mail=$this->input->post('email');
				$pass=$this->input->post('password');

				$verify=$this->db->where('email',$mail)->where('password',$pass)->get('tbl_user')->result_array();




				if(!empty($verify))
				{

					$kholla['type']=$verify[0]['type'];
					$kholla['username']=$verify[0]['name'];
					$kholla['id']=$verify[0]['id'];



					$this->session->set_userdata($kholla);
					

					if($kholla['type']=="admin")
					{
						
						$message='<div class="alert alert-success">Logged In Successfully as a Admin.</div>';

					    $this->session->set_flashdata('success',$message);

						redirect(base_url('Dashboard'));
					}
					else if($kholla['type']=="landlord")
					{
						
						$message='<div class="alert alert-success">Logged In Successfully.</div>';

					    $this->session->set_flashdata('success',$message);

						redirect(base_url('Landlord'));
					}
					else
					{
						
						$message='<div class="alert alert-success">Logged In Successfully.</div>';

					    $this->session->set_flashdata('success',$message);

						redirect(base_url('Findplace'));
					}

					
				}
				
				else
				{
					$message='<div class="alert alert-danger">Your Email or Password is incorrect.</div>';

				    $this->session->set_flashdata('success',$message);

					redirect($_SERVER['HTTP_REFERER']);
				}

				
			
			
		}	 	 

	}

	public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|exact_length[11]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');
		$this->form_validation->set_rules('type', 'Type', 'required');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');


		if ($this->form_validation->run() == FALSE)
		{
			 $this->load->view('include/header');	
			 $this->load->view('register');
			 $this->load->view('include/footer');

		}else{

			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['mobile']=$this->input->post('mobile');
			$idata['address']=$this->input->post('address');
			$idata['password']=$this->input->post('password');
			$idata['type']=$this->input->post('type');

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////


			  $config['upload_path'] = './image';
			  $config['allowed_types'] = 'jpg|png|jpeg|pdf';
			  // $config['max_size'] = 1000;
			  // $config['max_width'] = 1024;
			  // $config['max_height'] = 768;
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('user_image')) {
			     $this->session->set_flashdata('success', $this->upload->display_errors());
			    return;
			 } else {
			  $avatar = $this->upload->data();
			  $user_image = $avatar['file_name'];

			  $idata['photo']=$user_image;
			 } 


			 if (!$this->upload->do_upload('user_nid')) {
			     $this->session->set_flashdata('success', $this->upload->display_errors());
			    return;
			 } else {
			  $avatar = $this->upload->data();
			  $user_nid = $avatar['file_name'];

			  $idata['nid']=$user_nid;
			 }

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Registered Successfully</div>';

			$this->session->set_flashdata('success',$message);

			redirect(base_url('login'));

		
		}	 

	}



	
}
