<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


	public function index()
	{
		$this->load->model('Category_model');
		// get all categires
		$all_cat = $this->Category_model->get_category();
		echo"<pre>";
		print_r($all_cat);
		exit;
		$this->load->view('category',array('data'=>$all_cat));
	}
	public function add_cat()
	{
		
	}

}
