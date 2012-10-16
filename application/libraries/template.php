<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template  {

	function page_view(){

		$CI =& get_instance();

		$CI->load->view('blocks/scripts_view');
		$CI->load->view('blocks/header_view');
		$CI->load->view('blocks/menu_view');
		$CI->load->view('blocks/mainblock_view');
		$CI->load->view('blocks/auth_view');
		$CI->load->view('blocks/rightblock_view');
		$CI->load->view('blocks/footer_view');

	}

} 