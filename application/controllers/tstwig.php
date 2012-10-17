<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tstwig extends CI_Controller {

	function index(){

		//загружаем twig в авотагрузке
		//$this->load->library('twig');		
		$data = array('title' => "Twig title" );
		echo $this->twig->render('tstwig.html', $data);

	}

}