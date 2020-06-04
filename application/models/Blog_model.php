<?php 
	class Blog_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_blogs($limit = FALSE, $offset = FALSE){

			if($limit){
				$this->db->limit($limit, $offset);
			}

			$query = $this->db->get('blogs');

			//$query = $this->db->get_where('blogs');
			//print_r($this->db->last_query());
			//die();
			return $query->result_array();
			
			//return $query->row_array();
		}

		public function get_blog_by_id($blog_id){

			$query = $this->db->get('blogs');
			$query = $this->db->get_where('blogs',array('blog_id' => $blog_id));

			//print_r($this->db->last_query());
			//die();

			return $query->row_array();
		}

		public function get_all_blog_comment(){


			$query = $this->db->select('*');
			$query = $this->db->from('blogs');
			$query = $this->db->join('comments','blogs.blog_id = comments.blog_id');
			$query = $this->db->get();

			//print_r($this->db->last_query());
			//die();

			return $query->result_array();
		}


		public function create($blog_image){

			$data = array(
				'blog_name' => $this->input->post('blog_name'),
				'blog_desc' => $this->input->post('blog_desc'),
	            'blog_image' => $blog_image,
			);

			// Insert user
			return $this->db->insert('blogs', $data);
		}

	}