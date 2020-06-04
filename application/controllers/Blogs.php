<?php
	class Blogs extends CI_Controller{

	public function index($offset = 0){


			// Pagination Config
			$config['base_url'] = base_url() . 'blogs/index/';
			$config['total_rows'] = $this->db->count_all('blogs');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			// Init Pagination
			$this->pagination->initialize($config);


			$data['title'] = 'Show Blogs Pages';

			$data['blogs'] = $this->Blog_model->get_blogs($config['per_page'], $offset);
			
			$data['categories'] = $this->Category_model->get_categories();

			//$data['blogs'] = $this->Blog_model->get_all_blog_comment($config['per_page'], $offset);
			//$blog_id = $data['blogs']; 
			//echo $blog_id; die();
			//print_r($data['blogs']);die();

			$this->load->view('templates/header');
			$this->load->view('blogs/index',$data);
			$this->load->view('templates/footer');
	}

	public function Create(){

		$data['title'] = 'Create Blogs Pages';

		$this->form_validation->set_rules('blog_name', 'Blog Name', 'required');
		$this->form_validation->set_rules('blog_desc', 'Blog Description', 'required');

		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');
			$this->load->view('blogs/create',$data);
			$this->load->view('templates/footer');

		}else{
			// Upload Pdf or txt Resume
				$this->load->library('upload');
				$config['upload_path'] = './assets/Apanajob/blog/';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']    = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->upload->initialize($config);
				if (!$this->upload->do_upload('blog_image')){

					//echo $this->upload->display_errors();

					$this->session->set_flashdata('blog_image', 'Only accepted Jpeg | Jpg | png files , not upload Category Image Try again');
					redirect('blogs/create');
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$blog_image = $_FILES['blog_image']['name'];

					//print_r($resume);die();
					//echo "<pre>"; Print_r($this->upload->data()); echo "</pre>"; die();
				}


				$this->Blog_model->create($blog_image);

				redirect('blogs/create');
		}
	}

	public function view($blog_id){

			$data['blogs'] = $this->Blog_model->get_blog_by_id($blog_id);
			$data['comments'] = $this->Comment_model->get_comments($blog_id);
			$data['count'] = count($data['comments']);

			if(empty($data['blogs'])){
				show_404();
			}

			//print_r( $data['count']);
			//die();

			$this->load->view('templates/header');
			$this->load->view('blogs/view' , $data);
			$this->load->view('templates/footer');

		}
}
