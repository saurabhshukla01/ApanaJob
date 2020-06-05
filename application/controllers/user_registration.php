<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user_registration extends CI_Controller{
		public function index(){
			
			$data['title'] = 'ApanaJob Portal';
			$data['jobs'] = $this->Job_model->get_jobs();
			$data['blogs'] = $this->Blog_model->get_blogs();
			$data['categories'] = $this->Category_model->get_categories();
			
			//echo "<pre>"; print_r($data['categories']);die();

			$this->load->view('templates/header');
			$this->load->view('pages/home' , $data);
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

		public function price(){
			
			$data['title'] = 'Price';

			$this->load->view('templates/header');
			$this->load->view('pages/price' , $data);
			$this->load->view('templates/footer');
			
		}

		public function search(){
			
			$data['title'] = 'Search';

			$data['jobs'] = $this->Job_model->get_jobs();
			$data['blogs'] = $this->Blog_model->get_blogs();
			$data['categories'] = $this->Category_model->get_categories();

			$this->load->view('templates/header');
			$this->load->view('pages/search' , $data);
			$this->load->view('templates/footer');
			
		}

		public function single(){
			
			$data['title'] = 'Single';

			$this->load->view('templates/header');
			$this->load->view('pages/single' , $data);
			$this->load->view('templates/footer');
			
		}
	}
