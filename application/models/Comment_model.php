<?php
	class Comment_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create($blog_id){
			$data = array(
				'blog_id' => $blog_id,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'comment_subject' => $this->input->post('comment_subject'),
				'comment_body' => $this->input->post('comment_body')
			);

			return $this->db->insert('comments', $data);
		}

		public function get_comments($blog_id){
			$query = $this->db->get_where('comments', array('blog_id' => $blog_id));
			return $query->result_array();
		}
	}