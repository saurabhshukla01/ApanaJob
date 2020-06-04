<?php 
	class Category_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_categories($limit = FALSE, $offset = FALSE){

			if($limit){
				$this->db->limit($limit, $offset);
			}

			$query = $this->db->get('categories');

			//$query = $this->db->get_where('categories');
			//print_r($this->db->last_query());
			//die();
			return $query->result_array();
			//return $query->row_array();
		}

		public function create($category_image){

			$data = array(
				'category_name' => $this->input->post('category_name'),
	            'category_image' => $category_image,
			);

			// Insert user
			return $this->db->insert('categories', $data);
		}

	}