<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
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
		
	
	public function provinces(){		
		 	$query = $this->db->select('*')->from('provinces')->get();
		if ($query->num_rows() > 0) {
			return $query->result();
			
		}else{
			return false;
		}
	}


}  