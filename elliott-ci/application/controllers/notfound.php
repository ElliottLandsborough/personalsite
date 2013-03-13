<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index()
	{
		$title['title']='Page not found.';
		$this->load->view('header',$title);
		$this->load->view('notfound');
		$this->load->view('footer');
	}
}