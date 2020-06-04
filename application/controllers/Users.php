<?php
	class Users extends CI_Controller{

		public function home(){

			$this->load->view('templates/login-header');
			$this->load->view('users/home');
			$this->load->view('templates/login-footer');
		}

		public function register(){

			$data['title'] = 'Simple Register Page';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/login-header');
				$this->load->view('users/register',$data);
				$this->load->view('templates/login-footer');
			} else {

				// Upload Pdf or txt Resume
				$this->load->library('upload');
				$config['upload_path'] = './assets/resume/files/';
				$config['allowed_types'] = 'pdf|txt';
				$config['max_size']    = '1000000';

				$this->upload->initialize($config);
				if (!$this->upload->do_upload('resume')){

					//echo $this->upload->display_errors();
					$this->session->set_flashdata('user_resume', 'Only accepted Pdf | txt files , not upload resume Try again');
					redirect('users/register');
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$resume = $_FILES['resume']['name'];

					//print_r($resume);die();
					//echo "<pre>"; Print_r($this->upload->data()); echo "</pre>"; die();
				}

				$user_uid = uniqid();
				//encypt password
				$enc_password = md5($this->input->post('password'));

				$this->Register_model->register($enc_password , $resume , $user_uid);
				//echo $user_uid;die();
				redirect('users/education/'.$user_uid);
				//redirect('users/education');
			}
		}

		public function education($user_uid){

			$data['title'] = 'User Register After Eduaction Page';
			$data['user_uid'] = $user_uid;

			$this->form_validation->set_rules('high_qualifiaction', 'High Qualifiaction', 'required');
			$this->form_validation->set_rules('course_name', 'Course Name', 'required');
			$this->form_validation->set_rules('specialization', 'Specialization', 'required');
			$this->form_validation->set_rules('uc_name', 'University/Collage Name', 'required');
			$this->form_validation->set_rules('course_type', 'Course Type', 'required');
			$this->form_validation->set_rules('passing_year', 'Passing Year', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/login-header');
				$this->load->view('users/education',$data);
				$this->load->view('templates/login-footer');
			} else {

				    $data= array(
				        'skill' => implode(",", $this->input->post('skills'))
				    );
				    $skills = $data['skill'];

				    //print_r($data);
					//die();
				$this->Register_model->education($skills , $user_uid);
			redirect('users/profilecomplete/'.$user_uid);
			}
		}

		public function profilecomplete($user_uid){

			$data['title'] = 'Simple User Complete profile Page';
			$data['user_uid'] = $user_uid;

			$this->form_validation->set_rules('job_type', 'Job Type', 'required');
			$this->form_validation->set_rules('emp_type', 'Employee Type', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/login-header');
				$this->load->view('users/profilecomplete',$data);
				$this->load->view('templates/login-footer');
			} else {


				$data= array(
				    'work_location' => implode("," , $this->input->post('work_locations'))
				);

				$work_locations = $data['work_location'];
				//die();
			    //echo $data['work_location'];

				$this->Register_model->profilecomplete($work_locations , $user_uid);

				// Set message
				//$this->session->set_flashdata('user_registered', 'You are now registered completed User Show Jobportal Home Page');

				 redirect('/');

			}
		}


		// Log in user
		public function login(){

			$data['title'] = 'User Login Page';

			$this->form_validation->set_rules('name', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/login-header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/login-footer');
			} else {
				
				// Get username
				$name = $this->input->post('name');
				// Get email
				$email = $this->input->post('email');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user_uid = $this->Register_model->login($name, $email , $password);

				if($user_uid){
					// Create session
					$user_data = array(
						'user_uid' => $user_uid,
						'name' => $name,
						'email' => $email,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('/');
				} else {

					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('users/login');
				}		
			}
		}


		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('name');
			$this->session->unset_userdata('email');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('users/login');
		}


		/*
		public function check_username_exists($name){
			$this->form_validation->set_message('check_name_exists','That username is taken. Please choose a different one');

			if($this->Register_model->check_username_exists($name)){
				return true;
			} else {
				return false;
			}
		}

		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->Register_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
		*/
		
	}
