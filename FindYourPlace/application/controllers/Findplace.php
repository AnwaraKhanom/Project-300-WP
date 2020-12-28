<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Findplace extends CI_Controller {


	function __construct() {
        parent::__construct();

		
		
        if(empty($this->session->userdata('username'))){
			redirect(base_url());
		}else{
		
		}


    }

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



		$data['head']=$this->db->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();

		$this->load->view('include/header1', $data);
		$this->load->view('home1', $data);
		$this->load->view('include/footer1');
		 

	}


	public function contact()
	{
		 
		$data['head']=$this->db->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();

		$this->load->view('include/header1', $data);	
		$this->load->view('contact');
		$this->load->view('include/footer1');	 

	}

	public function faq()
	{
		 

		$data['head']=$this->db->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();

		$this->load->view('include/header1', $data);	
		$this->load->view('faq');
		$this->load->view('include/footer1');	 

	}

	public function request($id)
	{		

		$landlord=$this->db->where('id', $id)->get('tbl_property')->result_array();

		$idata['property_id']=$id;
		$idata['landlord_id']=$landlord[0]['user_id'];
		$idata['tenant_id']=$this->session->userdata('id');
		$idata['date']=date('Y-m-d');
		$idata['done']='0';

		$this->db->insert('tbl_request',$idata);

		$message='<div class="alert alert-success">Booking Request Delivered Successfully</div>';

		$this->session->set_flashdata('success',$message);


		$data['proper']=$this->db->select('* , tbl_property.id as p_id , tbl_property.photo as p_photo , tbl_user.name as u_name , tbl_property.name as p_name')->from('tbl_property , tbl_thana , tbl_user , tbl_division')->where('tbl_thana.id=tbl_property.thana_id')->where('tbl_user.id=tbl_property.user_id')->where('tbl_thana.division_id=tbl_division.id')->where('tbl_property.id', $id)->get()->result_array();


		$data['head']=$this->db->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();

		$this->load->view('include/header1', $data);	
		$this->load->view('request', $data);
		$this->load->view('include/footer1');
	}

	public function all_requests()
	{
		 
		$data['booking']=$this->db->select('* , tbl_request.id as r_id , tbl_property.name as p_name')->from('tbl_request , tbl_property , tbl_user')->where('tbl_property.id=tbl_request.property_id')->where('tbl_user.id=tbl_request.landlord_id')->where('tbl_request.tenant_id',$this->session->userdata('id'))->get()->result_array();

		$data['head']=$this->db->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();
		

		$this->load->view('include/header1', $data);	
		$this->load->view('all-requests',$data);
		$this->load->view('include/footer1');	 

	}

	public function delete_request($id)
	{
		
		$property=$this->db->where('id',$id)->get('tbl_request')->result_array();

		$this->db->where('id',$property[0]['property_id'])->set('status',"1")->update('tbl_property');
		

		$this->db->where('id',$id)->delete('tbl_request');
		
		$check=$this->db->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();
		if(!empty($check)){ 

			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			redirect(base_url('Findplace'));
		}
		
		 
		 
	}



	
}
