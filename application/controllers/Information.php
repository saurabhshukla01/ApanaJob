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

			$this->load->view('templates/header');
			$this->load->view('pages/contact');
			$this->load->view('templates/footer');
			
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
