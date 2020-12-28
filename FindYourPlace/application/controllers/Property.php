<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {

	function __construct() {
        parent::__construct();

		
		
        if(empty($this->session->userdata('username'))){
			redirect(base_url());
		}else{
		
		}


    }
	
	public function index($id)
	{
		$data['proper']=$this->db->select('* , tbl_property.id as p_id , tbl_property.photo as p_photo , tbl_user.name as u_name , tbl_property.name as p_name')->from('tbl_property , tbl_thana , tbl_user , tbl_division')->where('tbl_thana.id=tbl_property.thana_id')->where('tbl_user.id=tbl_property.user_id')->where('tbl_thana.division_id=tbl_division.id')->where('tbl_property.id', $id)->get()->result_array(); 

		$data['head']=$this->db->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();


		$check=$this->db->where('property_id', $id)->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();

		$this->load->view('include/header1', $data);

		if(!empty($check)){
			$message='<div class="alert alert-success">You Already Requested For Bookings.</div>';

			$this->session->set_flashdata('success',$message);

			$this->load->view('request', $data);
		}
		else{
			$this->load->view('property-2', $data);
		}	
		
		$this->load->view('include/footer1');

	}

	
}
