<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Model {

	public function add_book($book_info)
	{
		$query = "INSERT INTO books (title, author, created_at,updated_at) VALUES (?,?,NOW(), NOW())";
		$values = array($book_info['title'], $book_info['author_name']);
		return $this->db->query($query, $values);
	}

	public function get_book_by_id()
	{
		return $this->db->query("SELECT * FROM books WHERE id = ?", array($books))->row_array();
	}

}
