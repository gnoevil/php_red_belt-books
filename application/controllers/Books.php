<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('main.php');

class Books extends Main {

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('User');
		$this->load->Model('Review');
		$this->load->Model('Book');
		if(! $this->is_login())
		{
			$this->session->set_flashdata("error_message","Please login");
			redirect(base_url('/'));
		}
		$this->load->Model("Author");
	}

	public function index()
	{
		$recent_book_reviews = $this->Review->get_all_reviews();
		$all_books = $this->Book->get_all_books();
		$all_users = $this->User->get_all_users();
		$this->load->view("Books/books", array('current_user'   => $this->current_user,
												   'recent_reviews' => $recent_book_reviews,
												   'all_books'      => $all_books,
												   'all_users'      => $all_users
												   )
						 );
	}
