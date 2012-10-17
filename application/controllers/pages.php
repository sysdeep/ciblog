<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	function index(){

		//$this->load->view('template_view');

		//$this->load->library('template');
		//$this->template->page_view();
		redirect(base_url());
		

	}

	function page($title){
		$data['pages'] = $this->pages_model->get_pages();
		$data['page_info'] = $this->pages_model->get_page_info($title);
		echo $this->twig->render('base.html', $data);
	}

}