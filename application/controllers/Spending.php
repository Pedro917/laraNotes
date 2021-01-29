<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Spending extends CI_Controller {

	public $baseUrl = 'http://localhost/my-spending/';



	public function index()
	{
		$this->load->model('SpendingModel', 'spending_model');
		$post = $this->input->post();
		$result = $this->spending_model->get($post);

		$this->result = $result;



		$this->load->view('spending_list');
	}

	public function create()
	{	
		if($post = $this->input->post()){
			$this->load->model('SpendingModel', 'spending_model');
			$this->spending_model->create($post);
		}

		$this->load->view('spending_register');
		
	}
}