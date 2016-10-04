<?php
class Allusers Extends CI_Model
{
	// Get all users
	public function get(){
		$query = $this->db->get('user');
		return $query->result();
	}
	// Get user based on ID
	// public function getById($id){
	// 	$query = $query = $this->db->get_where('tbl_users', array('id' => $id)
	// 	return $query->result();
	// }
}