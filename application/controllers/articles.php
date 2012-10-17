<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

	function index(){

		$this->load->model('articles_model');
		$data['pages'] = $this->pages_model->get_pages();
		$data['page_info'] = $this->pages_model->get_page_info($title);
		$data['categories'] = $this->pages_model->get_cat();
		$data['categories'] = $this->pages_model->get_all_articles();
		echo $this->twig->render('base.html', $data);

	}

	
}