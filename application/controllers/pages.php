<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	function index(){

		//$this->load->view('template_view');

		//$this->load->library('template');
		$this->template->page_view();

	}

}