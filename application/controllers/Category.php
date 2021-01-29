<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public $baseUrl = 'http://localhost/my-spending/';

	public function list()
	{
		$this->load->view('category_list');
	}

	public function create()
	{
		$this->load->view('category_register');
	}
}