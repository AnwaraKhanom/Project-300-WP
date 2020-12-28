<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wproperties extends CI_Controller {


	public function index()
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

	public function properties()
	{
		if(!empty($this->session->userdata('username'))){


			$this->load->library('pagination');

		
		$count=$this->db->get('tbl_property')->num_rows();

		$config['base_url'] = site_url('Wproperties/properties/');
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

		 if ($this->uri->segment(3)) {
		 $data['segment'] = $this->uri->segment(3);
		 } else {
		 $data['segment'] = 0;
		 }


		$this->pagination->initialize($config);

 

		$data['property']=$this->db->limit($config['per_page'], $data['segment'])->get('tbl_property')->result_array(); 





		$data['head']=$this->db->where('tenant_id', $this->session->userdata('id'))->get('tbl_request')->result_array();

		$this->load->view('include/header1', $data);	
		$this->load->view('properties', $data);
		$this->load->view('include/footer1');

		}

		else{

			redirect(base_url());
		}

	}



		

	

	
}
