<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class SpendingModel extends CI_Model {

	public function get($filter)
	{

		$this->load->database();
		$where = 'Where id != 0 ';
		if(isset($filter['category_id']) && $filter['category_id']){
			$where .= 'and category_id = '.$filter['category_id'];
		}
		if(isset($filter['init_date']) && $filter['init_date']){
			$where .= 'and date >=  "'.$filter['init_date'].'"';
		}
		if(isset($filter['final_date']) && $filter['final_date']){
			$where .= 'and date <=  "'.$filter['final_date'].'"';
		}
        return $this->db->query('Select * From spending '.$where)->result_array();
	}

	public function create($req)
	{
		$this->load->database();
        $this->db->insert('spending', $req);
	}

	
}