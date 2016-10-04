<?php
class Category_model Extends CI_Model
{
	// Get all users
	public function get(){
		$query = $this->db->get('user');
		return $query->result();
	}
	public function get_category1(){
		 echo"rames";
		//$this->db->select('category.*,sub_category.*')->from('category1');
		// $this->db->join('sub_category','sub_category.cat_id=category.id','left');
		// $query=$this->db->get();
		// return $query->result_array();

			}
	public function get_sub_category($cat_id=''){
		$query = $this->db->get_where('sub_category', array('cat_id' => $cat_id));
		return $query->result();
	}
}