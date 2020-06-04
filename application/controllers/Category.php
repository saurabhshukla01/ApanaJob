<?php
	class Category extends CI_Controller{

	public function index($offset = 0){


			// Pagination Config
			$config['base_url'] = base_url() . 'category/index/';
			$config['total_rows'] = $this->db->count_all('categories');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			// Init Pagination
			$this->pagination->initialize($config);

			$data['title'] = 'Show Categories Pages';

			$data['Categories'] = $this->Category_model->get_categories($config['per_page'], $offset);

			//print_r($data['Categories']);die();

			$this->load->view('templates/header');
			$this->load->view('categories/index',$data);
			$this->load->view('templates/footer');
	}

	public function Create(){

		$data['title'] = 'Create Category Pages';

		$this->form_validation->set_rules('category_name', 'Category Name', 'required');

		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');
			$this->load->view('categories/create',$data);
			$this->load->view('templates/footer');

		}else{
			// Upload Pdf or txt Resume
				$this->load->library('upload');
				$config['upload_path'] = './assets/Apanajob/category/';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']    = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->upload->initialize($config);
				if (!$this->upload->do_upload('category_image')){

					//echo $this->upload->display_errors();

					$this->session->set_flashdata('category_image', 'Only accepted Jpeg | Jpg | png files , not upload Category Image Try again');
					redirect('category/create');
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$category_image = $_FILES['category_image']['name'];

					//print_r($resume);die();
					//echo "<pre>"; Print_r($this->upload->data()); echo "</pre>"; die();
				}


				$this->Category_model->create($category_image);

				redirect('category/create');
		}
	}
}
