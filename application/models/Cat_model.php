<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cat_model extends CI_Model {
	public function viewcat(){		
		$query = $this->db->get_where('cat', 
						array(
							'member_id' =>  $this->session->data->member_id,
							'cat_display' =>  true ,
						)
			);
		if ($query->num_rows() > 0) {
			return $query->result();
				
		}else{
			return false;
		}
	}
	public function addCat(){	
		$data = array(
			'member_id' => $this->session->data->member_id,
			'cat_name' => $this->input->post('cat_name'),
			'cat_birthdate' => $this->input->post('cat_birthdate'),
			'cat_sex' => $this->input->post('cat_sex'),
			'cat_breed' => $this->input->post('cat_breed'),
			'cat_habit' => $this->input->post('cat_habit'),
			'cat_status' => $this->input->post('cat_status'),
			'cat_display' => true,		

		);
		$this->db->insert('cat', $data);
		redirect(base_url('home/profile'));
	}
	public function editCat(){	
		$data = array(
			
			'cat_name' => $this->input->post('cat_name'),
			'cat_birthdate' => $this->input->post('cat_birthdate'),
			'cat_sex' => $this->input->post('cat_sex'),
			'cat_breed' => $this->input->post('cat_breed'),
			'cat_habit' => $this->input->post('cat_habit'),
			'cat_status' => $this->input->post('cat_status'),
					
		);

		$this->db->where('cat_id',$this->input->post('cat_id'))->update('cat', $data);
		redirect(base_url('home/profile'));

	}
	public function showcountCat(){
	$query = $this->db->select('COUNT(member_id) as countT')->from('cat')->where('member_id',$this->session->data->member_id)->get();
	
		if ($query->num_rows() > 0) {
			return $query->result()[0]->countT; 
		}else{
			return false;
		}
		
	}
	public function cat_breed(){		
		 	$query = $this->db->select('*')->from('cat_breed')->get();
		if ($query->num_rows() > 0) {
			return $query->result();
			
		}else{
			return false;
		}
	}

	public function showcat($cat_id=0){	
		$where = array('cat_status' =>  0);
		if($cat_id>0){	
			$where['cat_id'] = $cat_id;
		}	
		$query = $this->db->get_where('cat',$where);
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function delete($cat_id=0){
		$data = array(
					`cat_display` => false,
		);

	print_r($this->db->where('cat_id',$this->input->get('cat_id'))->update('cat', $data) 
		);
	
		redirect(base_url('home/profile'));
	}
}