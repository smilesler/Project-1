<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function viewcat(){		
		$query = $this->db->get_where('cat', 
						array(
							'member_id' =>  $this->session->data->member_id,
						)
			);
		if ($query->num_rows() > 0) {
			return $query->result();
				
		}else{
			return false;
		}
	}
	public function viewprofile(){		
		 	$query = $this->db->get_where('member', 
						array(
							'member_id' =>  $this->session->data->member_id,
						)
			);
		if ($query->num_rows() > 0) {
			return $query->result();
			
		}else{
			return false;
		}
	}		

	public function update(){
		$data = array(
			'member_displayname' => $this->input->post('member_displayname'),
			'member_phone' => $this->input->post('member_phone'),
			'member_status' => $this->input->post('member_status'),
		);
		$this->db->where('member_id',$this->session->data->member_id)->update('member', $data);
		$rs = $this->db->get_where('member', 
						array(
							'member_id' =>  $this->session->data->member_id
						)
				   	);
		 $this->session->data = $rs->result()[0];

		redirect(base_url('home/profile'));
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
	public function showCat(){
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
	public function provinces(){		
		 	$query = $this->db->select('*')->from('provinces')->get();
		if ($query->num_rows() > 0) {
			return $query->result();
			
		}else{
			return false;
		}
	}


}  