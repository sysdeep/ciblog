<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model {


	function get_all_articles(){
	
		
		$query = $this->db->get('articles');

		return $query->result_array();
	}



} 