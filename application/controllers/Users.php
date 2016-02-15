<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('main.php');

class Users extends Main
	public function __construct()
	{
		parent::__construct();
		$this->load->Model("User");
		//$this->output->enable_profiler();
	}
	public function index()
	{
		if($this->is_login())
		{
			redirect(base_url('Books/index'));
		}
		else
		{
			$this->load->view('Users/home');
		}

	}

}
