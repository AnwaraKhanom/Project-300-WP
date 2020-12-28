<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landlord extends CI_Controller {


	function __construct() {
        parent::__construct();

		
		
        if(empty($this->session->userdata('username'))){
			redirect(base_url());
		}else{
		
		}


    }


	public function index()
	{
		$data['property']=$this->db->where('user_id',$this->session->userdata('id'))->get('tbl_property')->num_rows();
		$data['request']=$this->db->where('done','0')->where('landlord_id',$this->session->userdata('id'))->get('tbl_request')->num_rows();
		$data['booked']=$this->db->where('done','1')->where('landlord_id',$this->session->userdata('id'))->get('tbl_request')->num_rows();
		 

	 $this->load->view('landlord/include/header');
	 $this->load->view('landlord/dashboard',$data);
	 $this->load->view('landlord/include/footer'); 

	}

	public function add_property()
	{
		$this->form_validation->set_rules('thana', 'Thana', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('area', 'Area', 'required');
		$this->form_validation->set_rules('bedroom', 'Bedrooms', 'required');
		$this->form_validation->set_rules('bathroom', 'Bathrooms', 'required');
		$this->form_validation->set_rules('garage', 'Garages', 'required');
		$this->form_validation->set_rules('detail', 'Details', 'required');
		$this->form_validation->set_rules('rent', 'Rent', 'required');
		$this->form_validation->set_rules('status', 'Availability', 'required');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');


		$data['thana']=$this->db->get('tbl_thana')->result_array();
		
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('landlord/include/header');
			$this->load->view('landlord/add-property',$data);
			$this->load->view('landlord/include/footer');
			
		}else{
			
			$idata['user_id']=$this->session->userdata('id');
			$idata['thana_id']=$this->input->post('thana');
			$idata['name']=$this->input->post('name');
			$idata['address']=$this->input->post('address');
			$idata['area']=$this->input->post('area');
			$idata['bedrooms']=$this->input->post('bedroom');
			$idata['bathrooms']=$this->input->post('bathroom');
			$idata['garages']=$this->input->post('garage');
			$idata['detail']=$this->input->post('detail');
			$idata['rent']=$this->input->post('rent');
			$idata['status']=$this->input->post('status');

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////


			  $config['upload_path'] = './image/Property';
			  $config['allowed_types'] = 'jpg|png|jpeg';
			  
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('property_image')) {
			     $this->session->set_flashdata('success', $this->upload->display_errors());
			    return;
			 } else {
			  $avatar = $this->upload->data();
			  $image = $avatar['file_name'];

			  $idata['photo']=$image;
			 } 

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////

			$this->db->insert('tbl_property',$idata);

			$message='<div class="alert alert-success">Data Inserted</div>';

			$this->session->set_flashdata('success',$message);

			redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function view_property()
	{
		$this->load->library('pagination');
 

		
		$count=$this->db->where('user_id',$this->session->userdata('id'))->get('tbl_property')->num_rows();

		$config['base_url'] = site_url('Landlord/view_property');
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

 

		$data['property']=$this->db->limit($config['per_page'], $data['segment'])->select('* , tbl_property.id as p_id')->from('tbl_property , tbl_thana')->where('user_id',$this->session->userdata('id'))->where('tbl_thana.id=tbl_property.thana_id')->get()->result_array();

 			 
 
		$this->load->view('landlord/include/header');
		$this->load->view('landlord/view-property',$data);
		$this->load->view('landlord/include/footer');

	}

	public function edit_property($id)
	{
		$this->form_validation->set_rules('thana', 'Thana', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('area', 'Area', 'required');
		$this->form_validation->set_rules('bedroom', 'Bedrooms', 'required');
		$this->form_validation->set_rules('bathroom', 'Bathrooms', 'required');
		$this->form_validation->set_rules('garage', 'Garages', 'required');
		$this->form_validation->set_rules('detail', 'Details', 'required');
		$this->form_validation->set_rules('rent', 'Rent', 'required');
		$this->form_validation->set_rules('status', 'Availability', 'required');

		$this->form_validation->set_message('required', 'The %s filed should not be empty');


		$data['thana']=$this->db->get('tbl_thana')->result_array();
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['property']=$this->db->where('id',$id)->get('tbl_property')->result_array();
			
			$this->load->view('landlord/include/header');
			$this->load->view('landlord/edit-property',$data);
			$this->load->view('landlord/include/footer');
			
		}else{
			
			$idata['user_id']=$this->session->userdata('id');
			$idata['thana_id']=$this->input->post('thana');
			$idata['name']=$this->input->post('name');
			$idata['address']=$this->input->post('address');
			$idata['area']=$this->input->post('area');
			$idata['bedrooms']=$this->input->post('bedroom');
			$idata['bathrooms']=$this->input->post('bathroom');
			$idata['garages']=$this->input->post('garage');
			$idata['detail']=$this->input->post('detail');
			$idata['rent']=$this->input->post('rent');
			$idata['status']=$this->input->post('status');

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////


			if($_FILES && $_FILES['property_image']['name'] ){
			//user select file
			  
			  $config['upload_path'] = './image/Property';
			  $config['allowed_types'] = 'jpg|png|jpeg';
			 
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('property_image')) {
			     $this->session->set_flashdata('success', $this->upload->display_errors());
			    return;
			 } else {
			  $avatar = $this->upload->data();
			  $image = $avatar['file_name'];

			  $idata['photo']=$image;
			 } 

			}

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////

			$this->db->where('id',$id);
			$this->db->update('tbl_property',$idata);


			$message='<div class="alert alert-success">Data Updated.</div>';

			$this->session->set_flashdata('success',$message);

			redirect($_SERVER['HTTP_REFERER']);
			
			
		} 

	}

	public function delete_property($id)
	{
		
		$this->db->where('id',$id)->delete('tbl_property');
		
		 
		redirect($_SERVER['HTTP_REFERER']);
		 
		 
	}

	public function view_booking()
	{
		$data['booking']=$this->db->select('* , tbl_request.id as r_id , tbl_property.name as p_name , , tbl_property.photo as p_photo')->from('tbl_request , tbl_property , tbl_user')->where('tbl_property.id=tbl_request.property_id')->where('tbl_user.id=tbl_request.tenant_id')->where('tbl_request.done',"1")->where('tbl_request.landlord_id',$this->session->userdata('id'))->get()->result_array();

		

		
		$this->load->view('landlord/include/header');
		$this->load->view('landlord/view-booking',$data);
		$this->load->view('landlord/include/footer');
	}

	public function view_request()
	{
		$data['booking']=$this->db->select('* , tbl_request.id as r_id , tbl_property.name as p_name , tbl_property.photo as p_photo')->from('tbl_request , tbl_property , tbl_user')->where('tbl_property.id=tbl_request.property_id')->where('tbl_user.id=tbl_request.tenant_id')->where('tbl_request.done',"0")->where('tbl_request.landlord_id',$this->session->userdata('id'))->get()->result_array();
		
		$this->load->view('landlord/include/header');
		$this->load->view('landlord/view-request',$data);
		$this->load->view('landlord/include/footer');
	}

	function update_booking($bookid,$status)
	{
		$this->db->where('id',$bookid);
		$this->db->set('done',$status);
		$this->db->update('tbl_request');

		$property=$this->db->where('id',$bookid)->get('tbl_request')->result_array();

		if($property[0]['done']== "1")
		{
			$this->db->where('id',$property[0]['property_id'])->set('status',"0")->update('tbl_property');
		}
		else{
			$this->db->where('id',$property[0]['property_id'])->set('status',"1")->update('tbl_property');
		}

		redirect($_SERVER['HTTP_REFERER']);
	

	}


	
}
