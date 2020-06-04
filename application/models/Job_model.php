<?php 
	class Job_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_jobs($limit = FALSE, $offset = FALSE){

			if($limit){
				$this->db->limit($limit, $offset);
			}

			$query = $this->db->get('jobs');
			//$query = $this->db->order_by('job_id','desc');
			//$query = $this->db->get_where('jobs');
			//print_r($this->db->last_query());
			//die();
			return $query->result_array();
			//return $query->row_array();
		}

		public function get_job_by_id($job_id){

			$query = $this->db->get('jobs');
			$query = $this->db->get_where('jobs',array('job_id' => $job_id));

			//print_r($this->db->last_query());
			//die();
			
			return $query->row_array();
		}

		public function create($company_logo){

			$data = array(
				'job_name' => $this->input->post('job_name'),
				'company_name' => $this->input->post('company_name'),
				'job_desc' => $this->input->post('job_desc'),
				'job_type' => $this->input->post('job_type'),
				'job_category' => $this->input->post('job_category'),
				'company_address' => $this->input->post('company_address'),
				'company_min_salary' => $this->input->post('company_min_salary'),
				'company_max_salary' => $this->input->post('company_max_salary'),
	            'company_logo' => $company_logo,
			);

			// Insert user
			return $this->db->insert('jobs', $data);
		}

	}