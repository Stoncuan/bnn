<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{
		$this->load->view('template/auth_header');
		$this->load->view('admin/dashboard');
		$this->load->view('template/auth_footer');
	}
}
