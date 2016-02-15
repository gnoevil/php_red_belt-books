<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	public function index()
	{
		$this->load->view('books');
	}

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->model('Book');
		//$this->load->model('Review');

	}

	public function show($id)
	{
		$book_display = $this->Book->get_book_by_id($id);
	}
	public function add()
	{
		$book_info['title'] = $this->input->post('title');
		$book_info['author_name'] = $this->input->post('author_name');
		$review_info['rating'] = $this->input->post('rating');
		$review_info['review'] = $this->input->post('review');
        $add_book = $this->Book->add_book($book_info);
        //$add_review = $this->Review->add_review($review_info);

        redirect("/books");
		
	}


}
