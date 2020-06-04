<?php 
	class Comments extends CI_Controller{

		public function create($blog_id){

			//$data['blog'] = $this->Blog_model->get_blogs($blog_id);

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('comment_subject','Comment Subejct','required');
			$this->form_validation->set_rules('comment_body','Comment Body','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('blogs/view' , $data);
				$this->load->view('templates/footer');
				redirect('blogs/view/'.$blog_id);
			}
			else
			{
				$this->Comment_model->create($blog_id);
				redirect('blogs/view/'.$blog_id);
			}

		}
	}