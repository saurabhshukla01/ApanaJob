<?php
	class Information extends CI_Controller{

		public function index(){

			$data['title'] = 'ApanaJob Portal';
			$data['jobs'] = $this->Job_model->get_jobs();
			$data['blogs'] = $this->Blog_model->get_blogs();
			$data['categories'] = $this->Category_model->get_categories();

			$this->load->view('templates/header');
			$this->load->view('pages/home',$data);
			$this->load->view('templates/footer');
			
		}
		public function about(){

			$this->load->view('templates/header');
			$this->load->view('pages/about');
			$this->load->view('templates/footer');
			
		}
		public function contact(){

			$data['title'] = 'Contact';

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('subject','Subject','required');
			$this->form_validation->set_rules('message','Message','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/contact' , $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->Contact_model->create();
				redirect('contact');
			}
			
		}
		public function privacy(){

			$this->load->view('templates/header');
			$this->load->view('pages/privacy');
			$this->load->view('templates/footer');
			
		}
		public function services(){

			$this->load->view('templates/header');
			$this->load->view('pages/services');
			$this->load->view('templates/footer');
			
		}
		public function term_condition(){

			$this->load->view('templates/header');
			$this->load->view('pages/term-condition');
			$this->load->view('templates/footer');
			
		}

		public function demo(){

			$this->load->view('pages/demo');

		}

	}
