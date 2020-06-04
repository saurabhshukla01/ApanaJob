<?php 
	class Register_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function register($enc_password , $resume , $user_uid){

			$data = array(
				'user_uid' => $user_uid,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => $enc_password,
	            'mobile' => $this->input->post('mobile'),
	            'location' => $this->input->post('location'),
	            'status' => 1 ,
	            'resume' => $resume,
			);

			// Insert user
			return $this->db->insert('registers', $data);
		}

		public function education($skills , $user_uid){

			$data = array(
				'user_uid' => $user_uid,
				'high_qualifiaction' => $this->input->post('high_qualifiaction'),
				'course_name' => $this->input->post('course_name'),
	            'specialization' => $this->input->post('specialization'),
	            'uc_name' => $this->input->post('uc_name'),
	            'course_type' => $this->input->post('course_type'),
	            'passing_year' => $this->input->post('passing_year'),
	            'status' => 1 ,
	            'skills' => $skills,
			);

			//echo $this->db->last_query();
			//die();

			return $this->db->insert('educations', $data);
		}

		public function profilecomplete($work_locations , $user_uid){

			$data = array(

				'user_uid' => $user_uid,
				'user_desc' => $this->input->post('user_desc'),
	            'job_type' => $this->input->post('job_type'),
	            'emp_type' => $this->input->post('emp_type'),
	            'skills' => $this->input->post('skills'),
	            'version' => $this->input->post('version'),
	            'last_year' => $this->input->post('last_year'),
	            'exp_year' => $this->input->post('exp_year'),
	            'gender' => $this->input->post('gender'),
	            'status' => 1 ,
	            'work_location' => $work_locations,
			);


			return $this->db->insert('profilecompletes', $data);
		}

		public function login($name , $email , $password){

			// Validate
			$this->db->where('name', $name);
			$this->db->where('email', $email);
			$this->db->where('password', $password);


			$result = $this->db->get('registers');

			if($result->num_rows() == 1){

				return $result->row(0)->user_uid;

			} else {

				return false;
			}

		}

		/*

		public function check_name_exists($name){
			$query = $this->db->get_where('registers', array('name' => $name));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('registers', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		*/
		

	}
