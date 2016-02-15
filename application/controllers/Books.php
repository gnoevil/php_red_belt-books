<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	public function index()
	{
		$this->load->view('Users/books.php');
	}
	public function add()
	{
		$this->load->Book->///bookdata
	}

}
